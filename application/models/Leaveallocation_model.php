<?php
class Leaveallocation_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    // $this->load->database();
  }
  public function get_leave_allocation()
  {
    $this->db->select("la.*,dm.designation_name");
    $this->db->from("leave_allocation as la");
    $this->db->join("designation_master as dm", "dm.id = la.designation_id ");
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    return $ret_data;
  }
  public function get_designation()
  {
    $this->db->select("*");
    $this->db->from("designation_master");
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
    return $ret_data;
  }
  public function get_leave_allocation_details($id)
  {
    $this->db->select("*");
    $this->db->from("leave_allocation");
    $this->db->where("id", $id);
    $result_obj = $this->db->get();
    $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
    return $ret_data;
  }
  public function delete_leave_allocation($id)
  {
    $this->db->where("id", $id);
    $result = $this->db->delete("leave_allocation");
    return $result;
  }
  public function leave_allocation_action($data)
  {

    if (empty($data["id"])) {
      $this->db->select("*");
      $this->db->from("leave_allocation");
      $this->db->where("designation_id", $data["designation_id"]);
      $result_obj = $this->db->get();

      $ret_data = is_object($result_obj)
      ? $result_obj->result_array()
      : [];

      if (count($ret_data) > 0) {
        $insert_id = -1;
      } else {
        $this->db->insert("leave_allocation", $data);
        $insert_id = $this->db->insert_id();
      }

      return $insert_id;
    } else {
      $this->db->where("id", $data["id"]);
      $result = $this->db->update("leave_allocation", $data);
      if ($result == 1) {
        $updateData = "update";
      } else {
        $updateData = "Not update";
      }
      return $updateData;
    }
  }


}
