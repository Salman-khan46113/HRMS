<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Salary extends MY_controller
{
    public $holiday_arr = [];
    public $working_day_arr = [];
    public function __construct()
    {
        parent::__construct();
        include "application/libraries/phpqrcode/qrlib.php";
        include "application/libraries/fpdf/fpdf.php";
        require_once APPPATH . 'libraries/tcpdf/tcpdf.php';
        $this->load->model("salary_model");
    }
    public function index()
    {
        $current_year = date("Y");
        $start_year = 2020;
        $year_arr = [];
        for ($i = $start_year; $i <= $current_year; $i++) {
            array_push($year_arr, $i);
        }
        $data["year_arr"] = $year_arr;
        $salary_component = $this->salary_model->get_salary_component();
        foreach ($salary_component as $key => $value) {
            $salary_component[$key]['action'] = '<span class="edit_salary_componet me-2 text-secondary cursor" data-id="' . $value['salary_component_id'] . '" title="Edit"><i class=" la-edit ti ti-edit"></i></span>';
        }
        $data["salary_components"] = $salary_component;
        $data["no_data_message"] = '<div class="p-3"><img class="p-2" src="' .
        base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No salary component data found..!</div>';
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["value_type_arr"] = [["id" => "Percentage", "val" => "Percentage"], ["id" => "Decimal", "val" => "Decimal"]];
        $data["component_type_arr"] = [["id" => "Income", "val" => "Income"], ["id" => "Deduction", "val" => "Deduction"], ["id" => "Taxes", "val" => "Taxes"]];
        // pr($data,1);
        $this->smarty->view("salary_component.tpl", $data);
    }
    public function add_action()
    {
        $current_year = date("Y");
        $start_year = 2020;
        $year_arr = [];
        for ($i = $start_year; $i <= $current_year; $i++) {
            array_push($year_arr, $i);
        }
        $data["year_arr"] = $year_arr;
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["value_type_arr"] = [["id" => "Percentage", "val" => "Percentage"], ["id" => "Decimal", "val" => "Decimal"]];
        $data["component_type_arr"] = [["id" => "Income", "val" => "Income"], ["id" => "Deduction", "val" => "Deduction"], ["id" => "Taxes", "val" => "Taxes"]];
        $data["index"] = 0;
        $this->smarty->view("salary_component_add.tpl", $data);
    }
    public function salary_component_row()
    {
        $post_data = $this->input->post();
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["value_type_arr"] = [["id" => "Percentage", "val" => "Percentage"], ["id" => "Decimal", "val" => "Decimal"]];
        $data["component_type_arr"] = [["id" => "Income", "val" => "Income"], ["id" => "Deduction", "val" => "Deduction"], ["id" => "Taxes", "val" => "Taxes"]];
        $data["index"] = $post_data['index'];
        $return_arr['html'] = $this->smarty->fetch("salary_component_row.tpl", $data);
        echo json_encode($return_arr);
        exit();
    }

    public function salary_component_action()
    {
        $post = $this->input->post();
        // pr($post,1);
        $user_id = $this->session->userdata("employee_id");
        $current_date = date("Y-m-d H:i:s");
        $message = "Some thing went wrong!";
        $success = 0;
        if ($post['mode'] == 'Add') {
            $insert_arr = [];
            foreach ($post['component_name'] as $key => $value) {
                $component_name = $post['component_name'][$key];
                $component_type = $post['component_type'][$key];
                $value_type = $post['value_type'][$key];
                $component_value = removeNumberFormate($post['component_value'][$key]);
                $description = $post['description'][$key];
                if (isset($post['is_compulsory'])) {
                    $is_compulsory = isset($post['is_compulsory'][$key]) ? "Yes" : "No";
                } else {
                    $is_compulsory = "No";
                }

                $row_arr = ["component_name" => $component_name, "component_value" => $component_value, "value_type" => $value_type, "component_type" => $component_type, "year" => $post['year_drop_down'], "is_compulsory" => $is_compulsory, "description" => $description, "company_id" => $post['company_id'], "added_by" => $user_id, "added_date" => $current_date];
                array_push($insert_arr, $row_arr);
            }
            // pr($insert_arr,1);
            // $insert_arr = ["component_name"=>$post['component_name'],"component_value"=>$post['component_value'],"value_type"=>$post['value_type'],"component_type"=>$post['component_type'],"year"=>$post['year'],"is_compulsory"=>$post['is_compulsory'],"description"=>$post['description'],"company_id"=>$post['company_id'],"added_by"=>$user_id,"added_date"=>$current_date];
            $insert_id = $this->salary_model->insert_salary_component($insert_arr, $post['company_id'], $post['year_drop_down']);
            if ($insert_id > 0) {
                $message = "Salary component added successfully.";
                $success = 1;
            } else if ($insert_id == -1) {
                $message = "Salary component name aleady exit..!";
                $success = 0;
            }
        } else if ($post['mode'] == 'Update') {
            $update_arr = ["component_name" => $post['component_name'], "component_value" => removeNumberFormate($post['component_value']), "value_type" => $post['value_type'], "component_type" => $post['component_type'], "year" => $post['year'], "is_compulsory" => $post['is_compulsory'], "description" => $post['description'], "updated_by" => $user_id, "updated_date" => $current_date];

            $affected_row = $this->salary_model->update_salary_component($update_arr, $post['company_id'], $post['salary_component_id']);
            if ($affected_row > 0) {
                $message = "Salary component updated successfully.";
                $success = 1;
            } else if ($affected_row == -1) {
                $message = "Salary component name aleady exit..!";
                $success = 0;
            }
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }
    public function get_salary_details()
    {
        $post = $this->input->post();
        $success = 0;
        $salary_component = $this->salary_model->get_salary_component($post['id']);
        $salary_component_arr = [];
        if (count($salary_component) > 0) {
            $success = 1;
            $salary_component_arr = $salary_component[0];
        }
        $return_arr["success"] = $success;
        $return_arr["salary_component"] = $salary_component_arr;
        echo json_encode($return_arr);
        exit();
    }
    public function salary_strucuture()
    {
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["departments"] = [];
        if ($data["selected_company"] > 0) {
            $data["departments"] = $this->salary_model->get_department($data["selected_company"]);
        }
        $designation = [];
        if (count($data["departments"]) > 0) {
            $department_ids = array_column($data["departments"], "department_id");
            $designation = $this->salary_model->get_designation($department_ids);
        }
        $data["designation"] = $designation;
        $data["no_data_message"] = '<div class="p-3"><img class="p-2" src="' .
        base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No salary structure data found..!</div>';

        $data["salary_strucuture"] = $this->salary_model->get_designation_salary_structure_list($data["selected_company"]);
        foreach ($data["salary_strucuture"] as $key => $value) {
            $added_by = $data["salary_strucuture"][$key]['added_by'];
            $data["salary_strucuture"][$key]['added_by_name'] = $added_by > 0 ? "<a href=
            '" . get_entiry_url("employee", "View", $added_by) . "'>" . $data['salary_strucuture'][$key]['added_by_name'] . "</a>" : display_no_character('');
            $updated_by = $data["salary_strucuture"][$key]['updated_by'];
            $data["salary_strucuture"][$key]['updated_by_name'] = $updated_by > 0 ? "<a href=
            '" . get_entiry_url("employee", "View", $updated_by) . "'>" . $data['salary_strucuture'][$key]['added_by_name'] . "</a>" : display_no_character('');
            $data["salary_strucuture"][$key]['action'] = '<a href="' . get_entiry_url("salary_structure", "Update", $value['designation_salary_structure_id']) . '" class="edit_salary_structure me-2 text-secondary cursor" title="Edit"><i class=" la-edit ti ti-edit"></i></a>';
        }
        $this->smarty->view("salary_strucuture_list.tpl", $data);
    }
    public function salary_strucuture_action()
    {
        $get_data = $this->input->get();
        $data = [];
        $data['mode'] = "Add";
        $data['id'] = '';
        if (isset($get_data['id'])) {
            if ($get_data['id'] > 0) {
                $data['mode'] = "Update";
                $data['id'] = $get_data['id'];
            }
        }
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["ctc_value"] = '';
        $data["designation_id"] = '';
        $data["department_id"] = '';
        if ($data['mode'] == "Update") {
            $salary_strucuture_details = $this->salary_model->get_salary_structure_details($data['id']);
            $salary_strucuture_component_details = $this->salary_model->get_salary_structure_component_details($data['id']);
            // pr($salary_strucuture_component_details,1);
            $component_detail = $salary_strucuture_component_details;
            $use_components = array_column($component_detail, "salary_component_id");
            $use_id_components = [];
            foreach ($component_detail as $key => $value) {
                $use_id_components[$value['salary_component_id']] = $value;
            }
            // get all component //
            $current_year = date("Y");
            $all_component_details = $this->salary_model->get_component($data["selected_company"], $current_year);
            $component_detail_arr = [];
            foreach ($all_component_details as $key => $value) {
                // pr($value);
                if (in_array($value['salary_component_id'], $use_components)) {
                    $value = $use_id_components[$value['salary_component_id']];
                    $value['used'] = "Yes";
                    array_push($component_detail_arr, $value);
                } else {
                    $value['used'] = "No";
                    array_push($component_detail_arr, $value);
                }

            }
            array_multisort(array_column($component_detail_arr, 'used'), SORT_DESC, SORT_NATURAL | SORT_FLAG_CASE, $component_detail_arr);
            $data["component_details"] = $component_detail_arr;
            // pr($component_detail_arr,1);
            $data["selected_company"] = $salary_strucuture_details['company_id'];
            $data["ctc_value"] = $salary_strucuture_details['ctc_value'];
            $data["designation_id"] = $salary_strucuture_details['designation_id'];
            $data["department_id"] = $salary_strucuture_details['department_id'];
        } else {
            $data["component_details"] = [];
            if ($data["selected_company"] > 0) {
                $current_year = date("Y");
                $data["component_details"] = $this->salary_model->get_component($data["selected_company"], $current_year);
                foreach ($data["component_details"] as $key => $value) {
                    $data["component_details"][$key]['used'] = "No";
                }

            }
        }

        $data["departments"] = [];
        if ($data["selected_company"] > 0) {
            $data["departments"] = $this->salary_model->get_department($data["selected_company"]);
        }
        $designation = [];
        if (count($data["departments"]) > 0) {
            $department_ids = array_column($data["departments"], "department_id");
            $designation = $this->salary_model->get_designation($department_ids);
        }
        $data["designation"] = $designation;
        $data['form_type'] = 'salary_structure';
        // pr($data,1);
        $this->smarty->view("salary_structure_add_update.tpl", $data);
    }
    public function salary_structure_component_row()
    {
        $post_data = $this->input->post();
        $data = [];
        $data["component_details"] = [];
        if ($post_data["company_id"] > 0) {
            $current_year = date("Y");
            $data["component_details"] = $this->salary_model->get_component($post_data["company_id"], $current_year);
            foreach ($data["component_details"] as $key => $value) {
                $data["component_details"][$key]['used'] = "No";
            }
        }
        $return_arr["departments"] = $this->salary_model->get_department($post_data["company_id"]);
        $return_arr['html'] = $this->smarty->fetch("salary_structure_component_row.tpl", $data);
        echo json_encode($return_arr);
        exit();
    }
    public function get_designation()
    {
        $post_data = $this->input->post();

        $department_id = $post_data['department_id'];
        $designation = $this->salary_model->get_designation_data($department_id);
        $return_arr["designation"] = $designation;
        echo json_encode($return_arr);
        exit();
    }
    public function salary_structure_action()
    {
        $post_data = $this->input->post();
        // pr($post_data,1);
        $message = "Some thing went wrong..!";
        $success = 0;
        $user_id = $this->session->userdata("employee_id");
        $current_date = date("Y-m-d H:i:s");
        if ($post_data['mode'] == "Add") {
            $existing_salary_structure = $this->salary_model->get_salary_structure($post_data['designation_id'], $post_data['company_id']);
            if (count($existing_salary_structure) == 0) {
                $applicable_component = [];
                $component_value_arr = [];
                foreach ($post_data['component_id'] as $key => $value) {
                    if (isset($post_data['is_compulsory'][$key])) {
                        array_push($applicable_component, $value);
                        $component_value_arr[$value] = $post_data['component_value'][$key];
                    }
                }
                $component_details = $this->salary_model->get_component_data($applicable_component);
                $salary_strucuture_json = [];
                $salary_strucuture_arr['designation_id'] = $post_data['designation_id'];
                $salary_strucuture_arr['company_id'] = $post_data['company_id'];
                $salary_strucuture_arr['ctc_value'] = removeNumberFormate($post_data['ctc_value']);
                $salary_strucuture_arr['department_id'] = $post_data['department_id'];
                foreach ($component_details as $key => $value) {
                    unset($component_details[$key]['added_by'], $component_details[$key]['added_date'], $component_details[$key]['updated_by'], $component_details[$key]['updated_date']);
                    $component_details[$key]['component_value'] = removeNumberFormate($component_value_arr[$value['salary_component_id']]);
                }
                $salary_strucuture_arr['component_json'] = json_encode($component_details);
                $salary_strucuture_arr['added_by'] = $user_id;
                $salary_strucuture_arr['added_date'] = $current_date;
                // pr($salary_strucuture_arr,1);
                $insert_id = $this->salary_model->insert_salary_structure($salary_strucuture_arr);
                if ($insert_id > 0) {
                    foreach ($component_details as $key => $value) {
                        $component_details[$key]['designation_salary_structure_id'] = $insert_id;
                    }
                    $this->salary_model->insert_salary_structure_component($component_details);
                    $message = "Salary structure added successfully.";
                    $success = 1;
                }

            } else {
                $message = "Salary structure already exists for this designation..!";
                $success = 0;
            }
        } else if ($post_data['mode'] == "Update") {
            $applicable_component = [];
            $component_value_arr = [];
            foreach ($post_data['component_id'] as $key => $value) {
                if (isset($post_data['is_compulsory'][$key])) {
                    array_push($applicable_component, $value);
                    $component_value_arr[$value] = $post_data['component_value'][$key];
                }
            }
            $component_details = $this->salary_model->get_component_data($applicable_component);
            foreach ($component_details as $key => $value) {
                unset($component_details[$key]['added_by'], $component_details[$key]['added_date'], $component_details[$key]['updated_by'], $component_details[$key]['updated_date']);
                $component_details[$key]['component_value'] = removeNumberFormate($component_value_arr[$value['salary_component_id']]);
            }
            $updated_date_arr = [];
            $updated_date_arr['ctc_value'] = removeNumberFormate($post_data['ctc_value']);
            $updated_date_arr['component_json'] = json_encode($component_details);
            $updated_date_arr['updated_by'] = $user_id;
            $updated_date_arr['updated_date'] = $current_date;
            $affected_row = $this->salary_model->update_salary_structure($updated_date_arr, $post_data['id']);
            if ($affected_row > 0) {
                foreach ($component_details as $key => $value) {
                    $component_details[$key]['designation_salary_structure_id'] = $post_data['id'];
                }
                $this->salary_model->delete_salary_structure_component($post_data['id']);
                $this->salary_model->insert_salary_structure_component($component_details);
                $message = "Salary structure updated successfully.";
                $success = 1;
            }
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();

    }

    /* employee extend salary structure */
    public function employee_salary_strucuture()
    {
        $get_data = $this->input->get();
        $data = [];
        $current_year = date("Y");
        $start_year = 2020;
        $year_arr = [];
        for ($i = $start_year; $i <= $current_year; $i++) {
            array_push($year_arr, $i);
        }
        $data['employee_id'] = $get_data['id'];
        $data["year_arr"] = $year_arr;
        $data["no_data_message"] = '<div class="p-3"><img class="p-2" src="' .
        base_url() . 'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No employee salary structure data found..!</div>';
        $get_employee_details = $this->salary_model->get_employee_details($get_data['id']);
        $designation_salary_structure = $this->salary_model->get_designation_salary_structure($get_employee_details['department'], $get_employee_details['designation'], $get_employee_details['company_id']);

        $data['extended_salary_structure_id'] = isset($designation_salary_structure['designation_salary_structure_id']) ? $designation_salary_structure['designation_salary_structure_id'] : '';

        $employee_salary_structure = $this->salary_model->get_employee_salary_structure($get_data['id']);
        foreach ($employee_salary_structure as $key => $value) {
            $employee_salary_structure[$key]['employee_name'] = '<a title="' . $value['employee_name'] . '" href="' . get_entiry_url("employee", "View", $value['employee_id']) . '">' . $value['employee_name'] . '</a>';
            if ($value['added_by_name'] != '' && $value['added_by_name'] != null) {
                $employee_salary_structure[$key]['added_by_name'] = '<a title="' . $value['added_by_name'] . '" href="' . get_entiry_url("employee", "View", $value['added_by']) . '">' . $value['added_by_name'] . '</a>';
            } else {
                $employee_salary_structure[$key]['added_by_name'] = display_no_character('');
            }

            if ($value['updated_by_name'] != "" && $value['updated_by_name'] != null) {
                $employee_salary_structure[$key]['updated_by_name'] = '<a title="' . $value['updated_by_name'] . '" href="' . get_entiry_url("employee", "View", $value['updated_by']) . '">' . $value['updated_by_name'] . '</a>';
            } else {
                $employee_salary_structure[$key]['updated_by_name'] = display_no_character('');
            }
            $is_checked = $value['is_default'] == 'Yes' ? 'checked' : '';
            $employee_salary_structure[$key]['ctc_value'] = getNumberFormate($value['ctc_value']);
            $employee_salary_structure[$key]['status'] = strtolower($value['status']);
            $employee_salary_structure[$key]['action'] = '<a href="' . get_entiry_url('employee_salary_structure', "Update", $value['employee_extended_salary_structure_id']) . '"><i class="ti ti-edit" title="Edit"></i> </a>';
            $employee_salary_structure[$key]['default'] = '<input type="checkbox" class="form-check-input default-check" id= "defaut_check_' . $value['employee_extended_salary_structure_id'] . '" name="default-box[]" value="Yes" data-structure-id = "' . $value['employee_extended_salary_structure_id'] . '"
            data-employee_id = "' . $value['employee_id'] . '" ' . $is_checked . '>';
        }
        $data['employee_salary_structure'] = $employee_salary_structure;
        // pr($data,1);
        $this->smarty->view("employee_salary_structure.tpl", $data);

    }
    public function employee_salary_strucuture_action()
    {
        $get_data = $this->input->get();
        $get_employee_details = $this->salary_model->get_employee_details($get_data['id']);
        $data["employee_details"] = $get_employee_details;
        $designation_salary_structure = $this->salary_model->get_designation_salary_structure($get_employee_details['department'], $get_employee_details['designation'], $get_employee_details['company_id']);
        $data["designation_salary_structure"] = $designation_salary_structure;
        $data["component_details"] = $this->salary_model->get_salary_structure_component_details($designation_salary_structure['designation_salary_structure_id']);
        foreach ($data["component_details"] as $key => $value) {
            $data["component_details"][$key]['used'] = "Yes";
        }
        $data['form_type'] = 'employee_salary_structure';
        $data['mode'] = 'Extended';
        // pr($data,1);
        $this->smarty->view("employee_salary_structure_form.tpl", $data);

    }

    public function employee_salary_strucuture_update_action()
    {
        $get_data = $this->input->get();
        $data = [];
        $designation_salary_structure = $this->salary_model->get_employee_salary_structure_data($get_data['id']);
        $data["designation_salary_structure"] = $designation_salary_structure;
        $data["employee_details"] = $this->salary_model->get_employee_details($designation_salary_structure['employee_id']);
        $data["component_details"] = $this->salary_model->get_employee_salary_structure_component($get_data['id']);
        foreach ($data["component_details"] as $key => $value) {
            $data["component_details"][$key]['used'] = "Yes";
        }
        $data['form_type'] = 'employee_salary_structure';
        $data['mode'] = 'Update';
        $data['id'] = $get_data['id'];
        // pr($data,1);
        $this->smarty->view("employee_salary_structure_form.tpl", $data);
    }

    public function employee_salary_structure_action()
    {
        $post_data = $this->input->post();
        // pr($post_data,1);
        $user_id = $this->session->userdata("employee_id");
        $current_date = date("Y-m-d H:i:s");
        $message = "Some thing went wrong..!";
        $success = 0;

        $effective_date_from = $post_data['effective_date_from'];
        $effective_date_to = $post_data['effective_date_to'];
        $employee_salary_structure_id = '';
        if ($post_data['mode'] == "Update") {
            $employee_salary_structure_id = $post_data['id'];
        }
        $existing_salary_structure_count = $this->salary_model->check_existing_employee_salary_structure_data($effective_date_from, $effective_date_to, $employee_salary_structure_id);

        if ($post_data['mode'] == "Extended" && $existing_salary_structure_count == 0) {
            $employee_salary_structure_arr = [];
            $extended_employee_structure_count = $this->salary_model->get_extend_employee_salary_structure($post_data['employee_id']);
            $extended_code = str_pad($extended_employee_structure_count + 1, 5, "0", STR_PAD_LEFT);
            $extended_code = "ESS/" . date("Y") . "/" . date("m") . "/" . $extended_code;
            $employee_salary_structure_arr = ["refrence_number" => $extended_code, "employee_id" => $post_data['employee_id'], "ctc_value" => removeNumberFormate($post_data['ctc_value']), "effective_from" => $post_data['effective_date_from'], "effective_to" => $post_data['effective_date_to'], "status" => 'Active', "added_by" => $user_id, "added_date" => $current_date];

            $insert_id = $this->salary_model->insert_extend_employee_salary_structure($employee_salary_structure_arr);
            if ($insert_id > 0) {
                $employee_salary_structure_componet = [];
                foreach ($post_data['component_id'] as $key => $value) {
                    if (isset($post_data['is_compulsory'][$key])) {
                        $component_value = removeNumberFormate($post_data['component_value'][$key]);
                        $component_data = ["employee_extended_salary_structure_id" => $insert_id, "salary_component_id" => $value, "component_name" => $post_data['component_name_val'][$key], "component_type" => $post_data['component_type'][$key], "component_value" => $component_value, "value_type" => $post_data['value_type'][$key], "is_compulsory" => $post_data['is_compulsory_val'][$key], "year" => $post_data['year_val'][$key], "description" => $post_data['description_val'][$key]];
                        array_push($employee_salary_structure_componet, $component_data);
                    }
                }
                $this->salary_model->insert_extend_employee_salary_structure_component($employee_salary_structure_componet);
                $message = "Employee salary structure extend successfully.";
                $success = 1;
            }

        } else if ($post_data['mode'] = "Update" && $existing_salary_structure_count == 0) {
            $employee_salary_structure_update_arr = ["ctc_value" => removeNumberFormate($post_data['ctc_value']), "effective_from" => $post_data['effective_date_from'], "effective_to" => $post_data['effective_date_to'], "updated_by" => $user_id, "updated_date" => $current_date];
            // pr($employee_salary_structure_update_arr,1);
            $affected_row = $this->salary_model->update_employee_salary_structure($employee_salary_structure_update_arr, $post_data['id']);
            if ($affected_row > 0) {
                $employee_salary_structure_componet = [];
                $this->salary_model->delete_employee_salary_structure_component($post_data['id']);
                foreach ($post_data['component_id'] as $key => $value) {
                    if (isset($post_data['is_compulsory'][$key])) {
                        $component_value = removeNumberFormate($post_data['component_value'][$key]);
                        $component_data = ["employee_extended_salary_structure_id" => $post_data['id'], "salary_component_id" => $value, "component_name" => $post_data['component_name_val'][$key], "component_type" => $post_data['component_type'][$key], "component_value" => $component_value, "value_type" => $post_data['value_type'][$key], "is_compulsory" => $post_data['is_compulsory_val'][$key], "year" => $post_data['year_val'][$key], "description" => $post_data['description_val'][$key]];
                        array_push($employee_salary_structure_componet, $component_data);
                    }
                }
                $this->salary_model->insert_extend_employee_salary_structure_component($employee_salary_structure_componet);
                $message = "Employee salary structure updated successfully.";
                $success = 1;
            }
        } else {
            $message = "Employee salary structure already exists for this dates.";
            $success = 0;
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();

    }

    public function generate_pdf($data = [])
    {
        // $directory_path = FCPATH . "public/uploads/salary_pdfs/".$data['employee_id'] .'/'. $data['year'].'/'.$data['month'];
        // $file_path = $directory_path . '/salary_pdf.pdf';
        $base_directory = FCPATH . "public/uploads/salary_slip";
        $employee_path = $base_directory . '/' . $data['employee_id'];

        if (!is_dir($employee_path)) {
            mkdir($employee_path, 0777);
        }
        $year_path = $employee_path . '/' . $data['year'];

        if (!is_dir($year_path)) {
            mkdir($year_path, 0777);
        }
        $month_path = $year_path . '/' . $data['month'];

        if (!is_dir($month_path)) {
            mkdir($month_path, 0777);
        }
        $employee_directory = $base_directory . $data['employee_id'] . '/';
        $year_month_directory = $employee_directory . $data['year'] . '/' . $data['month'] . '/';
        $file_path = $year_month_directory . 'salary_pdf.pdf';
        $htm_str = $this->smarty->fetch("salary_slip.tpl", $data);
        pr($htm_str);
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        $pdf->SetMargins(0, 7, 7, 0);

        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        //$pdf->SetAutoPageBreak(FALSE, 0);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->writeHTML($htm_str, true, false, true, false, '');
        $file_path = $month_path . '/salary_slip.pdf';
        $output = $pdf->Output($file_path, 'F');

    }

    public function employeeSalaryCalculation()
    {
        $designation_filter_data = $component_data = $employee_filter_data = $allocated_leaves = $filtered_allocerted_leave = $calulated_array = $leaves_dates = $employee_shift_arr = [];
        // $cur_date = new DateTime('now');
        // $last_day_of_month = $cur_date->modify('last day of this month');
        // $formated_last_date = $last_day_of_month->format('Y-m-d');
        $date_arr = $this->getMonthStartEndDate();
        $date_month_arr = explode('-', $date_arr['start_date']);
        $month_name = date("F", mktime(0, 0, 0, $date_month_arr[1], 10));
        $employee_data = $this->salary_model->getEmployeeData($month_name);
        $attandence_data_raw = $this->salary_model->getAttancedence($date_arr);
        $attandence_data = $attandence_data_raw['attendence_data'];
        $employee_in_out_time = $attandence_data_raw['in_out_employee_data'];
        $employee_ids_main = array_column($employee_data, 'employee_id');
        // pr($employee_ids_main,1);
        $deparment_ids = array_column($employee_data, 'department');
        $designation_ids = array_column($employee_data, 'designation');
        $leaves_data_raw = $this->salary_model->getLeavesData($date_arr, $employee_ids_main);
        // $leaves_assoc = array_column($leaves_data_raw,'leaves','employee_id');
        if (is_valid_array($leaves_data_raw)) {
            foreach ($leaves_data_raw as $leave_key => $leav_val) {
                $leaves_dates[$leav_val['employee_id']] = $leav_val;
            }
        }
        $designation_wise_raw_data = $this->salary_model->getDesignationComponenetData();
        $employee_wise_raw_data = $this->salary_model->getEmployeeComponenetData($employee_ids_main);
        $employee_ids = is_valid_array($employee_wise_raw_data) ? array_unique(array_column($employee_wise_raw_data, 'employee_id')) : [];
        if (is_valid_array($designation_wise_raw_data)) {
            //designation and department wise component
            foreach ($designation_wise_raw_data as $index => $data) {
                $designation_filter_data[$data['designation_id']][$data['department_id']][] = $data;
            }
        }
        if (is_valid_array($employee_wise_raw_data)) {
            //emloyee wise component
            foreach ($employee_wise_raw_data as $index => $data) {
                $employee_filter_data[$data['employee_id']][] = $data;
            }
        }

        $allocated_leaves = $this->salary_model->getAllocatedLeaves($deparment_ids, $designation_ids);

        if (is_valid_array($employee_data)) {
            foreach ($employee_data as $key => $val) {
                $income_arr = $deduction_arr = [];
                $over_time_amount_min_wise = $total_income = $total_deduction = $over_time_min = $leaves_days = $absent_days_count = 0;
                $over_time_allowed = $val['over_time_allow'];
                $over_time_per_min = $val['overtime_rate_per_hour'] / 60;
                $working_days_data = $this->getWorkingDays(explode(',', $val['week_off']));
                $week_off_count = $working_days_data['week_off_count'];
                $working_data_arr = $working_days_data['working_arr'];
                $employee_shift_arr_raw = $this->salary_model->getEmployeeShiftData($val['employee_id'],$date_arr);
                if (in_array($val['employee_id'], $employee_ids)) {
                    // will getting the data from employee extented structure
                    $component_data = $employee_filter_data[$val['employee_id']];

                } else {
                    // will getting the data from designation
                    $component_data = isset($designation_filter_data[$val['designation']]) && isset($designation_filter_data[$val['designation']][$val['department']]) ? $designation_filter_data[$val['designation']][$val['department']] : [];
                }
                if (!is_valid_array($component_data)) {
                    return 0;
                }

                $calulated_array = $this->getMonthlyCalculation($component_data, $date_arr);

                $insert_array[] = array(
                    'employee_id' => $val['employee_id'],
                    'year' => $component_data[0]['year'],
                    'month' => $date_month_arr[1],
                    'salary_json' => json_encode($calulated_array),
                    'type' => $component_data[0]['type'],
                    'refrence_id' => $component_data[0]['type'] == 'Employee' ? $component_data[0]['employee_extended_salary_structure_id'] : $component_data[0]['designation_salary_structure_id'],
                );

                //below code for calculating the absent days.
                if (is_valid_array($working_data_arr)) {
                    foreach ($working_data_arr as $working_key => $working_value) {
                        if (array_key_exists($val['employee_id'], $attandence_data) && !in_array($working_value, $attandence_data[$val['employee_id']])) {
                            $leave_data_temp = array_key_exists($val['employee_id'], $leaves_dates) ? $leaves_dates[$val['employee_id']] : [];
                            $atotal_incomebsent_flag = $this->compareThreeDatas($leave_data_temp, $working_value);
                            if (!$atotal_incomebsent_flag) {
                                $absent_days_count += 1;
                            }
                        }

                        if ($over_time_allowed == 'Yes' && array_key_exists($val['employee_id'], $employee_in_out_time) && array_key_exists($working_value, $employee_in_out_time[$val['employee_id']])) {
                            foreach($employee_shift_arr_raw as $sf_key => $sf_val){
                                $tem_date  = new DateTime($working_value);
                                $tem_start_date = new DateTime($sf_val['start_date']);
                                $tem_end_date = new DateTime($sf_val['end_date']);
                                if($tem_date >= $tem_start_date && $tem_date <= $tem_end_date ){
                                    $shift_mins = $this->getmintBetweenTwoTime($sf_val['start_time'],$sf_val['end_time']);
                                    $tem_in_out_arr = $employee_in_out_time[$val['employee_id']][$working_value];
                                    $tem_att_mins = $this->getMintBetweenTwoDatetime($tem_in_out_arr['in_time'],$tem_in_out_arr['out_time']);
                                    if($tem_att_mins > $shift_mins){
                                        $over_time_min += $tem_att_mins - $shift_mins;
                                    }
                                    $over_time_amount_min_wise = $over_time_min * $over_time_per_min;
                                    

                                }
                            }
                        }

                    }
                    if (!array_key_exists($val['employee_id'], $attandence_data)) {
                        $absent_days_count = $working_days_data['working_days'];
                    }
                }

                foreach ($calulated_array as $key => $val_in) {
                    if ($val_in['component_type'] == 'Income') {
                        $income_arr[] = $val_in;
                        $total_income += $val_in['component_value'];
                    } else {
                        $deduction_arr[] = $val_in;
                        $total_deduction += $val_in['component_value'];
                    }
                }
                if (is_valid_array($leaves_dates) && array_key_exists($val['employee_id'], $leaves_dates)) {
                    foreach ($leaves_dates as $l_date_k => $l_date_val) {
                        $leaves_days += $this->calculateDaysBetweenDates($l_date_val['leave_start_date'], $l_date_val['leave_end_date'], $l_date_val['leave_type']);
                    }
                }

                $new_amount = $total_income - $total_deduction;
                $per_day = $new_amount / $working_days_data['days_in_month'];
                $net_amount_with_absent = $new_amount - ($absent_days_count * $per_day) +$over_time_amount_min_wise;
                $pdf_data['employee_data'] = $val;
                $pdf_data['income_arr'] = $income_arr;
                $pdf_data['deduction_arr'] = $deduction_arr;
                $pdf_data['total_income'] = $total_income;
                $pdf_data['total_deduction'] = $total_deduction;
                $pdf_data['total_net_amount'] = number_format($net_amount_with_absent, 2);
                $pdf_data['month'] = $month_name;
                $pdf_data['year'] = $date_month_arr[0];
                $pdf_data['employee_id'] = $val['employee_id'];
                $pdf_data['working_days'] = $working_days_data['working_days'];
                $pdf_data['leaves'] = $leaves_days;
                $pdf_data['present_days'] = array_key_exists($val['employee_id'], $attandence_data) ? count($attandence_data[$val['employee_id']]) : 0;
                $pdf_data['holidays'] = count($this->holiday_arr);
                $pdf_data['week_off'] = $week_off_count;
                $pdf_data['absent_days'] = $absent_days_count;
                
                $this->generate_pdf($pdf_data);

            }
        }

        if (is_valid_array($insert_array)) {
            $this->db->insert_batch('employee_monthly_salary_log', $insert_array);
        }

    }

    public function compareThreeDatas($leaves_dates = [], $work_date = '')
    {
        if (!is_valid_array($leaves_dates) || $work_date == '') {
            return 0;
        }

        foreach ($leaves_dates as $date_k => $date_v) {
            $w_day = new DateTime($work_date);
            $st_leave_date = new DateTime($date_v['leave_start_date']);
            $e_leave_date = new DateTime($date_v['leave_end_date']);
            if ($w_day >= $st_leave_date && $w_day <= $e_leave_date) {
                return true;
            }
        }

        return false;
    }

    public function calculateDaysBetweenDates($s_date = '', $e_date = '', $type = '')
    {
        if ($s_date == '' || $e_date == '') {
            return 0;
        }

        $date1 = new DateTime($s_date);
        $date2 = new DateTime($e_date);
        $interval = $date1->diff($date2);
        $days = $interval->days;
        if ($date1 == $date2 && $type == 'half_day') {
            $days = 0.5;
        } else {
            $days += 1;
        }
        return $days;
    }
    public function getMonthlyCalculation($component_data = [], $date_arr = [])
    {
        if (!is_valid_array($component_data)) {
            return 0;
        }

        $recevable_ctc = $total_income = $total_deduction = 0;
        $caculated_array = [];
        $recevable_ctc = $component_data[0]['ctc_value'] / 12;
        foreach ($component_data as $index => $value) {
            if ($value['value_type'] == 'Decimal') {
                $montly_amount = $value['component_value'] / 12;
            } else {
                $amount = ($value['component_value'] * $value['ctc_value']) / 100;
                $montly_amount = $amount / 12;
            }
            if ($value['component_type'] == 'Income') {
                $total_income += $montly_amount;
            } else {
                $total_deduction += $montly_amount;
            }
            $caculated_array[] = array(
                'component_name' => $value['component_name'],
                'year' => $value['year'],
                'component_value' => $montly_amount,
                'component_type' => $value['component_type'],
                'description' => $value['description'],
                'recevable_amount' => $recevable_ctc,
                'total_income' => $total_income,
                'total_deduction' => $total_deduction,
            );
        }
        return $caculated_array;

    }

    public function updateDefaultStructure()
    {
        $post_data = $this->input->get_post(null, true);
        $return_arr = [];
        if (!is_valid_array($post_data)) {
            return [];
        }

        $id = $post_data['id'] ?? 0;
        $e_id = $post_data['e_id'] ?? 0;
        if ($id == 0 || $e_id == 0) {
            return [];
        }

        $affected_row = $this->salary_model->UpdateDefaultStructure($post_data['id'], $e_id);
        if ($affected_row > 0) {
            $return_arr['msg'] = 'Default Structure Updated Sucessfully.';
            $return_arr['success'] = 1;
        } else {
            $return_arr['msg'] = 'Falied to Update Default structure.';
            $return_arr['success'] = 0;
        }
        echo json_encode($return_arr);
    }
    public function getMonthStartEndDate()
    {
        $return_arr = [];
        $month = $this->getPriviousMonth();
        $year = date("Y");
        $firstDay = date("Y-m-01", mktime(0, 0, 0, $month, 1, $year));
        $lastDay = date("Y-m-t", mktime(0, 0, 0, $month, 1, $year));
        $return_arr['start_date'] = $firstDay;
        $return_arr['end_date'] = $lastDay;
        return $return_arr;
    }

    public function getPriviousMonth()
    {
        $currentMonth = date('n');
        $previousMonth = $currentMonth - 1;
        $previousMonth = $previousMonth < 1 ? 12 : $previousMonth;
        return $previousMonth;
    }

    public function getWorkingDays($week_off_days = [])
    {
        $month = $this->getPriviousMonth();
        $year = date('Y');
        $workingDays = 0;
        $working_arr = [];
        $date_arr = $this->getMonthStartEndDate();
        $holidays_raw_arr = $this->salary_model->getHolidayList($date_arr);
        $this->holiday_arr = $holidays_raw_arr;
        $week_off_arr = $this->dateByday($year, $month, $week_off_days);
        $holidays = array_column($holidays_raw_arr, 'holiday_date');
        $week_off_holiday = array_unique(array_merge($holidays, $week_off_arr));
        $firstDay = new DateTime("{$year}-{$month}-01");
        $lastDay = clone $firstDay;
        $lastDay = $lastDay->modify('+1 month -1 day');
        $intervalDay = new DateInterval('P1D');
        $period = new DatePeriod($firstDay, $intervalDay, $lastDay->modify('+1 day'));
        $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        foreach ($period as $day) {
            $dayOfWeek = $day->format('N');
            $dayDate = $day->format('Y-m-d');
            if (!in_array($dayDate, $week_off_holiday)) {
                $workingDays++;
                $working_arr[] = $dayDate;
            }
        }

        $return_arr['working_arr'] = $working_arr;
        $return_arr['working_days'] = $workingDays;
        $return_arr['week_off_count'] = count($week_off_arr);
        $return_arr['week_off_arr'] = $week_off_arr;
        $return_arr['week_off_holiday'] = $week_off_holiday;
        $return_arr['days_in_month'] = $days_in_month;
        // pr($return_arr);
        return $return_arr;
    }

    public function dateByday($year = '', $month = '', $days = [])
    {
        if (!is_valid_array($days)) {
            return 0;
        }

        $day_dates = [];
        foreach ($days as $day_k => $day_val) {
            $date = new DateTime("{$year}-{$month}-01");
            $date->modify("first $day_val of this month");
            while ($date->format('m') == $month) {
                $day_dates[] = $date->format('Y-m-d');
                $date->modify('+1 week');
            }

        }
        return $day_dates;
    }

    public function getmintBetweenTwoTime($time1 = '', $time2 = '')
    {
        // Convert the times to 24-hour format
        $time1_24 = date("H:i", strtotime($time1));
        $time2_24 = date("H:i", strtotime($time2));
        // $diff_hours = round(abs(strtotime($time2_24) - strtotime($time1_24)) / 3600, 2);
        $diff_minutes = round(abs(strtotime($time2_24) - strtotime($time1_24)) / 60);

        return $diff_minutes;
    }

    public function getMintBetweenTwoDatetime($datetime1 = '', $datetime2 = '')
{
        // Create DateTime objects from the input datetime strings
        $dt1 = new DateTime($datetime1);
        $dt2 = new DateTime($datetime2);

        // Calculate the difference between the two DateTime objects
        $interval = $dt1->diff($dt2);

        // Calculate total hours between the two datetimes
        $total_minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;

        return $total_minutes;
}

}
