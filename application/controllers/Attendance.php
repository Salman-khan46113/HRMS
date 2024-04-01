<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Attendance extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("attendance_model");
        $base_url = $this->config->item("base_url");
        $this->smarty->assign("base_url", $base_url);
    }
    public function attendance_sheet()
    {
        $current_month = date("n");
        $current_year = date("Y");
        $attendance_sheet_details = $this->attendance_model->get_attendance_details(
            $_SESSION["employee_id"],
            $current_month,
            $current_year
        );
        $data = $this->get_attendance_sheet_data($attendance_sheet_details);
        $this->smarty->view("attendance_sheet.tpl", $data);
    }
    public function filter_sheet_data()
    {
        $employee_id = $_SESSION["employee_id"];
        $month = $this->input->post("month");
        $month_arr = $this->input->post("month_arr");
        $date = DateTime::createFromFormat("F Y", $month);
        $month_val = (int) $date->format("m");
        $year_val = (int) $date->format("Y");
        $attendance_sheet_details = $this->attendance_model->get_attendance_details(
            $employee_id,
            $month_val,
            $year_val
        );
        $data = $this->get_attendance_sheet_data($attendance_sheet_details);
        $html = $this->smarty->fetch("filter_attendance_sheet.tpl", $data);
        $return_arr["html"] = $html;
        $return_arr["total_working_hours"] = $data["total_working_hours"];
        $return_arr["message"] = "Attendance data get successfully.";
        $return_arr["success"] = 1;
        echo json_encode($return_arr);
        exit();
    }

    public function get_attendance_sheet_data($attendance_sheet_details = [])
    {
        $employee_details = $this->attendance_model->get_employee_details(
            $_SESSION["employee_id"]
        );
        $week_off =
            $employee_details[0]["employee_week_off"] != "" &&
            $employee_details[0]["employee_week_off"] != null
                ? explode(",", $employee_details[0]["employee_week_off"])
                : [];
        $total_work_hours = 0;
        $total_work_min = 0;
        if (count($attendance_sheet_details) > 0) {
            foreach ($attendance_sheet_details as $key => $value) {
                $attendance_date = new DateTime($value["attendance_date"]);
                $attendance_date = $attendance_date->format("D d");
                $attendance_sheet_details[$key][
                    "attendance_date"
                ] = $attendance_date;

                if (
                    $value["attendance_in_time"] != "" &&
                    $value["attendance_in_time"] != null &&
                    $value["attendance_in_time"] != "0000-00-00 00:00:00"
                ) {
                    $attendance_in_time = new DateTime(
                        $value["attendance_in_time"]
                    );
                    $attendance_in_time = $attendance_in_time->format("g:i A");
                    $attendance_sheet_details[$key][
                        "attendance_in_time"
                    ] = $attendance_in_time;
                    $attendance_sheet_details[$key]["attendance"] = "P";
                } else {
                    $attendance_sheet_details[$key]["attendance"] = "A";
                    $attendance_sheet_details[$key]["attendance_in_time"] =
                        "--";
                }

                if (
                    $value["attendance_out_time"] != "" &&
                    $value["attendance_out_time"] != null &&
                    $value["attendance_out_time"] != "0000-00-00 00:00:00"
                ) {
                    $attendance_out_time = new DateTime(
                        $value["attendance_out_time"]
                    );
                    $attendance_out_time = $attendance_out_time->format(
                        "g:i A"
                    );
                    $attendance_sheet_details[$key][
                        "attendance_out_time"
                    ] = $attendance_out_time;
                } else {
                    $attendance_sheet_details[$key]["attendance_out_time"] =
                        "--";
                }

                $working_hr = "00:00";
                if (
                    $value["attendance_out_time"] != "" &&
                    $value["attendance_out_time"] != "0000-00-00 00:00:00" &&
                    $value["attendance_out_time"] != null &&
                    $value["attendance_in_time"] != "" &&
                    $value["attendance_in_time"] != null
                ) {
                    $date1 = new DateTime($value["attendance_in_time"]);
                    $date2 = new DateTime($value["attendance_out_time"]);
                    $working_hr = (array) $date2->diff($date1);
                    $total_work_hours += (int) $working_hr["h"];
                    $total_work_min += (int) $working_hr["i"];
                    $working_hr =
                        str_pad($working_hr["h"], 2, "0", STR_PAD_LEFT) .
                        ":" .
                        str_pad($working_hr["i"], 2, "0", STR_PAD_LEFT);
                } elseif (
                    $value["attendance_in_time"] != "" &&
                    $value["attendance_in_time"] != null &&
                    $value["attendance_in_time"] != "0000-00-00 00:00:00"
                ) {
                    $date1 = new DateTime($value["attendance_in_time"]);
                    $date2 = new DateTime();
                    $working_hr = (array) $date2->diff($date1);
                    $total_work_hours += (int) $working_hr["h"];
                    $total_work_min += (int) $working_hr["i"];
                    $working_hr =
                        str_pad($working_hr["h"], 2, "0", STR_PAD_LEFT) .
                        ":" .
                        str_pad($working_hr["i"], 2, "0", STR_PAD_LEFT);
                } else {
                    $working_hr == "00:00";
                }

                $date = new DateTime($value["attendance_date"]);
                $dayName = $date->format("l");
                $attendance_sheet_details[$key]["week_off"] = "No";
                if (in_array($dayName, $week_off)) {
                    $attendance_sheet_details[$key]["week_off"] = "Yes";
                }
                if ($total_work_min > 60) {
                    $total_work_hours += floor($total_work_min / 60);
                    $total_work_min = $total_work_min % 60;
                }

                $attendance_sheet_details[$key]["working_hr"] = $working_hr;
            }
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
        $data = [];
        $data["months"] = $months;
        // pr($attendance_sheet_details,1);
        // exit;
        $data["total_working_hours"] =
            str_pad($total_work_hours, 2, "0", STR_PAD_LEFT) .
            ":" .
            str_pad($total_work_min, 2, "0", STR_PAD_LEFT);
        $data["attendance_sheet"] = $attendance_sheet_details;
        $data["attendance_in"] = $this->config->item("shift_in_time");
        $data["attendance_out"] = $this->config->item("shift_out_time");
        return $data;
    }
    public function get_correction_data()
    {
        $attendance_id = $this->input->post("attendance_id");
        $attendance = $this->attendance_model->get_attendance_summary(
            $attendance_id
        );
        $success = 0;
        if (count($attendance) > 0) {
            if (
                $attendance["attendance_in_time"] != "" &&
                $attendance["attendance_in_time"] != null &&
                $attendance["attendance_in_time"] != "0000-00-00 00:00:00"
            ) {
                $attendance_in_time = new DateTime(
                    $attendance["attendance_in_time"]
                );
                $attendance_in_time = $attendance_in_time->format("g:i A");
            } else {
                $attendance["attendance_in_time"] = "";
                $attendance_in_time = "";
            }

            if (
                $attendance["attendance_out_time"] != "" &&
                $attendance["attendance_out_time"] != null &&
                $attendance["attendance_out_time"] != "0000-00-00 00:00:00"
            ) {
                $attendance_out_time = new DateTime(
                    $attendance["attendance_out_time"]
                );
                $attendance_out_time = $attendance_out_time->format("g:i A");
            } else {
                $attendance["attendance_out_time"] = "";
                $attendance_out_time = "";
            }
            $success = 1;
            $attendance["in_time"] = $attendance_in_time;
            $attendance["out_time"] = $attendance_out_time;
        }

        $attendance["success"] = $success;
        echo json_encode($attendance);
        exit();
    }

    public function submit_correction_data()
    {
        $in_time = $this->input->post("attendance_in_time");
        $out_time = $this->input->post("attendance_out_time");
        $attendance_date = $this->input->post("attendance_date");
        $attendance_id = $this->input->post("attendance_id");
        $success = 0;
        $message = "";

        if ($in_time != "" && $out_time != "") {
            $time1 = new DateTime($attendance_date . $in_time);
            $time2 = new DateTime($attendance_date . $out_time);
            $difference = (array) $time1->diff($time2);

            if (
                $difference["invert"] == 0 &&
                ($difference["h"] > 0 || $difference["i"] > 0)
            ) {
                $attendance_in_time = new DateTime($attendance_date . $in_time);
                $attendance_in_time = $attendance_in_time->format(
                    "y-m-d H:i:s"
                );
                $attendance_out_time = new DateTime(
                    $attendance_date . $out_time
                );
                $attendance_out_time = $attendance_out_time->format(
                    "y-m-d H:i:s"
                );
                $update_row = $this->attendance_model->update_attendance(
                    $attendance_id,
                    $attendance_in_time,
                    $attendance_out_time
                );
                $message =
                    $update_row > 0
                        ? "Attendance Updated successfully."
                        : "Some error.";
                $success = $update_row > 0 ? 1 : 0;
            } elseif (
                $difference["h"] == 0 &&
                $difference["i"] == 0 &&
                $difference["invert"] == 0
            ) {
                $message =
                    "Attendance in time and attendance out time must be diffrent!";
            } else {
                $message =
                    "Attendance out time must be greater than attendance in time!";
            }
        } elseif ($in_time != "") {
            $attendance_in_time = new DateTime($attendance_date . $in_time);
            $attendance_in_time = $attendance_in_time->format("y-m-d H:i:s");
            $update_row = $this->attendance_model->update_attendance(
                $attendance_id,
                $attendance_in_time,
                ""
            );
            $message =
                $update_row > 0
                    ? "Attendance Updated successfully."
                    : "Some error.";
            $success = $update_row > 0 ? 1 : 0;
            // $attendance_out_time = $attendance_out_time->format('g:i A');
        }

        $retur_arr["message"] = $message;
        $retur_arr["success"] = $success;
        echo json_encode($retur_arr);
        exit();
    }
}
