<?php
class Attendance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }
    public function get_attendance_details($employee_id, $month, $year)
    {
        $date = date("Y-m-d");
        $this->db->select("ea.*");
        $this->db->from("employee_attendance as ea");
        $this->db->where("ea.employee_id", $employee_id);
        $this->db->where("MONTH(ea.attendance_date)", $month);
        $this->db->where("YEAR(ea.attendance_date)", $year);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_employee_details($id)
    {
        $this->db->select("*");
        $this->db->from("employee_master");
        $this->db->join(
            "tbl_country_master",
            "tbl_country_master.id = employee_master.country"
        );
        $this->db->join(
            "state_master",
            "state_master.iStateId = employee_master.state"
        );
        $this->db->where("employee_master.employee_id", $id);
        $this->db->where("employee_master.sys_record_delete !=", 1);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        // pr($this->db->last_query(),1);

        return $ret_data;
    }
    public function get_attendance_summary($attendance_id)
    {
        $this->db->select("ea.*");
        $this->db->from("employee_attendance as ea");
        $this->db->where("ea.attendance_id", $attendance_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function update_attendance(
        $attendance_id = "",
        $attendance_in_time = "",
        $attendance_out_time = ""
    ) {
        $affected_row = 0;

        if ($attendance_id > 0) {
            if ($attendance_out_time != "") {
                $this->db->set("attendance_out_time", $attendance_out_time);
            }
            if ($attendance_in_time != "") {
                $this->db->set("attendance_in_time", $attendance_in_time);
            }
            $this->db->where("attendance_id", $attendance_id);
            $this->db->update("employee_attendance");
            $affected_row = $this->db->affected_rows();
            $affected_row = $affected_row == 0 ? 1 : $affected_row;
        }

        return $affected_row;
    }
}
