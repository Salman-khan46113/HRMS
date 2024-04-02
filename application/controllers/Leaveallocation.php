<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Leaveallocation extends MY_controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library("session");
    $this->load->model("Leaveallocation_model");
    $base_url = $this->config->item("base_url");
    $this->smarty->assign("base_url", $base_url);
  }


  public function leave_allocation()
  {
    $data["designation"] = $this->Leaveallocation_model->get_designation();
    $data["data"] = $this->Leaveallocation_model->get_leave_allocation();
    foreach ($data["data"] as $key => $value) {
      $data["data"][$key]["total_leave"] = $value['sick_leave']+$value['paid_leave']+$value['casual_leave'];

      $data["data"][$key]["action"] =
      '<span  class="edit_shift me-2 text-secondary cursor" data-id=' .
      $value["id"] .
      ' title="Edit"><i class=" la-edit ti ti-edit"></i></span>
      <span class="delete_shift text-danger cursor" data-id=' .
      $value["id"] .
      ' title="Delete"><i class=" la-trash ti ti-trash"></i></span>';

    }

    $this->smarty->view("leave_allocation.tpl", $data);
  }



  public function get_leave_allocation_details()
  {
    $data["data"] = [];
    if (isset($_POST["edit"])) {
      $id = $this->input->post("edit");
      $holiday_details = $this->Leaveallocation_model->get_leave_allocation_details($id);

      $data["data"] = $holiday_details;
    }
    echo json_encode($data);
    exit();
  }
  public function leave_allocation_action()
  {
    if (isset($_POST["id"])) {
      $id = $this->input->post("id");
    } else {
      $id = "";
    }

    if ($id == "") {

      $data = [
        "sick_leave" => $this->input->post("sick_leave"),
        "paid_leave" => $this->input->post("paid_leave"),
        "casual_leave" => $this->input->post("casual_leave"),
        "designation_id" => $this->input->post("designation_id"),
        "added_by" => 0,
        "added_on" => date("Y-m-d H:i:s"),
      ];
    } else {

      $data = [
        "id" => $this->input->post("id"),
        "sick_leave" => $this->input->post("sick_leave"),
        "paid_leave" => $this->input->post("paid_leave"),
        "casual_leave" => $this->input->post("casual_leave"),
        "designation_id" => $this->input->post("designation_id"),
        "updated_by" => 0,
        "updated_on" => date("Y-m-d H:i:s"),
      ];
    }
    $result = $this->Leaveallocation_model->leave_allocation_action($data);
    if ($result < 0) {
      $success = -1;
      $message = "Leave Already Allocated.";
    } elseif ($result == "update") {
      $success = 1;
      $message = "Leave Allocation Updated successfully!";
    } elseif ($result > 0) {
      $success = 1;
      $message = "Leave Allocation successfully!";
    } else {
      $success = 0;
      $message = "Error add data.";
    }

    $return_arr["message"] = $message;
    $return_arr["success"] = $success;

    echo json_encode($return_arr);
    exit();
  }

  public function delete_leave_allocation()
  {
    $id = $this->input->post("id");

    $result = $this->Leaveallocation_model->delete_leave_allocation($id);

    if ($result) {
      $success = 1;
      $message = "Shift Delete successfully!";
    } else {
      $success = 0;
      $message = "An error occurred. Please try again.!";
    }

    $return_arr["message"] = $message;
    $return_arr["success"] = $success;
    echo json_encode($return_arr);
    exit();
  }


}
