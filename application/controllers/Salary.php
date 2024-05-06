<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Salary extends MY_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("salary_model");
    }
    public function index(){
        $current_year = date("Y");
        $start_year = 2020;
        $year_arr = [];
        for ($i=$start_year; $i <=$current_year ; $i++) { 
            array_push($year_arr, $i);
        }
        $data["year_arr"] = $year_arr;
    	$salary_component = $this->salary_model->get_salary_component();
    	foreach ($salary_component as $key => $value) {
    		$salary_component[$key]['action'] = '<span class="edit_salary_componet me-2 text-secondary cursor" data-id="'.$value['salary_component_id'].'" title="Edit"><i class=" la-edit ti ti-edit"></i></span>';
    	}
    	$data["salary_components"] = $salary_component;
        $data["no_data_message"] = '<div class="p-3 no-data-found-block"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No salary component data found..!</div>';
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["value_type_arr"] = [["id"=>"Percentage","val"=>"Percentage"],["id"=>"Decimal","val"=>"Decimal"]];
        $data["component_type_arr"] = [["id"=>"Income","val"=>"Income"],["id"=>"Deduction","val"=>"Deduction"],["id"=>"Taxes","val"=>"Taxes"]];
        // pr($data,1);
    	$this->smarty->view("salary_component.tpl", $data);
    }
    public function add_action(){
        $current_year = date("Y");
        $start_year = 2020;
        $year_arr = [];
        for ($i=$start_year; $i <=$current_year ; $i++) { 
            array_push($year_arr, $i);
        }
        $data["year_arr"] = $year_arr;
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["value_type_arr"] = [["id"=>"Percentage","val"=>"Percentage"],["id"=>"Decimal","val"=>"Decimal"]];
        $data["component_type_arr"] = [["id"=>"Income","val"=>"Income"],["id"=>"Deduction","val"=>"Deduction"],["id"=>"Taxes","val"=>"Taxes"]];
        $data["index"] = 0;
        $this->smarty->view("salary_component_add.tpl", $data);
    }
    public function salary_component_row(){
        $post_data = $this->input->post();
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["value_type_arr"] = [["id"=>"Percentage","val"=>"Percentage"],["id"=>"Decimal","val"=>"Decimal"]];
        $data["component_type_arr"] = [["id"=>"Income","val"=>"Income"],["id"=>"Deduction","val"=>"Deduction"],["id"=>"Taxes","val"=>"Taxes"]];
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
    	if($post['mode'] == 'Add'){
            $insert_arr = [];
            foreach ($post['component_name'] as $key => $value) {
                $component_name = $post['component_name'][$key];
                $component_type = $post['component_type'][$key];
                $value_type = $post['value_type'][$key];
                $component_value = removeNumberFormate($post['component_value'][$key]);
                $description = $post['description'][$key];
                if(isset($post['is_compulsory'])){
                    $is_compulsory = isset($post['is_compulsory'][$key]) ? "Yes":"No";
                }else{
                    $is_compulsory = "No";
                }
                

                $row_arr = ["component_name"=>$component_name,"component_value"=>$component_value,"value_type"=>$value_type,"component_type"=>$component_type,"year"=>$post['year_drop_down'],"is_compulsory"=>$is_compulsory,"description"=>$description,"company_id"=>$post['company_id'],"added_by"=>$user_id,"added_date"=>$current_date];
                array_push($insert_arr,$row_arr);
            }
            // pr($insert_arr,1);
    		// $insert_arr = ["component_name"=>$post['component_name'],"component_value"=>$post['component_value'],"value_type"=>$post['value_type'],"component_type"=>$post['component_type'],"year"=>$post['year'],"is_compulsory"=>$post['is_compulsory'],"description"=>$post['description'],"company_id"=>$post['company_id'],"added_by"=>$user_id,"added_date"=>$current_date];
    		$insert_id = $this->salary_model->insert_salary_component($insert_arr,$post['company_id'],$post['year_drop_down']);
    		if($insert_id  > 0){
    			$message = "Salary component added successfully.";
    			$success = 1;
    		}else if($insert_id == -1){
    			$message = "Salary component name aleady exit..!";
    			$success = 0;
    		}
    	}else if($post['mode'] == 'Update'){
    		$update_arr = ["component_name"=>$post['component_name'],"component_value"=>removeNumberFormate($post['component_value']),"value_type"=>$post['value_type'],"component_type"=>$post['component_type'],"year"=>$post['year'],"is_compulsory"=>$post['is_compulsory'],"description"=>$post['description'],"updated_by"=>$user_id,"updated_date"=>$current_date];
            
    		$affected_row = $this->salary_model->update_salary_component($update_arr,$post['company_id'],$post['salary_component_id']);
    		if($affected_row  > 0){
    			$message = "Salary component updated successfully.";
    			$success = 1;
    		}else if($affected_row == -1){
    			$message = "Salary component name aleady exit..!";
    			$success = 0;
    		}
    	}

    	$return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
    }
    public function get_salary_details(){
    	$post = $this->input->post();
    	$success = 0;
    	$salary_component = $this->salary_model->get_salary_component($post['id']);
    	$salary_component_arr = [];
    	if(count($salary_component) > 0){
    		$success = 1;
    		$salary_component_arr = $salary_component[0];
    	}
        $return_arr["success"] = $success;
        $return_arr["salary_component"] = $salary_component_arr;
    	echo json_encode($return_arr);
        exit();
    }
    public function salary_strucuture(){
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["departments"] = [];
        if($data["selected_company"] > 0){
            $data["departments"] = $this->salary_model->get_department($data["selected_company"]);
        }
        $designation = [];
        if(count($data["departments"]) > 0){
            $department_ids = array_column($data["departments"], "department_id");
            $designation = $this->salary_model->get_designation($department_ids);
        }
        $data["designation"] = $designation;
        $data["no_data_message"] = '<div class="p-3 no-data-found-block"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No salary structure data found..!</div>';

        $data["salary_strucuture"] = $this->salary_model->get_designation_salary_structure_list($data["selected_company"]);
        foreach ($data["salary_strucuture"] as $key => $value) {
            $added_by = $data["salary_strucuture"][$key]['added_by'];
            $data["salary_strucuture"][$key]['added_by_name'] = $added_by > 0 ? "<a href=
            '".get_entiry_url("employee","View",$added_by)."'>".$data['salary_strucuture'][$key]['added_by_name']."</a>": display_no_character('');
            $updated_by = $data["salary_strucuture"][$key]['updated_by'];
            $data["salary_strucuture"][$key]['updated_by_name'] = $updated_by > 0 ? "<a href=
            '".get_entiry_url("employee","View",$updated_by)."'>".$data['salary_strucuture'][$key]['added_by_name']."</a>": display_no_character('');
            $data["salary_strucuture"][$key]['action'] = '<a href="'.get_entiry_url("salary_structure","Update",$value['designation_salary_structure_id']).'" class="edit_salary_structure me-2 text-secondary cursor" title="Edit"><i class=" la-edit ti ti-edit"></i></a>';
        }
        $this->smarty->view("salary_strucuture_list.tpl", $data);
    }
    public function salary_strucuture_action(){
        $get_data = $this->input->get();
        $data = [];
        $data['mode'] = "Add";
        $data['id'] = '';
        if(isset($get_data['id'])){
            if($get_data['id'] > 0){
                $data['mode'] = "Update";
                $data['id'] = $get_data['id'];
            }
        }
        $data["company_details"] = $this->salary_model->get_companies();
        $data["selected_company"] = getCompanyId();
        $data["ctc_value"] = '';
        $data["designation_id"] = '';
        $data["department_id"] = '';
        if($data['mode'] == "Update"){
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
            $all_component_details = $this->salary_model->get_component($data["selected_company"],$current_year);
            $component_detail_arr= [];
            foreach ($all_component_details as $key => $value) {
                // pr($value);
                if(in_array($value['salary_component_id'], $use_components)){
                    $value = $use_id_components[$value['salary_component_id']];
                    $value['used'] = "Yes";
                    array_push($component_detail_arr, $value);
                }else{
                    $value['used'] = "No";
                    array_push($component_detail_arr, $value);
                }

            }
            array_multisort(array_column($component_detail_arr, 'used'), SORT_DESC, SORT_NATURAL|SORT_FLAG_CASE, $component_detail_arr);
            $data["component_details"] = $component_detail_arr;
            // pr($component_detail_arr,1);
            $data["selected_company"] = $salary_strucuture_details['company_id'];
            $data["ctc_value"] = $salary_strucuture_details['ctc_value'];
            $data["designation_id"] = $salary_strucuture_details['designation_id'];
            $data["department_id"] = $salary_strucuture_details['department_id'];
        }else{
            $data["component_details"] = [];
            if($data["selected_company"] > 0){
              $current_year = date("Y");
              $data["component_details"] = $this->salary_model->get_component($data["selected_company"],$current_year);
              foreach ($data["component_details"] as $key => $value) {
                $data["component_details"][$key]['used'] = "No";
              }

            }
        }

        $data["departments"] = [];
        if($data["selected_company"] > 0){
            $data["departments"] = $this->salary_model->get_department($data["selected_company"]);
        }
        $designation = [];
        if(count($data["departments"]) > 0){
            $department_ids = array_column($data["departments"], "department_id");
            $designation = $this->salary_model->get_designation($department_ids);
        }
        $data["designation"] = $designation;
        $data['form_type'] = 'salary_structure';
        // pr($data,1);
        $this->smarty->view("salary_structure_add_update.tpl", $data);
    }
    public function salary_structure_component_row(){
        $post_data = $this->input->post();
        $data = [];
        $data["component_details"] = [];
        if($post_data["company_id"] > 0){
          $current_year = date("Y");
          $data["component_details"] = $this->salary_model->get_component($post_data["company_id"],$current_year);
          foreach ($data["component_details"] as $key => $value) {
                $data["component_details"][$key]['used'] = "No";
          }
        }
        $return_arr["departments"] = $this->salary_model->get_department($post_data["company_id"]);
        $return_arr['html'] = $this->smarty->fetch("salary_structure_component_row.tpl", $data);
        echo json_encode($return_arr);
        exit();
    }
    public function get_designation(){
        $post_data = $this->input->post();

        $department_id = $post_data['department_id'];
        $designation = $this->salary_model->get_designation_data($department_id);
        $return_arr["designation"] = $designation;
        echo json_encode($return_arr);
        exit();
    }
    public function salary_structure_action(){
        $post_data = $this->input->post();
        // pr($post_data,1);
        $message = "Some thing went wrong..!";
        $success = 0;
        $user_id = $this->session->userdata("employee_id");
        $current_date = date("Y-m-d H:i:s");
        if($post_data['mode'] == "Add"){
            $existing_salary_structure = $this->salary_model->get_salary_structure($post_data['designation_id'],$post_data['company_id']);
            if(count($existing_salary_structure) == 0){
                $applicable_component = [];
                $component_value_arr =[];
                foreach ($post_data['component_id'] as $key => $value) {
                    if(isset($post_data['is_compulsory'][$key])){
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
                    unset($component_details[$key]['added_by'],$component_details[$key]['added_date'],$component_details[$key]['updated_by'],$component_details[$key]['updated_date']);
                    $component_details[$key]['component_value'] = removeNumberFormate($component_value_arr[$value['salary_component_id']]);
                }
                $salary_strucuture_arr['component_json'] = json_encode($component_details);
                $salary_strucuture_arr['added_by'] = $user_id;
                $salary_strucuture_arr['added_date'] = $current_date;
                // pr($salary_strucuture_arr,1);
                $insert_id = $this->salary_model->insert_salary_structure($salary_strucuture_arr);
                if($insert_id > 0){
                    foreach ($component_details as $key => $value) {
                        $component_details[$key]['designation_salary_structure_id'] = $insert_id;
                    }
                    $this->salary_model->insert_salary_structure_component($component_details);
                    $message = "Salary structure added successfully.";
                    $success = 1;
                }
                
            }else{
                $message = "Salary structure already exists for this designation..!";
                $success = 0;
            }
        }else if($post_data['mode'] == "Update"){
            $applicable_component = [];
            $component_value_arr =[];
            foreach ($post_data['component_id'] as $key => $value) {
                if(isset($post_data['is_compulsory'][$key])){
                    array_push($applicable_component, $value);
                    $component_value_arr[$value] = $post_data['component_value'][$key];
                }
            }
            $component_details = $this->salary_model->get_component_data($applicable_component);
            foreach ($component_details as $key => $value) {
                    unset($component_details[$key]['added_by'],$component_details[$key]['added_date'],$component_details[$key]['updated_by'],$component_details[$key]['updated_date']);
                    $component_details[$key]['component_value'] = removeNumberFormate($component_value_arr[$value['salary_component_id']]);
            }
            $updated_date_arr = [];
            $updated_date_arr['ctc_value'] = removeNumberFormate($post_data['ctc_value']);
            $updated_date_arr['component_json'] = json_encode($component_details);
            $updated_date_arr['updated_by'] = $user_id;
            $updated_date_arr['updated_date'] = $current_date;
            $affected_row = $this->salary_model->update_salary_structure($updated_date_arr,$post_data['id']);
            if($affected_row > 0){
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
    public function employee_salary_strucuture(){
        $get_data = $this->input->get();
        $data = [];
        $current_year = date("Y");
        $start_year = 2020;
        $year_arr = [];
        for ($i=$start_year; $i <=$current_year ; $i++) { 
            array_push($year_arr, $i);
        }
        $data['employee_id'] = $get_data['id'];
        $data["year_arr"] = $year_arr;
        $data["no_data_message"] = '<div class="p-3 no-data-found-block"><img class="p-2" src="' .
            base_url() .'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No employee salary structure data found..!</div>';
        $get_employee_details = $this->salary_model->get_employee_details($get_data['id']);
        $designation_salary_structure = $this->salary_model->get_designation_salary_structure($get_employee_details['department'],$get_employee_details['designation'],$get_employee_details['company_id']);

        $data['extended_salary_structure_id'] = isset($designation_salary_structure['designation_salary_structure_id']) ? $designation_salary_structure['designation_salary_structure_id'] : '';

        $employee_salary_structure = $this->salary_model->get_employee_salary_structure($get_data['id']);
        foreach ($employee_salary_structure as $key => $value) {
            $employee_salary_structure[$key]['employee_name'] = '<a title="'.$value['employee_name'].'" href="'.get_entiry_url("employee","View",$value['employee_id']).'">'.$value['employee_name'].'</a>';
            if($value['added_by_name'] != '' &&  $value['added_by_name'] != null){
                $employee_salary_structure[$key]['added_by_name'] = '<a title="'.$value['added_by_name'].'" href="'.get_entiry_url("employee","View",$value['added_by']).'">'.$value['added_by_name'].'</a>';
            }else{
                $employee_salary_structure[$key]['added_by_name'] = display_no_character('');
            }

            if($value['updated_by_name'] != "" && $value['updated_by_name'] != null){
                $employee_salary_structure[$key]['updated_by_name'] = '<a title="'.$value['updated_by_name'].'" href="'.get_entiry_url("employee","View",$value['updated_by']).'">'.$value['updated_by_name'].'</a>';
            }else{
                $employee_salary_structure[$key]['updated_by_name'] = display_no_character('');
            }
            $employee_salary_structure[$key]['ctc_value'] = getNumberFormate($value['ctc_value']);
            $employee_salary_structure[$key]['status'] = strtolower($value['status']);
            $employee_salary_structure[$key]['action'] = '<a href="'.get_entiry_url('employee_salary_structure',"Update",$value['employee_extended_salary_structure_id']).'"><i class="ti ti-edit" title="Edit"></i> </a>';
        }
        $data['employee_salary_structure'] = $employee_salary_structure;
        // pr($data,1);
        $this->smarty->view("employee_salary_structure.tpl", $data);

        
    }
    public function employee_salary_strucuture_action(){
        $get_data = $this->input->get();
        $get_employee_details = $this->salary_model->get_employee_details($get_data['id']);
        $data["employee_details"] = $get_employee_details;
        $designation_salary_structure = $this->salary_model->get_designation_salary_structure($get_employee_details['department'],$get_employee_details['designation'],$get_employee_details['company_id']);
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

    public function employee_salary_strucuture_update_action(){
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


    public function employee_salary_structure_action(){
        $post_data = $this->input->post();
        // pr($post_data,1);
        $user_id = $this->session->userdata("employee_id");
        $current_date = date("Y-m-d H:i:s");
        $message = "Some thing went wrong..!";
        $success = 0;

        $effective_date_from = $post_data['effective_date_from'];
        $effective_date_to = $post_data['effective_date_to'];
        $employee_salary_structure_id = '';
        if($post_data['mode'] == "Update"){
            $employee_salary_structure_id = $post_data['id'];
        }
        $existing_salary_structure_count = $this->salary_model->check_existing_employee_salary_structure_data($effective_date_from,$effective_date_to,$employee_salary_structure_id);

        if($post_data['mode'] == "Extended" && $existing_salary_structure_count == 0){
            $employee_salary_structure_arr = [];
            $extended_employee_structure_count = $this->salary_model->get_extend_employee_salary_structure($post_data['employee_id']);
            $extended_code = str_pad($extended_employee_structure_count + 1, 5, "0", STR_PAD_LEFT);
            $extended_code = "ESS/".date("Y")."/".date("m")."/".$extended_code;
            $employee_salary_structure_arr = ["refrence_number"=>$extended_code,"employee_id"=>$post_data['employee_id'],"ctc_value"=>removeNumberFormate($post_data['ctc_value']),"effective_from"=>$post_data['effective_date_from'],"effective_to"=>$post_data['effective_date_to'],"status"=>'Active',"added_by"=>$user_id,"added_date"=>$current_date];

            $insert_id = $this->salary_model->insert_extend_employee_salary_structure($employee_salary_structure_arr);
            if($insert_id > 0){
                $employee_salary_structure_componet = [];
                foreach ($post_data['component_id'] as $key => $value) {
                    if(isset($post_data['is_compulsory'][$key])){
                        $component_value = removeNumberFormate($post_data['component_value'][$key]);
                        $component_data = ["employee_extended_salary_structure_id"=>$insert_id,"salary_component_id"=>$value,"component_name"=>$post_data['component_name_val'][$key],"component_type"=>$post_data['component_type'][$key],"component_value"=>$component_value,"value_type"=>$post_data['value_type'][$key],"is_compulsory"=>$post_data['is_compulsory_val'][$key],"year"=>$post_data['year_val'][$key],"description"=>$post_data['description_val'][$key]];
                        array_push($employee_salary_structure_componet, $component_data);
                    }
                }
                $this->salary_model->insert_extend_employee_salary_structure_component($employee_salary_structure_componet);
                $message = "Employee salary structure extend successfully.";
                $success = 1;
            }

        }else if($post_data['mode'] = "Update" && $existing_salary_structure_count == 0){
            $employee_salary_structure_update_arr = ["ctc_value"=>removeNumberFormate($post_data['ctc_value']),"effective_from"=>$post_data['effective_date_from'],"effective_to"=>$post_data['effective_date_to'],"updated_by"=>$user_id,"updated_date"=>$current_date];
            // pr($employee_salary_structure_update_arr,1);
            $affected_row = $this->salary_model->update_employee_salary_structure($employee_salary_structure_update_arr,$post_data['id']);
            if($affected_row > 0){
                $employee_salary_structure_componet = [];
                $this->salary_model->delete_employee_salary_structure_component($post_data['id']);
                foreach ($post_data['component_id'] as $key => $value) {
                    if(isset($post_data['is_compulsory'][$key])){
                        $component_value = removeNumberFormate($post_data['component_value'][$key]);
                        $component_data = ["employee_extended_salary_structure_id"=>$post_data['id'],"salary_component_id"=>$value,"component_name"=>$post_data['component_name_val'][$key],"component_type"=>$post_data['component_type'][$key],"component_value"=>$component_value,"value_type"=>$post_data['value_type'][$key],"is_compulsory"=>$post_data['is_compulsory_val'][$key],"year"=>$post_data['year_val'][$key],"description"=>$post_data['description_val'][$key]];
                        array_push($employee_salary_structure_componet, $component_data);
                    }
                }
                $this->salary_model->insert_extend_employee_salary_structure_component($employee_salary_structure_componet);
                $message = "Employee salary structure updated successfully.";
                $success = 1;
            }
        }else{
            $message = "Employee salary structure already exists for this dates.";
            $success = 0;
        }

        $return_arr["message"] = $message;
        $return_arr["success"] = $success;
        echo json_encode($return_arr);
        exit();
        
    }

    public function generate_pdf(){
        include "application/libraries/phpqrcode/qrlib.php";
        include "application/libraries/fpdf/fpdf.php";
        require_once(APPPATH.'libraries/tcpdf/tcpdf.php');

        $directoryName = FCPATH."public/upload/3";
        if (!is_dir($directoryName)) {
            mkdir($directoryName, 0777);
        }

        $directoryName .="/2024";
        if (!is_dir($directoryName)) {
            mkdir($directoryName, 0777);
        }

        $directoryName .="/April";
        if (!is_dir($directoryName)) {
            mkdir($directoryName, 0777);
        }

               
        $file_path = $directoryName."/test.pdf";
        $htm_str = $this->smarty->fetch("salary_slip.tpl");
        // pr($htm_str,1);
        // create new PDF document
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        
        $pdf->SetMargins(0, 7, 7, 0);
        
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        //$pdf->SetAutoPageBreak(FALSE, 0);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->writeHTML($htm_str, true, false, true, false, '');
        
        $pdf->Output($file_path, 'D');
    }

}

?>
