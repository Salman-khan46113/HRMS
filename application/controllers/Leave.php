<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Leave extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("leave_model");
        $base_url = $this->config->item("base_url");
        $this->smarty->assign("base_url", $base_url);
        
    }

    public function leave_list_summary()
    {
        $id = $_SESSION["employee_id"];
        $current_month = date("n");
        $current_year = date("Y");
        $data_val = [];
        $data_val = $this->get_laeve_data_arr(
            $id,
            $current_month,
            $current_year,
            "list"
        );
        $data_val['leave_type'] = [["id"=>"SickLeave","val"=>"Sick Leave"],["id"=>"PaidLeave","val"=>"Paid Leave"],["id"=>"CasualLeave","val"=>"Casual Leave"]];
        // pr($data_val,1);
        $this->smarty->view("employee_leave.tpl", $data_val);
    }
    public function leave_list_filter_data()
    {
        $id = $_SESSION["employee_id"];
        $month = $this->input->post("month");
        $month_arr = $this->input->post("month_arr");
        $date = DateTime::createFromFormat("F Y", $month);
        $current_month = (int) $date->format("m");
        $current_year = (int) $date->format("Y");
        $data_val = [];
        $data_val = $this->get_laeve_data_arr(
            $id,
            $current_month,
            $current_year,
            "filter"
        );

        $html = $this->smarty->fetch("employee_leave_filter.tpl", $data_val);
        $return_arr["html"] = $html;
        $return_arr["message"] = "Leave data get successfully.";
        $return_arr["success"] = 1;
        echo json_encode($return_arr);
        exit();
    }

    public function get_laeve_data_arr(
        $id = "",
        $current_month = "",
        $current_year = "",
        $type = "list"
    ) {
        $leave_list = $this->leave_model->get_employee_leave(
            $id,
            $current_month,
            $current_year,
            "list"
        );
        
        foreach ($leave_list as $key => $value) {
            $leave_list[$key]["action"] = "--";
            if ($value["status"] == "pending") {
                $start_date_value = new DateTime($value["leave_start_date"]);
                $start_date_value = $start_date_value->format("m/d/Y");
                $end_date_value = new DateTime($value["leave_end_date"]);
                $end_date_value = $end_date_value->format("m/d/Y");
                $currentDate = new DateTime();
                $dateToCheck = new DateTime($value["leave_start_date"]);
                if($dateToCheck < $currentDate){
                    $leave_list[$key]["action"] = display_no_character('');
                }else{
                    $leave_list[$key]["action"] =
                    '<i class="la-edit ti ti-edit" data-start-date="' .
                    $start_date_value .
                    '" data-end-date="' .
                    $end_date_value .
                    '" data-leave-request-id="' .
                    $value["leave_id"] .
                    '" data-leave-type="' .
                    $value["leave_type"] .
                    '"></i>';
                }
                
            }

            $leave_list[$key]["approved_by"] =
                $value["approved_by"] > 0 ? $value["approved_name"] : "--";
            $start_date = new DateTime($value["leave_start_date"]);
            $end_date = new DateTime($value["leave_end_date"]);
            $interval = (array) $end_date->diff($start_date);

            $leave_list[$key]["applied_days"] =
                $interval["days"] == 0 ? 1 : $interval["days"] + 1;
        }
        $currentYear = date("Y"); // Get the current year
        $januaryFirst = date("$currentYear-01-01"); // Format January 1st of the current year
        $startDate = new DateTime($januaryFirst);
        $currentDate = new DateTime();
        $months = [];
        $dateInterval = new DateInterval("P1M");
        $dateRange = new DatePeriod($startDate, $dateInterval, $currentDate);
        foreach ($dateRange as $date) {
            $months[] = $date->format("F Y");
        }
        $data_val = $this->leave_model->get_employee_details($this->session->userdata("employee_id"));
        $data_val["months"] = $months;
        $data_val["leave_list"] = $leave_list;
        if ($type == "list") {
            $current_month = date("n");
            $current_year = date("Y");
            $appled_leave_list = $this->leave_model->get_employee_leave(
                $id,
                $current_month,
                $current_year,
                "validation"
            );
            $leave_range_arr = [];
            $date_range_arr = [];
            foreach ($appled_leave_list as $key => $value) {
                if($value['status'] != "reject"){
                    array_push($leave_range_arr, [
                        "leave_start_date" => $value["leave_start_date"],
                        "leave_end_date" => $value["leave_end_date"],
                        "leave_request_id" => $value["leave_id"],
                    ]);
                    array_push($date_range_arr, [
                        "start" => $value["leave_start_date"],
                        "end" => $value["leave_end_date"],
                    ]);
                 }
            }

            $leave_start_dates = array_column(
                $appled_leave_list,
                "leave_start_date"
            );
            $leave_end_dates = array_column(
                $appled_leave_list,
                "leave_end_date"
            );
            $dates = array_unique(
                array_merge($leave_start_dates, $leave_end_dates)
            );
            $data_val["leave_dates"] = array_values($dates);
            $data_val["leave_range_arr"] = $leave_range_arr;
            $data_val["date_range_arr"] = $date_range_arr;
        }
        $allocated_leaves = $this->leave_model->get_allocated_leaves($this->session->userdata("employee_id"));
        $data_val['allocated_leaves'] = $this->leave_model->get_employee_leave_details($this->session->userdata("employee_id"),$allocated_leaves,0);

        return $data_val;
    }

    public function add_update_leave()
    {
        // pr($this->input->post());

        $employee_id = $_SESSION["employee_id"];
        $session_date = $_SESSION;
        $post_data = $this->input->post();
        $message = "";
        $success = 0;
        $date = DateTime::createFromFormat("m/d/Y", $post_data["start_date"]);
        $post_data["start_date"] = $date->format("Y-m-d");
        $date = DateTime::createFromFormat("m/d/Y", $post_data["end_date"]);
        $post_data["end_date"] = $date->format("Y-m-d");

        $start_date = new DateTime($post_data["start_date"]);
        $end_date = new DateTime($post_data["end_date"]);
        $interval = (array) $end_date->diff($start_date);
        $applied_leave_days_val = 0 ? 1 : $interval["days"] + 1;
        $allocated_leaves = $this->leave_model->get_allocated_leaves($employee_id);
        if(isset($allocated_leaves[$post_data["leave_name"]])){
                if ($post_data["mode"] == "Add") {
                    $flag = 0;
                    if (array_key_exists("leave_range_arr", $post_data)) {
                        foreach ($post_data["leave_range_arr"] as $key => $value) {
                            if (
                                $this->isDateInRange(
                                    $value["leave_start_date"],
                                    $post_data["start_date"],
                                    $post_data["end_date"]
                                ) ||
                                $this->isDateInRange(
                                    $value["leave_end_date"],
                                    $post_data["start_date"],
                                    $post_data["end_date"]
                                )
                            ) {
                                $flag = 1;
                            }
                        }
                    }

                    if ($flag == 0) {
                       

                            $insert_arr = [
                                "employee_id" => $employee_id,
                                "leave_start_date" => $post_data["start_date"],
                                "leave_end_date" => $post_data["end_date"],
                                "leave_name" => $post_data["leave_name"],
                                "leave_type" => $post_data["leave_type"],
                                "reason" => $post_data["leave_reason"],
                                "approved_by" => 0,
                                "status" => "pending",
                                "added_date" => date("Y-m-d H:i:s"),
                            ];
                            
                            $insert_id = $this->leave_model->insert_employee_leave(
                                $insert_arr
                            );
                            if ($insert_id > 0) {
                                $success = 1;
                                $message = "Leave request added successfully.";
                                $send_data["email"] = $session_date["email"];
                                $send_data["name"] =
                                    $session_date["first_name"] .
                                    " " .
                                    $session_date["last_name"];
                                $send_data["to_date"] = $post_data["end_date"];
                                $send_data["from_date"] = $post_data["start_date"];
                                $send_data["leave_type"] =
                                    $post_data["leave_type"] == "full_day"
                                        ? "full day"
                                        : "half day";
                                $send_data["title"] = $send_data["subject"] =
                                    "Leave Application Received";
                                $send_data["templete"] = "leave_email_template.tpl";
                                $send_data["email_type"] = "request_leave";
                                $return_arr["email_sender"] = $this->email_sender(
                                    $send_data
                                );
                            } else {
                                $message = "Error!";
                            }
                        
                    } else {
                        $success = 0;
                        $message = "Aleady leave apply between two dates.";
                    }
                } elseif ($post_data["mode"] == "Update") {
                    $flag = 0;
                    if (array_key_exists("leave_range_arr", $post_data)) {
                        foreach ($post_data["leave_range_arr"] as $key => $value) {
                            if (
                                $value["leave_request_id"] ==
                                $post_data["leave_request_id"]
                            ) {
                                unset($post_data["leave_range_arr"][$key]);
                            }
                        }

                        foreach ($post_data["leave_range_arr"] as $key => $value) {
                            if (
                                $this->isDateInRange(
                                    $value["leave_start_date"],
                                    $post_data["start_date"],
                                    $post_data["end_date"]
                                ) ||
                                $this->isDateInRange(
                                    $value["leave_end_date"],
                                    $post_data["start_date"],
                                    $post_data["end_date"]
                                )
                            ) {
                                $flag = 1;
                            }
                        }
                    }
                    if ($flag == 0) {
                        
                            $update_arr = [
                                "leave_id" => $post_data["leave_request_id"],
                                "leave_start_date" => $post_data["start_date"],
                                "leave_end_date" => $post_data["end_date"],
                                "leave_name" => $post_data["leave_name"],
                                "leave_type" => $post_data["leave_type"],
                                "updated_date" => date("Y-m-d H:i:s"),
                                "reason" => $post_data["leave_reason"],
                            ];

                            $affected_row = $this->leave_model->update_employee_leave(
                                $update_arr
                            );
                            if ($affected_row > 0) {
                                $success = 1;
                                $message = "Leave request added successfully.";
                                $send_data["email"] = $session_date["email"];
                                $send_data["name"] =
                                    $session_date["first_name"] .
                                    " " .
                                    $session_date["last_name"];
                                $send_data["to_date"] = $post_data["start_date"];
                                $send_data["from_date"] = $post_data["end_date"];
                                $send_data["leave_type"] =
                                    $post_data["leave_type"] == "full_day"
                                        ? "full day"
                                        : "half day";
                                $send_data["title"] = $send_data["subject"] =
                                    "Update Leave Request";
                                $send_data["templete"] = "leave_email_template.tpl";
                                $send_data["email_type"] = "update_leave";
                                $return_arr["email_sender"] = $this->email_sender(
                                    $send_data
                                );
                            } else {
                                $message = "Error!";
                            }
                        
                    } else {
                        $success = 0;
                        $message = "Aleady leave apply between two dates.";
                    }

                    // pr($post_data['leave_range_arr'],1);
                }
            
        }else{
            $success = 0;

            $message = ucfirst(strtolower(get_status($post_data['leave_name'])))." not allocated by admin.";
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }
    public function isDateInRange($dateToCheck, $startDate, $endDate)
    {
        $dateToCheck = new DateTime($dateToCheck);
        $startDate = new DateTime($startDate);
        $endDate = new DateTime($endDate);

        return $dateToCheck >= $startDate && $dateToCheck <= $endDate;
    }
    public function leave_management()
    {
        $column[] = [
            "data" => "image",
            "title" => "Image",
            "width" => "8%",
            "className" => "dt-center img-box",
        ];
        $column[] = [
            "data" => "employee_name",
            "title" => "Name",
            "width" => "12%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "employee_code",
            "title" => "Employee Code",
            "width" => "10%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "from_date",
            "title" => "From Date",
            "width" => "10%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "to_date",
            "title" => "To Date",
            "width" => "15%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "reason",
            "title" => "Reason",
            "width" => "15%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "applied_days",
            "title" => "Applied Leave (Days)",
            "width" => "10%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "status",
            "title" => "Status",
            "width" => "10%",
            "className" => "dt-center status-row",
        ];
        $column[] = [
            "data" => "action",
            "title" => "Action",
            "width" => "10%",
            "className" => "dt-center",
        ];

        $ajax_json["data"] = $column;
        $ajax_json["is_searching_enable"] = false;
        $ajax_json["is_paging_enable"] = true;
        $ajax_json["is_serverSide"] = true;
        $ajax_json["is_ordering"] = true;
        $ajax_json["is_heading_color"] = "#a18f72";
        $ajax_json["no_data_message"] =
            '<div class="p-3"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No leave request data found..!</div>';
        $ajax_json["is_top_searching_enable"] = true;
        $ajax_json["sorting_column"] = json_encode([]);
        $ajax_json["page_length_arr"] = $this->config->item("page_length");
        $ajax_json["admin_url"] = base_url();
        $ajax_json["base_url"] = base_url();
        // $ajax_json['teacher_data'] = $this->session->userdata();

        $this->smarty->view("leave_management.tpl", $ajax_json);
    }
    public function get_employee_leaves()
    {
        $post_data = $this->input->post();

        $column_index = array_column($post_data["columns"], "data");
        $order_by = "";
        foreach ($post_data["order"] as $key => $val) {
            if ($key == 0) {
                $order_by .= $column_index[$val["column"]] . " " . $val["dir"];
            } else {
                $order_by .=
                    "," . $column_index[$val["column"]] . " " . $val["dir"];
            }
        }

        $condition_arr["order_by"] = $order_by;
        $condition_arr["start"] = $post_data["start"];
        $condition_arr["length"] = $post_data["length"];
        $order_by = "";
        foreach ($post_data["order"] as $key => $val) {
            if ($key == 0) {
                $order_by .= $column_index[$val["column"]] . " " . $val["dir"];
            } else {
                $order_by .=
                    "," . $column_index[$val["column"]] . " " . $val["dir"];
            }
        }
        $condition_arr["order_by"] = $order_by;
        $condition_arr["start"] = $post_data["start"];
        $condition_arr["length"] = $post_data["length"];
        $base_url = $this->config->item("base_url");
        /* filter params */
        $filter_arr = [];
        if (array_key_exists("search", $post_data)) {
            $serch_params = $post_data["search"];
            $filter_arr["status"] = $serch_params["status"];
            $filter_arr["employee_name"] = $serch_params["employee_name"];
            $filter_arr["employee_code"] = $serch_params["employee_code"];
            if ($serch_params["start_date"] != "") {
                $start_date = DateTime::createFromFormat(
                    "m/d/Y",
                    $serch_params["start_date"]
                );
                $serch_params["start_date"] = $start_date->format("Y-m-d");
            }
            if ($serch_params["end_date"] != "") {
                $end_date = DateTime::createFromFormat(
                    "m/d/Y",
                    $serch_params["end_date"]
                );
                $serch_params["end_date"] = $end_date->format("Y-m-d");
            }
            $filter_arr["start_date"] = $serch_params["start_date"];
            $filter_arr["end_date"] = $serch_params["end_date"];
        }

        $leave_list = $this->leave_model->get_employee_leave_list(
            $condition_arr,
            $filter_arr
        );
        foreach ($leave_list as $key => $value) {
            $leave_list[$key]["employee_url"] =
                $base_url . "employee-details.html?id=" . $value["employee_id"];
            $leave_list[$key]["image_url"] =
                $base_url .
                "public/img/uploads/employee_profile/" .
                $value["image"];
            $leave_list[$key]["status_label"] = get_status($value["status"]);
            $leave_list[$key]["status_text"] = $value["status"];
            $leave_list[$key]["action"] = "--";
            $leave_list[$key]["image"] =
                "<img src=" .
                $base_url .
                "public/img/uploads/employee_profile/" .
                $value["image"] .
                " alt='' width='70' height='70' class='rounded-circle'>";

            $leave_list[$key]["status"] =
                '<span class="' .
                $value["status"] .
                '">' .
                get_status($value["status"]) .
                "</span>";
            $leave_list[$key]["reason"] = display_no_character(
                $value["reason"]
            );
            $start_date = new DateTime($value["from_date"]);
            $end_date = new DateTime($value["to_date"]);
            $interval = (array) $end_date->diff($start_date);
            $leave_list[$key]["applied_days"] =
                $interval["days"] == 0 ? 1 : $interval["days"] + 1;

            if ($value["status"] == "pending") {
                $employee_json = base64_encode(json_encode($leave_list[$key]));
                $leave_list[$key]["employee_json"] = $employee_json;
                $leave_list[$key]["action"] =
                    '<i class="la-check-circle ti ti-calendar-check" data-id="' .
                    $value["leave_id"] .
                    '"  data-user-details="' .$employee_json .'" title="Aprove Reject"></i>';
            }
        }
        // pr($leave_list,1);

        $data["data"] = $leave_list;
        $total_record = $this->leave_model->get_employee_leave_list(
            [],
            $filter_arr
        );
        $data["recordsTotal"] = count($total_record);
        $data["recordsFiltered"] = count($total_record);
        echo json_encode($data);
        exit();
    }
    public function get_leave_request_data(){
        $post_data = $this->input->post();
        $data['leave_list'] = $this->leave_model->get_leave_request_data($post_data['leave_id']);
        $data['leave_list']["image"] = $this->config->item("base_url") ."public/img/uploads/employee_profile/" .$data['leave_list']["image"];
        $allocated_leaves = $this->leave_model->get_allocated_leaves($data['leave_list']["employee_id"]);
        $data['allocated_leaves'] = $this->leave_model->get_employee_leave_details($this->session->userdata("employee_id"),$allocated_leaves,$post_data['leave_id']);
        $html = $this->smarty->fetch("leave_request_approve.tpl", $data);
        echo json_encode($html);
        exit();
    }
    public function update_leave_status()
    {
        $post_data = $this->input->post();
        $id = $_SESSION["employee_id"];
        $updated_date = date("Y-m-d H:i:s");
        $status = $post_data["slected_status"];
        $employee_data = $post_data["employee_data"];
        $leave_request_id = $post_data["leave_request_id"];
        $affected_row = $this->leave_model->update_leave(
            $status,
            $leave_request_id,
            $updated_date,
            $id
        );
        if ($affected_row > 0) {
            $success = 1;
            $message = "Leave status updated successfully.";
            $send_data["email"] = $employee_data["email"];
            $send_data["name"] = $employee_data["employee_name"];
            $send_data["status"] = get_status($status);
            $send_data["to_date"] = $employee_data["to_date"];
            $send_data["from_date"] = $employee_data["from_date"];
            $send_data["title"] = $send_data["subject"] =
                $status == "approve"
                    ? "Leave Approval Notification"
                    : "Leave Reaject Notification";
            $send_data["templete"] = "leave_email_template.tpl";
            $send_data["email_type"] = "aprove_reject_leave";

            $return_arr["email_sender"] = $this->email_sender($send_data);
        } else {
            $message = "Error!";
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }
    // leave Allocation

    public function get_designation()
    {
      $department_id=  $this->input->post("department_id");
      $data["designation"] = $this->leave_model->get_designation($department_id);
      echo json_encode($data);
      exit();
    }
      public function leave_allocation()
      {
        $data["department"] = $this->leave_model->get_department();
        $data['designation_arr'] = [];
        if(count($data["department"]) > 0){
            $department_ids = array_column($data["department"],'department_id');
           
            $data["designation_arr"] = $this->leave_model->get_designations($department_ids);
        }
        // pr($data);
        $data["data"] = $this->leave_model->get_leave_allocation();
        foreach ($data["data"] as $key => $value) {
          $data["data"][$key]["total_leave"] = $value['sick_leave']+$value['paid_leave']+$value['casual_leave'];

          $data["data"][$key]["action"] =
          '<span  class="edit_leave_allocation me-2 text-secondary cursor" data-id=' .
          $value["id"] .
          ' title="Edit"><i class=" la-edit ti ti-edit"></i></span>
          <span class="delete_leave_allocation text-danger cursor" data-id=' .
          $value["id"] .
          ' title="Delete"><i class=" la-trash ti ti-trash"></i></span>';

        }
        $data["no_data_message"] = '<div class="p-3"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No leave allocation data found..!</div>';

        $this->smarty->view("leave_allocation.tpl", $data);
      }



      public function get_leave_allocation_details()
      {
        $data["data"] = [];
        if (isset($_POST["edit"])) {
          $id = $this->input->post("edit");
          $holiday_details = $this->leave_model->get_leave_allocation_details($id);

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
            "department_id" => $this->input->post("department_id"),
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
            "department_id" => $this->input->post("department_id"),
            "designation_id" => $this->input->post("designation_id"),
            "updated_by" => 0,
            "updated_on" => date("Y-m-d H:i:s"),
          ];
        }
        $result = $this->leave_model->leave_allocation_action($data);
        if ($result < 0) {
          $success = -1;
          $message = "Leave Already Allocated.";
        } elseif ($result == "update") {
          $success = 1;
          $message = "Leave allocation updated successfully.";
        } elseif ($result > 0) {
          $success = 1;
          $message = "Leave allocated successfully.";
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

        $result = $this->leave_model->delete_leave_allocation($id);

        if ($result) {
          $success = 1;
          $message = "Leave allocation successfully deleted.";
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

?>
