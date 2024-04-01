<?php
class Notification_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all_attendance($current_date)
    {
        $this->db->select("ea.*,em.*");
        $this->db->from("employee_master as em");
        $this->db->join(
            "employee_attendance as ea",
            "ea.employee_id = em.employee_id AND ea.attendance_date = '$current_date'",
            "left"
        );
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function insert_attendance_log($insert_arr = [])
    {
        $insert_id = 0;
        // pr($insert_arr,1);
        if (count($insert_arr) > 0 && is_array($insert_arr)) {
            $this->db->insert_batch("employee_attendance", $insert_arr);
            $insert_id = $this->db->insert_id();
        }
        return $insert_id;
    }
    public function get_all_attendance_in_data($date)
    {
        $this->db->select("ea.*");
        $this->db->from("employee_attendance as ea");
        $this->db->where("ea.attendance_date", $date);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function auto_out_attendance($update_arr = [])
    {
        $affected_row = 0;
        if (count($update_arr) > 0 && is_array($update_arr)) {
            $affected_row = $this->db->update_batch(
                "employee_attendance",
                $update_arr,
                "attendance_id"
            );
        }
        return $affected_row;
    }
}
?>