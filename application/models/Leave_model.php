<?php
class Leave_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_employee_leave($id, $month, $year, $type)
    {
        $this->db->select(
            'el.*,CONCAT(em.first_name," ",em.last_name) as approved_name'
        );
        $this->db->from("employee_leave as el");
        $this->db->join(
            "employee_master as em",
            "em.employee_id = el.employee_id",
            "left"
        );
        $this->db->order_by("el.added_date", "desc");
        $this->db->where("el.employee_id", $id);
        $this->db->where("em.sys_record_delete !=", 1);
        if ($type == "validation") {
            $this->db->where("MONTH(el.leave_start_date) >=", $month);
            $this->db->where("YEAR(el.leave_start_date) >=", $year);
        } else {
            $this->db->where("MONTH(el.leave_start_date) =", $month);
            $this->db->where("YEAR(el.leave_start_date) =", $year);
        }

        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];

        return $ret_data;
    }
    public function insert_employee_leave($data)
    {
        $this->db->insert("employee_leave", $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
    public function update_employee_leave($update_arr = [])
    {
        $this->db->set("leave_start_date", $update_arr["leave_start_date"]);
        $this->db->set("leave_end_date", $update_arr["leave_end_date"]);
        $this->db->set("leave_type", $update_arr["leave_type"]);
        $this->db->set("leave_name", $update_arr["leave_name"]);
        $this->db->set("updated_date", $update_arr["updated_date"]);
        $this->db->set("reason", $update_arr["reason"]);
        $this->db->where("leave_id", $update_arr["leave_id"]);
        $this->db->update("employee_leave");
        $affected_row = $this->db->affected_rows();
        $affected_row = $affected_row == 0 ? 1 : $affected_row;
        // pr($this->db->last_query());
        return $affected_row;
    }

    public function get_employee_leave_list(
        $condition_arr = [],
        $search_params = ""
    ) {
        $this->db->select(
            'el.leave_id as leave_id,CONCAT(em.first_name," ",em.last_name) as employee_name,em.profile_image as image,em.employee_code as employee_code,el.leave_start_date as from_date,el.leave_end_date as to_date,el.reason as reason,el.status as status,em.designation as designation,em.department as department,em.employee_week_off as employee_week_off,em.city as location,em.email as email,em.employee_id as employee_id'
        );
        $this->db->from("employee_leave as el");
        $this->db->join(
            "employee_master as em",
            "em.employee_id = el.employee_id",
            "left"
        );
        $company_id = getCompanyId();
        if($company_id > 0){
            $this->db->where("em.company_id", $company_id);
        }
        if (is_array($search_params) && count($search_params) > 0) {
            if ($search_params["status"] != "") {
                $this->db->where("el.status", $search_params["status"]);
            }
            if ($search_params["employee_name"] != "") {
                $this->db->like(
                    "em.first_name",
                    $search_params["employee_name"]
                );
                $this->db->like(
                    "em.last_name",
                    $search_params["employee_name"]
                );
            }
            if ($search_params["employee_code"] != "") {
                $this->db->like(
                    "em.employee_code",
                    $search_params["employee_code"]
                );
            }
            if ($search_params["start_date"] != "") {
                $this->db->where(
                    "el.leave_start_date >=",
                    $search_params["start_date"]
                );
            }
            if ($search_params["end_date"] != "") {
                $this->db->where(
                    "el.leave_end_date <=",
                    $search_params["end_date"]
                );
            }
        }
        if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }
        $this->db->where("em.sys_record_delete !=", 1);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];

        return $ret_data;
    }
    public function update_leave(
        $status = "",
        $request_id = "",
        $updated_date = "",
        $approved_by = ""
    ) {
        $affected_row = 0;
        $this->db->set("status", $status);
        $this->db->set("updated_date", $updated_date);
        $this->db->set("approved_by", $approved_by);
        $this->db->where("leave_id", $request_id);
        $this->db->update("employee_leave");
        $affected_row = $this->db->affected_rows();
        return $affected_row;
    }
    public function get_allocated_leaves($employee_id = '')
    {
        $this->db->select("la.sick_leave as SickLeave,la.paid_leave as PaidLeave,la.casual_leave as CasualLeave");
        $this->db->from("employee_master as em");
        $this->db->join("leave_allocation as la","la.designation_id = em.designation","left");
        $this->db->where("em.employee_id", $employee_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function get_types_wise_leaves($employee_id = '',$allocated_leaves = 0,$employee_leave_id = '')
    {
        $this->db->select("el.*");
        $this->db->from("employee_leave as el");
        $this->db->where("el.employee_id", $employee_id);
        if($employee_leave_id > 0){
            $this->db->where("el.leave_id !=", $employee_leave_id);
        }
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        $apllied_days = 0;
        if(is_valid_array($ret_data)){
            foreach ($ret_data as $key => $value) {
                $start_date = new DateTime($value["leave_start_date"]);
                $end_date = new DateTime($value["leave_end_date"]);
                $interval = (array) $end_date->diff($start_date);
                $apllied_days += 0 ? 1 : $interval["days"] + 1;
            }
        }

        $remaining_leaves = $allocated_leaves - $apllied_days;

        return $remaining_leaves;
    }
}

?>
