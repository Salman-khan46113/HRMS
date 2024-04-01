<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Holiday extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("holiday_model");
        $base_url = $this->config->item("base_url");
        $this->smarty->assign("base_url", $base_url);
    }
    public function holiday()
    {
        $data = [];
        $data["current_year"] = date("Y");
        $holiday = $this->holiday_model->get_holiday($data["current_year"], "");
        $month_wise_holiday = [];
        foreach ($holiday as $key => $value) {
            $date = $value["holiday_date"];
            $monthName = date("F", strtotime($date));
            $value["holiday_date"] = $new_date = date(
                "d F Y",
                strtotime($date)
            );
            $month_wise_holiday[$monthName][] = $value;
            # code...
        }
        $data["holiday_data"] = $month_wise_holiday;
        // $data = [];
        // pr($holiday,1);
        $this->smarty->view("holiday.tpl", $data);
    }

    public function holiday_management()
    {
        $current_year = date("Y");
        $data["holiday"] = $this->holiday_model->get_holiday($current_year, "");
        $holiday_dates = [];
        foreach ($data["holiday"] as $key => $value) {
            array_push($holiday_dates, $value["holiday_date"]);
            $currentDate = new DateTime();
            $holidayDate = DateTime::createFromFormat(
                "Y-m-d",
                $value["holiday_date"]
            );
            if ($holidayDate >= $currentDate) {
                $data["holiday"][$key]["action"] =
                    '<span  class="edit_holiday me-2 text-secondary cursor" data-id=' .
                    $value["id"] .
                    ' title="Edit"><i class=" la-edit ti ti-edit"></i></span>
              <span class="delete_holiday text-danger cursor" data-id=' .
                    $value["id"] .
                    ' title="Delete"><i class=" la-trash ti ti-trash"></i></span>';
            } else {
                $data["holiday"][$key]["action"] = "--";
            }
        }
        $data["holiday_dates"] = $holiday_dates;
        $this->smarty->view("holiday_management.tpl", $data);
    }

    public function get_holiday_details()
    {
        $data["data"] = [];
        if (isset($_POST["edit"])) {
            $id = $this->input->post("edit");
            $holiday_details = $this->holiday_model->get_holiday_details($id);
            $date = "";
            $date = DateTime::createFromFormat(
                "Y-m-d",
                $holiday_details["holiday_date"]
            );
            $holiday_details["holiday_date_fomated"] = $date->format("m/d/Y");
            $data["data"] = $holiday_details;
        }
        echo json_encode($data);
        exit();
    }
    public function holiday_action()
    {
        if (isset($_POST["id"])) {
            $id = $this->input->post("id");
        } else {
            $id = "";
        }
        // print_r($_POST);
        if ($id == "") {
            $date = DateTime::createFromFormat(
                "m/d/Y",
                $this->input->post("holiday_date")
            );
            $holiday_date = $date->format("Y-m-d");
            $data = [
                "holiday_name" => $this->input->post("holiday_name"),
                "holiday_date" => $holiday_date,
                "company_id"=> $_SESSION['company_id'],
                "created_by" => $_SESSION['employee_id'],
                "created_on" => date("Y-m-d H:i:s"),
            ];
        } else {
            $date = DateTime::createFromFormat(
                "m/d/Y",
                $this->input->post("holiday_date")
            );
            $holiday_date = $date->format("Y-m-d");
            $data = [
                "id" => $this->input->post("id"),
                "holiday_name" => $this->input->post("holiday_name"),
                "holiday_date" => $holiday_date,
                "updated_by" => $_SESSION['employee_id'],
                "updated_on" => date("Y-m-d H:i:s"),
            ];
        }
        $result = $this->holiday_model->holiday_action($data);
        // print_r($data);
        if ($result < 0) {
            $success = -1;
            $message = "Holiday Already Exits.";
        } elseif ($result == "update") {
            $success = 1;
            $message = "Holiday Updated successfully!";
        } elseif ($result > 0) {
            $success = 1;
            $message = "Holiday added successfully!";
        } else {
            $success = 0;
            $message = "Error add data.";
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;

        echo json_encode($return_arr);
        exit();
    }

    public function delete_holiday()
    {
        $id = $this->input->post("id");

        $result = $this->holiday_model->delete_holiday($id);

        if ($result) {
            $success = 1;
            $message = "Holiday Delete successfully!";
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
