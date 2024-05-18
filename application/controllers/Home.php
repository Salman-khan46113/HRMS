<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("home_model");
        // print_r("p");
        // exit();
        if (!array_key_exists("login", $_SESSION)) {
            redirect("./login.html");
        } else {
            if (!$_SESSION["login"]) {
                redirect("./login.html");
            }
        }
        $base_url = $this->config->item("base_url");
        $this->smarty->assign("base_url", $base_url);
        // $ajax_json = $this->session->userdata();
        // pr($ajax_json);
    }
    public function home()
    {
        $user = $employment_details_arr = $this->home_model->get_user_details($_SESSION["employee_id"]);
        $date1 = new DateTime();
        $date2 = new DateTime($user["employment_date"]);

        $interval["joining_date_arr"] = (array) $date1->diff($date2);

        $working_time = "00:00";
        if (
            $user["attendance_in_time"] == "0000-00-00 00:00:00" ||
            $user["attendance_in_time"] == "" ||
            $user["attendance_in_time"] == null
        ) {
            $InTime = "";
        } else {
            $dateTime = new DateTime($user["attendance_in_time"]);
            $InTime = $dateTime->format("g:i A");
            $working_hr = (array) $dateTime->diff($date1);
            $working_time =
                str_pad($working_hr["h"], 2, "0", STR_PAD_LEFT) .
                ":" .
                str_pad($working_hr["i"], 2, "0", STR_PAD_LEFT);
        }

        if (
            $user["attendance_out_time"] == "0000-00-00 00:00:00" ||
            $user["attendance_out_time"] == "" ||
            $user["attendance_out_time"] == null
        ) {
            $OutTime = "";
            $interval["joining_date_arr"] = (array) $date1->diff($date2);
        } else {
            $dateTime = new DateTime($user["attendance_in_time"]);
            $OutDateTime = new DateTime($user["attendance_out_time"]);
            $OutTime = $OutDateTime->format("g:i A");
            $working_hr = (array) $dateTime->diff($date1);
            $working_time =
                str_pad($working_hr["h"], 2, "0", STR_PAD_LEFT) .
                ":" .
                str_pad($working_hr["i"], 2, "0", STR_PAD_LEFT);
        }

        /* holiday */
        $current_year = date("Y");
        $holiday = $this->home_model->get_holiday($current_year, "dashbord");
        $interval["holiday"] = [];
        if (count($holiday) > 0) {
            $date = $holiday[0]["holiday_date"];
            $monthAbbreviation = date("M", strtotime($date));
            $year = date("Y", strtotime($date));
            $date_val = date("d", strtotime($date));
            $interval["holiday"]["date"] = $date_val;
            $interval["holiday"]["year"] = $year;
            $interval["holiday"]["month"] = $monthAbbreviation;
            $interval["holiday"]["holiday_name"] = $holiday[0]["holiday_name"];
        }

        /* next 7 day bithaday  */
        $current_date = date("Y-m-d");
        $next_date = date("Y-m-d", strtotime("+7 days"));
        $interval["bithaday"] = $this->home_model->get_employee_birthdays(
            $current_date,
            $next_date,
            $current_year
        );

        /* next 7 day work anniversary  */
        $interval["work_anniversary"] = $this->home_model->get_employee_work_aniversary(
            $current_date,
            $next_date,
            $current_year
        );

        /* get laeve count */
        $designation_id = $this->session->userdata("designation");
        $department_id = $this->session->userdata("department");
        $company_id = getCompanyId();
        $interval["pending_leave"] = 0;
        $allocated_leave = $this->home_model->get_allocated_leave($company_id,$designation_id,$department_id);
        $employee_id = $this->session->userdata("employee_id");
        if(isset($allocated_leave['total_leave'])){
            if($allocated_leave['total_leave'] > 0){
                
                $applied_leave = $this->home_model->get_applied_leave($employee_id);

                $total_applied_leave = 0;
                if(count($applied_leave) > 0){
                    foreach ($applied_leave as $key => $value) {
                        $start_date = new DateTime($value["leave_start_date"]);
                        $end_date = new DateTime($value["leave_end_date"]);
                        $interval_day = (array) $end_date->diff($start_date);
                        $total_applied_leave_val = 0 ? 1 : (int) $interval_day["days"] + 1;
                        if($value['leave_type'] == "half_day"){
                            $total_applied_leave_val = $total_applied_leave_val/2;
                        }
                        $total_applied_leave += $total_applied_leave_val;

                    }
                }
                
                $allocated_leave = $allocated_leave['total_leave'] - $total_applied_leave;
                $interval["pending_leave"] = $allocated_leave < 0 ? 0 : $allocated_leave;
            }
        }

        $interval["apply_leave_url"] = get_entiry_url("employee_leave","List",'');
        
        /* attendance summary */
        $interval["attendance_summary"] = ["current_month_leave" => 0,"total_present_date" => 0,"total_absent_date" => 0];
        $current_month = date("m");
        $current_month_leave = $this->home_model->get_current_month_leave($employee_id,$current_month);
        $current_month_last_day = date("Y-m-t");
        $total_applied_leave = 0;
               foreach ($current_month_leave as $key => $value) {
            $date1 = strtotime($current_month_last_day);
            $date2 = strtotime($value['leave_end_date']);
            if ($date1 < $date2) {
                $start_date = new DateTime($value["leave_end_date"]);
                $end_date = new DateTime($current_month_last_day);
                $interval_day = (array) $end_date->diff($start_date);
                $total_leave_val = 0 ? 1 : (int) $interval_day["days"] + 1;
            } else{
                $start_date = new DateTime($value["leave_start_date"]);
                $end_date = new DateTime($value["leave_end_date"]);
                $interval_day = (array) $end_date->diff($start_date);
                $total_leave_val = 0 ? 1 : (int) $interval_day["days"] + 1;
            }
            if($value['leave_type'] == "half_day"){
                    $total_leave_val = $total_leave_val/2;
            }
            $total_applied_leave += $total_leave_val;
            if($total_applied_leave > 0){
                $interval["attendance_summary"]['current_month_leave'] =  $total_applied_leave;
            }
            
            // echo $total_applied_leave;
            // pr($value);
        }
        
        
        $week_off = $employment_details_arr["employee_week_off"] != "" && $employment_details_arr["employee_week_off"] != null ? explode(",", $employment_details_arr["employee_week_off"]) : [];
        $current_date = date("Y-m-d");
        $employee_id = $this->session->userdata("employee_id");
        $current_month = date("m");
        $attendance_summary = $this->home_model->get_attendance_summary($employee_id,$current_date,$current_month);
        $attendance_presnt_count = 0;
        $attendance_absent_count = 0;
        $total_week_off_date = 0;
        $total_hours = 0;
        $total_min = 0;
        foreach ($attendance_summary as $key => $value) {
            $date = new DateTime($value["attendance_date"]);
            $dayName = $date->format("l");
            if (!in_array($dayName, $week_off)) {
                $flag = 0;
                $type = '';
                foreach ($current_month_leave as $key_val => $val) {
                        $leave_start = strtotime($val['leave_start_date']);
                        $leave_end = strtotime($val['leave_end_date']);
                        $attendance_date_value = strtotime($value['attendance_date']);
                        if ($leave_start <= $attendance_date_value && $leave_end >= $attendance_date_value) {
                            if($val['leave_type'] == 'full_day'){
                                $flag = 1;
                            }else{
                                $type = 'half_day';
                            }
                            
                        }
                }
                if($flag == 0){
                    if($value['attendance_in_time'] != null && $value['attendance_in_time'] != '0000-00-00 00:00:00' && $value['attendance_out_time'] != null && $value['attendance_out_time'] != '0000-00-00 00:00:00' ){
                            $start_attendance_time = new DateTime($value['attendance_in_time']);
                            $end_attendance_time = new DateTime($value['attendance_out_time']);
                            $diffrence_interval = $start_attendance_time->diff($end_attendance_time);
                            $total_hours += $diffrence_interval->format('%h');
                            $total_min += $diffrence_interval->format('%i');
                            if($total_min >= 60){
                                $total_min++;
                                $total_actual_min = $total_min;
                                $total_min = $total_min%60;
                                $total_hours += ($total_actual_min - $total_min)/60;
                            }
                        if($type == 'half_day'){
                            $attendance_presnt_count += 0.5;
                        }else{
                            $attendance_presnt_count += 1;
                        }
                    }else{

                        if($type == ''){
                            $attendance_absent_count++;
                        }
                        
                    }
                }
            }else{
                $total_week_off_date++;
            }
            
        }
        $interval["attendance_summary"][''] = $total_week_off_date;
        $total_working_hours = "00:00";
        if($total_hours > 0 || $total_min > 0){
            $total_working_hours = $total_hours.":".$total_min;
        }
        $interval["attendance_summary"]['total_working_hours'] = $total_working_hours;
        // pr($interval,1);
        $actual_total_present_date = $attendance_presnt_count+$attendance_absent_count;
        $total_present_date =  $attendance_presnt_count - $total_applied_leave;
        $interval["attendance_summary"]['total_present_date'] = $attendance_presnt_count;
        $interval["attendance_summary"]['total_absent_date'] = $attendance_absent_count;
        $attendance_percentage = 0;
        if($actual_total_present_date > 0 && $total_present_date > 0){
            $attendance_percentage = ($attendance_presnt_count/$actual_total_present_date)*100;
        }
        $interval["attendance_summary"]['attendance_percentage'] = getNumberFormate($attendance_percentage)."%";
        $interval["attendance_summary"]['attendance_month'] =date("F Y");

        /* get current year notificaction */
        $current_year = date("Y");
        $company_id = getCompanyId();
        $notification_data = $this->home_model->get_notification_data($current_year,$company_id);
        $notification_details_arr = [];
        foreach ($notification_data as $key => $value) {
            $notification_details_arr[$key]['redirect_url'] = get_entiry_url("announcement","View",$value['id']);
            $notification_details_arr[$key]['title'] = $value['title'];
        }
        $interval['notification_details'] = $notification_details_arr;
        // pr($interval,1);
        /* get my department department data */
        $company_id = getCompanyId();
        $department_id = $this->session->userdata("department");
        $employee_id = $this->session->userdata("employee_id");
        $reporting_manager = $this->session->userdata("reporting_manager");
        // $current_date = "2024-04-23";
        $department_member = $this->home_model->get_department_member($company_id,$department_id,$employee_id,$current_date);
        
        foreach ($department_member as $key => $value) {
            $department_member[$key]['team_meber_title'] = "Team Member";
            $department_member[$key]['team_meber_class'] = "apl-badge-teammate";


            if($value['employee_id'] == $reporting_manager){
                $department_member[$key]['team_meber_title'] = "Manager";
                $department_member[$key]['team_meber_class'] = "apl-badge-manager";
            }

            if($value['attendance_in_time'] != "" && $value['attendance_in_time'] != "0000-00-00 00:00:00" && $value['attendance_in_time'] != null){
                $dateTimeIn = new DateTime($value["attendance_in_time"]);
                $dateTimeIn = $dateTimeIn->format("g:i A");
                $department_member[$key]['attendance_in_time'] = $dateTimeIn;
                if($value['attendance_out_time'] != "" && $value['attendance_out_time'] != "0000-00-00 00:00:00" && $value['attendance_out_time'] != null){
                    $dateTimeIn = new DateTime($value["attendance_out_time"]);
                    $dateTimeIn = $dateTimeIn->format("g:i A");
                    $department_member[$key]['attendance_out_time'] = $dateTimeIn;
                    $department_member[$key]['attendance_status'] = "Away";
                    $department_member[$key]['attendance_status_class'] = "away";
                }else{
                    $department_member[$key]['attendance_status'] = "Present";
                    $department_member[$key]['attendance_status_class'] = "present";
                }
            }else{
                if($value['leave_id'] > 0){
                    $department_member[$key]['attendance_status'] = "On Leave";
                    $department_member[$key]['attendance_status_class'] = "onleave";
                }else{
                    $department_member[$key]['attendance_status'] = "Absent";
                    $department_member[$key]['attendance_status_class'] = "absent";
                }
            }
            $department_member[$key]['profile_image'] = get_entiry_url("employee_profile",'',$value['profile_image']);
            
        }
        
        // Extract the 'age' column to sort by
        $manager = array_column($department_member, 'team_meber_title');
        // Sort $people based on 'age'
        array_multisort($manager, SORT_ASC, $department_member);
        $interval["department_member"] = $department_member;

        // pr($interval,1);
        // $interval['holiday'] = [];
        $interval["attendance_in_time"] = $InTime;
        $interval["attendance_out_time"] = $OutTime;
        $interval["working_time"] = $working_time;
        $interval["current_year"] = date('Y');
        $this->smarty->view("home.tpl", $interval);
    }

    public function employee_profile()
    {
        $id = $_SESSION["employee_id"];
        $image = $this->session->userdata("profile_image");
        if (array_key_exists("id", $this->input->get())) {
            if ($this->input->get("id") > 0) {
                $id = $this->input->get("id");
                $image = "";
            }
        }
        $data["data"] = $this->home_model->get_employee_details($id);
        // pr($data,1);
        if(count($data["data"]) > 0 && $image != ''){
            $data["data"][0]['profile_image'] = $image;
        }
        $current_date = date("Y-m-d");
        $data['shift_details'] = $this->home_model->get_employee_shift_details($id,$current_date);
        $data["bank_data"] = $this->home_model->get_bank_details($id);
        $data["employee_id"] = $id;
        $this->smarty->view("employee_details.tpl", $data);
    }

    public function employee_listing()
    {
        $column[] = [
            "data" => "image",
            "title" => "Image",
            "width" => "8%",
            "className" => "dt-center img-box",
        ];
        $column[] = [
            "data" => "name",
            "title" => "Name",
            "width" => "12%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "employee_code",
            "title" => "Employee Code",
            "width" => "9%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "joining_date",
            "title" => "Joining Date",
            "width" => "10%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "email",
            "title" => "Email",
            "width" => "15%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "department",
            "title" => "Departmet",
            "width" => "10%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "designation",
            "title" => "Designation",
            "width" => "10%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "week_offs",
            "title" => "Week Off",
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
            "width" => "15%",
            "className" => "dt-center",
        ];
        $company_id = getCompanyId();
        $ajax_json['department'] = $this->home_model->get_filter_department($company_id);
        $ajax_json['designation'] = $this->home_model->get_filter_designation($company_id);
        $ajax_json["data"] = $column;
        $ajax_json["is_searching_enable"] = false;
        $ajax_json["is_paging_enable"] = true;
        $ajax_json["is_serverSide"] = true;
        $ajax_json["is_ordering"] = true;
        $ajax_json["is_heading_color"] = "#a18f72";
        $ajax_json["no_data_message"] =
            '<div class="p-3 no-data-found-block"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No Employee data found..!</div>';
        $ajax_json["is_top_searching_enable"] = true;
        $ajax_json["sorting_column"] = json_encode([]);
        $ajax_json["page_length_arr"] = $this->config->item("page_length");
        $ajax_json["admin_url"] = base_url();
        $ajax_json["base_url"] = base_url();
        // $ajax_json['teacher_data'] = $this->session->userdata();
        // pr($ajax_json['designation'],1);
        $this->smarty->view("employee_listing.tpl", $ajax_json);
    }
    public function get_employee_listing_data()
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

        if($post_data["search"]['join_date'] != ""){
            $joining_date_values = explode("-", $post_data["search"]['join_date']);
            $post_data["search"]['join_date_from'] = date("Y-m-d", strtotime($joining_date_values[0]));
            $post_data["search"]['join_date_to'] = date("Y-m-d", strtotime($joining_date_values[1]));
            
        }
        
        $list_data = $this->home_model->get_employee_listing_data(
            $condition_arr,
            $post_data["search"]
        );
        $current_month = date("F");

        if (count($list_data) > 0) {
            $employee_ids = array_column($list_data, "employee_id");
            $week_off_data = $this->home_model->get_employee_week_off(
                $employee_ids,
                $current_month
            );
            // pr($week_off_data,1);
            $employee_week_off_data = [];
            foreach ($week_off_data as $key => $value) {
                $employee_week_off_data[$value["employee_id"]]["week_off_id"] =
                    $value["week_off_id"];
                $employee_week_off_data[$value["employee_id"]]["week_offs"] =
                    $value["employee_week_off"];
            }
        }

        foreach ($list_data as $key => $value) {
            $action_btn_arr = [];
            $list_data[$key]["employee_url"] =
                $base_url . "employee-details.html?id=" . $value["employee_id"];
            $list_data[$key]["name"] =
                "<a title='" .
                $value["name"] .
                "'' href='" .
                $base_url .
                "employee-details.html?id=" .
                $value["employee_id"] .
                "'>" .
                $value["name"] .
                "</a>";
            $list_data[$key]["image_url"] =
                $base_url .
                "public/img/uploads/employee_profile/" .
                $value["image"];
            $list_data[$key]["image"] =
                "<img src=" .
                $base_url .
                "public/img/uploads/employee_profile/" .
                $value["image"] .
                " alt='' width='70' height='70' class='rounded-circle'>";
            $list_data[$key]["week_offs"] = "--";
            if ($value["status"] == "Active") {
                if (
                    array_key_exists(
                        $value["employee_id"],
                        $employee_week_off_data
                    )
                ) {
                    $action_btn_arr[] = ["class"=>"la-times-circle","title"=>"Deactivate","extra_par"=>'data-id="' .
                        $value["employee_id"].'"',"href"=>"javascript:void(0)"];

                    $list_data[$key]["action"] =
                        '<i class=" la-times-circle ti ti-circle-x" title="Deactivate" data-id="' .
                        $value["employee_id"] .
                        '"></i>';
                    // $list_data[$key]["other_Action"] =
                    //     '<a hijacked="yes" href="javascript:void(0)" data-id="' .
                    //     $value["employee_id"] .
                    //     '" context="" title="Deactivate" class="btn view-btn  btn  la-times-circle ">Deactivate</a>';
                    $list_data[$key]["week_offs"] =
                        $employee_week_off_data[$value["employee_id"]][
                            "week_offs"
                        ];
                } else {
                    $action_btn_arr[] = ["class"=>"la-calendar ","title"=>"Week Off","extra_par"=>'data-id="' .
                        $value["employee_id"].'"',"href"=>"javascript:void(0)"];
                    $action_btn_arr[] = ["class"=>"la-times-circle ","title"=>"Deactivate","extra_par"=>'data-id="' .
                        $value["employee_id"].'"',"href"=>"javascript:void(0)"];

                    $list_data[$key]["action"] =
                        '<i class=" la-calendar ti ti-calendar-month" title="Week Off" data-id="' .
                        $value["employee_id"] .
                        '"></i><i class="la-times-circle ms-1 ti ti-circle-x" title="Deactivate" data-id="' .
                        $value["employee_id"] .
                        '"></i>';
                    // $list_data[$key]["other_Action"] =
                    //     '<a hijacked="yes" href="javascript:void(0)" data-id="' .
                    //     $value["employee_id"] .
                    //     '"  title="Week Off" class="btn view-btn  btn  la-calendar">Week Off</a><a hijacked="yes" href="javascript:void(0)" data-id="' .
                    //     $value["employee_id"] .
                    //     '"  title="Deactivate" class="btn view-btn  btn la-times-circle">Deactivate</a>';
                    $list_data[$key]["week_offs"] = "--";
                }
            } else {
                if (
                    array_key_exists(
                        $value["employee_id"],
                        $employee_week_off_data
                    )
                ) {
                    $list_data[$key]["week_offs"] =
                        $employee_week_off_data[$value["employee_id"]][
                            "week_offs"
                        ];
                } else {
                    $list_data[$key]["week_offs"] = "--";
                }

                $action_btn_arr[] = ["class"=>"la-check-circle ","title"=>"Activate","extra_par"=>'data-id="' .
                        $value["employee_id"].'"',"href"=>"javascript:void(0)"];

                $list_data[$key]["action"] =
                    '<i class="la-check-circle ti ti-circle-check" title="Activate" data-id="' .
                    $value["employee_id"] .
                    '"></i>';
                // $list_data[$key]["other_Action"] =
                //     '<a hijacked="yes" href="javascript:void(0)" data-id="' .
                //     $value["employee_id"] .
                //     '" context="" title="Activate" class="btn view-btn  btn  la-check-circle">Activate</a>';
                
            }

            
            if( $list_data[$key]['is_edit'] == "Yes"){
                $action_btn_arr[] = ["class"=>"edit-approve","title"=>"Approve Edit","extra_par"=>'data-id="' .
                        $value["employee_id"].'"',"href"=>"javascript:void(0)"];
                     $list_data[$key]["action"] .= '<i class="ti ti-user-edit edit-approve" title="Approve Edit" data-id="' .
                        $value["employee_id"] .
                        '"></i>';
                        
            }   

            $action_btn_arr[] = ["class"=>" delet-employee","title"=>"Delete","extra_par"=>'data-id="' .
                        $value["employee_id"].'"',"href"=>"javascript:void(0)"];
            $list_data[$key]["action"] .=
                '<i class="ti ti-trash delet-employee" title="Delete" data-id="' .
                $value["employee_id"] .
                '"></i>';

                $action_btn_arr[] = ["class"=>"extend","title"=>"Salary Structure","extra_par"=>'',"href"=>get_entiry_url("employee_salary_component","List",$value["employee_id"])];
                $list_data[$key]["action"] .=
                '<i class="ti ti-download pdf-download" title="download salary pdf" data-id="' .
                $value["employee_id"] .
                '"></i>';
            $list_data[$key]["action"] .='<a href="'.get_entiry_url("employee_salary_component","List",$value["employee_id"]).'"><i class="ti ti-license" title="Salary Structure" ></i></a>';
            

            $btn_html = getGridButton($action_btn_arr);
            $list_data[$key]["other_Action"] = $btn_html;
            $list_data[$key]["status_val"] = $value["status"];
            $list_data[$key]["status"] =
                '<span class="' .
                strtolower($value["status"]) .
                '">' .
                $value["status"] .
                "</span>";
        }

        $data["data"] = $list_data;
        $total_record = $this->home_model->get_employee_listing_data([], $post_data["search"]);
        $data["recordsTotal"] = count($total_record);
        $data["recordsFiltered"] = count($total_record);
        echo json_encode($data);
        exit();
    }
    public function edit_employee_date()
    {
        $employee_id = $this->input->post("employee_id");
        $data = $this->home_model->get_edit_json($employee_id);
        $employee_data['data'] = json_decode($data['edit_json'],TRUE);
        $employee_data['data']['new_employe_data']['department'] = $this->home_model->get_department($employee_data['data']['new_employe_data']['department']);
        $employee_data['data']['new_employe_data']['designation'] = $this->home_model->get_designation($employee_data['data']['new_employe_data']['designation']);
        $employee_data['data']['new_employe_data']['country'] = $this->home_model->get_country($employee_data['data']['new_employe_data']['country']);
        $employee_data['data']['new_employe_data']['state'] = $this->home_model->get_state_name($employee_data['data']['new_employe_data']['state']);
        $employee_data['data']['new_employe_data']['manager'] = $this->home_model->get_reporting_senior($employee_data['data']['new_employe_data']['manager']);
        $employee_data['data']['new_employe_data']['dob'] = date_formate($employee_data['data']['new_employe_data']['dob']);
        $employee_data['data']['new_employe_data']['employement_date'] = date_formate($employee_data['data']['new_employe_data']['employement_date']);
        $employee_data['updated_by'] = $data['updated_by'];
        // pr($employee_data,1);           
        $html = $this->smarty->fetch("edit_aprover_template.tpl",$employee_data);
        // pr($html);
        $return_arr["html"] = $html;
        echo json_encode($return_arr);
        exit();
    }
    public function edit_employee_details()
    {
        
        // pr("ok",1);
        $employee_id = $this->input->post("employee_id");
        $approval_type = $this->input->post("approval_type");
        $success = 0;
        $message = "Something went wrong!";
        if($approval_type == "Approve"){
            $data = $this->home_model->get_edit_json($employee_id);
            $employee_data = json_decode($data['edit_json'],TRUE);
            $post_data   = $employee_data['new_employe_data'];
            $employee_updated_arr = [
                    "first_name" => $post_data["first_name"],
                    "middle_name" => $post_data["middle_name"],
                    "last_name" => $post_data["last_name"],
                    "role" => $post_data["employement_type"],
                    "email" => $post_data["email"],
                    "phone_code" => $post_data["phone_code"],
                    "mobile_number" => $post_data["mobile_number"],
                    "secondary_mobile_code" => $post_data["secondary_number"] != "" ? $post_data["secondary_number_code"] : '',
                    "secondary_mobile_number" => $post_data["secondary_number"],
                    "dob" => date_format(
                        date_create($post_data["dob"]),
                        "Y-m-d"
                    ),
                    "gender" => $post_data["gender"],
                    "marital_status" => $post_data["marital_status"],
                    "country" => $post_data["country"],
                    "state" => $post_data["state"],
                    "city" => $post_data["city"],
                    "address" => $post_data["address"],
                    "zipcode" => $post_data["zipcode"],
                    "department" => $post_data["department"],
                    "designation" => $post_data["designation"],
                    "employment_date" => date_format(
                        date_create($post_data["employement_date"]),
                        "Y-m-d"
                    ),
                    "profile_image" => $post_data["profile_image_name"],
                    "reporting_manager" => $post_data["manager"],
                    "employee_week_off" => $post_data["week_off"],
                    "work_mobile_code" => $post_data["work_mobile_number_code"],
                    "work_mobile_number" => $post_data["work_mobile_number"],
                    "work_email" => $post_data["work_email"],
                    "over_time_allow" => $post_data["overtime_allow"],
                    "overtime_rate_per_hour" => removeNumberFormate($post_data["overtime_rate_per_hour"]),
                    "education_degree" => $post_data["degree_name"],
                    "education_feild" => $post_data["education_field"],
                    "education_college" => $post_data["college_name"],
                    "education_pass_out_year" => $post_data["pass_out_year"],
                    "aadhar_number" => $post_data["aadhar_number"],
                    "pan_card_number" => $post_data["pan_card_number"],
                    "pf_number" => $post_data["pf_number"],
                    "uan_number" => $post_data["uan_number"],
                    "is_edit" => "No",
                    "edit_json" => '',
                    "updated_by" => $_SESSION['employee_id'],
                    "updated_on" => date("Y-m-d H:i:s"),
                ];
            // pr($employee_updated_arr,1);
            if(count($post_data['deleted_bank'])){
                $delted_bank_ids = implode(",", $post_data['deleted_bank']);
                $this->home_model->delete_banks($delted_bank_ids);
            }
            

            $result = $this->home_model->update_employe_approve_date($employee_updated_arr,$employee_id);
            if($result > 0){
                $bank_insert_arr = [];
                $bank_update_arr = [];
                foreach ($post_data['bank_data'] as $key => $value) {
                    $bank_data_arr = ["bank_name"=>$value['bank_name'],"branch_address" =>$value['branch_address'] ,"ifsc_code" =>$value['ifsc_code'] ,"account_type" => $value['account_type'],"account_no" => $value['account_number'],"account_holder_name" => $value['account_holder_name'],"default_bank" =>$value['default_bank']];

                    if($value['bank_id'] == ""){
                        $bank_data_arr['entity_type'] = "Employee";
                        $bank_data_arr['entity_id'] = $employee_id;
                        $bank_data_arr['added_by'] = $data['updated_by_id'];
                        $bank_data_arr['added_on'] = date("Y-m-d H:i:s");

                        array_push($bank_insert_arr, $bank_data_arr);
                    }else{
                        $bank_data_arr['id'] = $value['bank_id'];
                        $bank_data_arr['updated_by'] = $data['updated_by_id'];
                        $bank_data_arr['updated_on'] = $employee_id;
                        array_push($bank_update_arr, $bank_data_arr);
                    }
                }
                if(count($bank_insert_arr) > 0){
                    $this->home_model->insert_banks($bank_insert_arr);
                }

                if(count($bank_update_arr) > 0){
                    $this->home_model->update_banks($bank_update_arr);
                }

                $week_off = $this->home_model->get_employee_week_off($employee_id,date("F"));
                // pr($week_off,1);
                if(count($week_off) > 0){
                    $week_off_arr = [
                        "week_off" => $post_data["week_off"],
                        "week_off_id" => $week_off[0]['week_off_id'],
                    ];
                    $this->home_model->update_employee_week_off_data($week_off_arr);
                }else{
                    $week_off_arr = [
                        "employee_id" => $employee_id,
                        "employee_week_off" => $post_data["week_off"],
                        "month" => date("F"),
                        "added_date" => date("Y-m-d H:i:s"),
                    ];
                    $this->home_model->insert_employee_week_off($week_off_arr);
                }
               
                
                
                $success = 1;
                $message = "Employee updated successfully!";
            }

        }else if($approval_type == "Reject"){
            $employee_updated_arr = [
                    "is_edit" => "No",
                    "edit_json" => '',
                    "updated_by" => $_SESSION['employee_id'],
                    "updated_on" => date("Y-m-d H:i:s")
                ];
            $result = $this->home_model->update_employe_approve_date($employee_updated_arr,$employee_id);
            if($result > 0){
                $success = 1;
                $message = "Rejected successfully!";
            }
        }
        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }
    public function delete_employee()
    {
        $id = $this->input->post("id");

        $result = $this->home_model->delete_employee($id);

        if ($result) {
            $success = 1;
            $message = "Employee Delete successfully!";
        } else {
            $success = 0;
            $message = "An error occurred. Please try again.!";
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }
    public function activate_employee()
    {
        // pr($this->input->post(),1);
        $employee_id = $this->input->post("employee_id");
        $mode = $this->input->post("mode");
        $employee_data = $this->home_model->get_employee_details($employee_id);
        $status = "";
        $message = "Error!.";
        $success = 0;
        if ($mode == "activation") {
            $status = "Active";
            $message_val = "Employee activated successfully.";
        } else {
            $status = "Inactive";
            $message_val = "Employee deactivated successfully.";
        }
        $affected_row = $this->home_model->update_employee_status(
            $employee_id,
            $status
        );
        if ($affected_row > 0) {
            $success = 1;
            $message = $message_val;
            if ($mode == "activation") {
                $data["subject"] = $data["title"] =
                    "Account Activation successful";
                $data["type"] = "activate_account";
            } else {
                $data["subject"] = $data["title"] =
                    "Account Activation Unsuccessful";
                $data["type"] = "deactivate_account";
            }
            $data["name"] =
                $employee_data[0]["first_name"] .
                " " .
                $employee_data[0]["last_name"];
            $data["email"] = $employee_data[0]["email"];
            $data["employee_code"] = $employee_data[0]["employee_code"];
            $data["user_name"] = $employee_data[0]["email"];
            $data["templete"] = "email_template.tpl";
            $return_arr["send_email_message"] = $this->email_sender($data);
        }
        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }
    // submit_employee_week_off
    public function submit_employee_week_off()
    {
        $current_month = date("F");
        $employee_id = $this->input->post("employee_id");
        $week_off = implode(",", $this->input->post("week_off"));
        $message = "Erroe!";
        $success = 0;
        if ($employee_id > 0) {
            $week_off_arr = [
                "employee_id" => $employee_id,
                "employee_week_off" => $week_off,
                "month" => $current_month,
                "added_date" => date("Y-m-d H:i:s"),
            ];
            $inser_id = $this->home_model->insert_employee_week_off(
                $week_off_arr
            );
            $update_arr = [
                "week_off" => $week_off,
                "employee_id" => $employee_id,
            ];
            $this->home_model->update_employee_week_off($update_arr);
            if ($inser_id > 0) {
                $success = 1;
                $message = "Week off added successfully.";
            } else {
                $message = "Week off not added.";
            }
        }
        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }

    
}
