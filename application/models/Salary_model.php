<?php
class Salary_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
   public function get_salary_component($id = '')
    {
        $this->db->select("sc.*");
        $this->db->from("salary_component as sc");
        $company_id = getCompanyId();
        if($company_id > 0){
            $this->db->where("sc.company_id", $company_id);
        }
        if($id > 0){
        	$this->db->where("sc.salary_component_id", $id);
        }

        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_companies()
    {
        $this->db->select("*");
        $result_obj = $this->db->get("companies");
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function insert_salary_component($data = [],$company_id = '',$year = '')
    {
    	$insert_id = 0;
        $component_name_arr = array_column($data, "component_name");
    	$this->db->select("sc.*");
        $this->db->from("salary_component as sc");
        $this->db->where("sc.company_id", $company_id);
        $this->db->where("sc.year", $year);
        $this->db->where_in("sc.component_name", $component_name_arr);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        $flag = 0;
        if(count($ret_data) > 0){
            $exit_component_year_wise = array_column($ret_data,"year", "component_name");
            foreach ($data as $key => $value) {
                if(array_key_exists($value['component_name'],$exit_component_year_wise)){
                   
                   if($exit_component_year_wise[$value['component_name']] == $value['year']){
                        $flag = 1;
                   }
                }
                
            }
        }

        if($flag == 1){
        	$insert_id = -1;
        }else{
        	$this->db->insert_batch("salary_component", $data);
        	$insert_id = $this->db->insert_id();
        }
        
        return $insert_id;
    }
    public function update_salary_component($data = [],$company_id = '',$salary_component_id = '')
    {
    	$affected_row = 0;
    	$this->db->select("sc.*");
        $this->db->from("salary_component as sc");
        $this->db->where("sc.salary_component_id !=", $salary_component_id);
        $this->db->where("sc.company_id", $company_id);
        $this->db->where("sc.component_name", $data['component_name']);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];

        // pr($ret_data);
        if(count($ret_data) > 0){
        	$affected_row = -1;
        }else{
        	$this->db->where("salary_component_id", $salary_component_id);
	        $this->db->update("salary_component",$data);
	        $affected_row = $this->db->affected_rows();
	        $affected_row = $affected_row == 0 ? 1 : $affected_row;
        }
        
        return $affected_row;
    }
    public function get_department($id)
    {
        $this->db->select("*");
        $this->db->from("department_master");
        if($id > 0){
          $this->db->where("company_id", $id);
        }
    
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_designation($department_ids = [])
    {
        $this->db->select("dm.*");
        $this->db->from("designation_master as dm");
        $this->db->where_in("dm.department_id", $department_ids);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_component($company_id = '',$year = '')
    {
        $this->db->select("sc.*");
        $this->db->from("salary_component as sc");
        $this->db->where("sc.company_id", $company_id);
        $this->db->where("sc.year", $year);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_designation_data($department_id = [])
    {
        $this->db->select("dm.*");
        $this->db->from("designation_master as dm");
        $this->db->where("dm.department_id", $department_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_component_data($ids = '')
    {
        $this->db->select("sc.*");
        $this->db->from("salary_component as sc");
        $this->db->where_in("sc.salary_component_id", $ids);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function insert_salary_structure($insert_arr = []){
        $this->db->insert("designation_salary_structure", $insert_arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function get_salary_structure($designation_id = '',$company_id = ''){
        $this->db->select("ds.*");
        $this->db->from("designation_salary_structure as ds");
        $this->db->where("ds.designation_id", $designation_id);
        $this->db->where("ds.company_id", $company_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_salary_structure_details($salary_structure_id = ''){
        $this->db->select("ds.*");
        $this->db->from("designation_salary_structure as ds");
        $this->db->where("ds.designation_salary_structure_id", $salary_structure_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function get_salary_structure_component_details($salary_structure_id = ''){
        $this->db->select("ds.*");
        $this->db->from("designation_salary_structure_component as ds");
        $this->db->where("ds.designation_salary_structure_id", $salary_structure_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function update_salary_structure($updated_date_arr = [],$salary_structure_id = ''){
        $this->db->where("designation_salary_structure_id", $salary_structure_id);
        $this->db->update("designation_salary_structure",$updated_date_arr);
        $affected_row = $this->db->affected_rows();
        $affected_row = $affected_row == 0 ? 1 : $affected_row;
        return $affected_row;
    }

    public function get_designation_salary_structure_list($company_id = ''){
        $this->db->select("dss.*,CONCAT(d.departmen_name,' (',d.department_code,')') as department,CONCAT(ds.designation_name,' (',ds.grads,')') as designation,CONCAT(ad.first_name,' ',ad.last_name) as added_by_name,CONCAT(ud.first_name,' ',ud.last_name) as updated_by_name");
        $this->db->from("designation_salary_structure as dss");
        $this->db->join("department_master as d","d.department_id = dss.department_id","left");
        $this->db->join("designation_master as ds","ds.id = dss.designation_id","left");
        $this->db->join("employee_master as ad","ad.employee_id = dss.added_by","left");
        $this->db->join("employee_master as ud","ud.employee_id = dss.updated_by","left");
        $this->db->where("dss.company_id", $company_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function insert_salary_structure_component($component_arr = []){
        if(is_valid_array($component_arr)){
         $this->db->insert_batch('designation_salary_structure_component', $component_arr);
        }
    }
    public function delete_salary_structure_component($designation_salary_structure_id = '  '){
        $this->db->where_in("designation_salary_structure_id", $designation_salary_structure_id);
        $result = $this->db->delete("designation_salary_structure_component");
        return $result;
    }
    public function update_salary_structure_component($component_arr = []){

        if(is_valid_array($component_arr)){
            $this->db->update_batch('designation_salary_structure_component',$component_arr, 'designation_salary_structure_component_id'); 
        }
    }
    public function get_employee_salary_structure($employee_id = ''){
        $this->db->select("es.*,CONCAT(em.first_name,' ',em.last_name) as employee_name,CONCAT(ad.first_name,' ',ad.last_name) as added_by_name,CONCAT(ud.first_name,' ',ud.last_name) as updated_by_name");
        $this->db->from("employee_extended_salary_structure as es");
        $this->db->join("employee_master as em","em.employee_id = es.employee_id","left");
        $this->db->join("employee_master as ad","ad.employee_id = es.added_by","left");
        $this->db->join("employee_master as ud","ud.employee_id = es.updated_by","left");
        $this->db->where("es.employee_id", $employee_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_employee_details($employee_id = ''){
        $this->db->select("em.*,CONCAT(em.first_name,' ',em.last_name) as employee_name");
        $this->db->from("employee_master as em");
        $this->db->where("em.employee_id", $employee_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function get_designation_salary_structure($designation_id = '',$department_id = '',$company_id = ''){
        $this->db->select("dss.*,CONCAT(d.departmen_name,' (',d.department_code,')') as department,,CONCAT(ds.designation_name,' (',ds.grads,')') as designation,c.company_name as company_name,c.company_code as company_code");
        $this->db->from("designation_salary_structure as dss");
        $this->db->join("department_master as d","d.department_id = dss.department_id","left");
        $this->db->join("designation_master as ds","ds.id = dss.designation_id","left");
        $this->db->join("companies as c","c.company_id = dss.company_id","left");
        $this->db->where("dss.designation_id", $designation_id);
        $this->db->where("dss.department_id", $department_id);
        $this->db->where("dss.company_id", $company_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }

    public function get_extend_employee_salary_structure($employee_id = ''){
        $this->db->select("ess.*");
        $this->db->from("employee_extended_salary_structure as ess");
        $this->db->where("ess.employee_id", $employee_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return count($ret_data);
    }

    public function insert_extend_employee_salary_structure($insert_arr = []){
        $this->db->insert(" employee_extended_salary_structure", $insert_arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function insert_extend_employee_salary_structure_component($component_arr = []){
        if(is_valid_array($component_arr)){
         $this->db->insert_batch('employee_extended_salary_structure_component', $component_arr);
        }
    }
    public function check_existing_employee_salary_structure_data($effective_date_from = '',$effective_date_to = '',$employee_salary_structure_id = ''){
        $this->db->select("es.*");
        $this->db->from("employee_extended_salary_structure as es");
        if($employee_salary_structure_id > 0){
            $this->db->where("es.employee_extended_salary_structure_id !=", $employee_salary_structure_id);
        }
        $this->db->where("es.effective_from", $effective_date_from);
        $this->db->where("es.effective_to", $effective_date_to);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return count($ret_data);
    }

    public function get_employee_salary_structure_data($employee_salary_structure_id = ''){
        $this->db->select("es.*,CONCAT(d.departmen_name,' (',d.department_code,')') as department,,CONCAT(ds.designation_name,' (',ds.grads,')') as designation,c.company_name as company_name,c.company_id as company_id,d.department_id as department_id,ds.id as designation_id");
        $this->db->from("employee_extended_salary_structure as es");
        $this->db->join("employee_master as em","em.employee_id = es.employee_id","left");
        $this->db->join("department_master as d","d.department_id = em.department","left");
        $this->db->join("designation_master as ds","ds.id = em.designation","left");
        $this->db->join("companies as c","c.company_id = em.company_id","left");
        $this->db->where("es.employee_extended_salary_structure_id", $employee_salary_structure_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function get_employee_salary_structure_component($employee_salary_structure_id = ''){
        $this->db->select("ds.*");
        $this->db->from("employee_extended_salary_structure_component as ds");
        $this->db->where("ds.employee_extended_salary_structure_id", $employee_salary_structure_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function delete_employee_salary_structure_component($employee_salary_structure_id = '  '){
        $this->db->where_in("employee_extended_salary_structure_id", $employee_salary_structure_id);
        $result = $this->db->delete("employee_extended_salary_structure_component");
        return $result;
    }
    public function update_employee_salary_structure($updated_date_arr = [],$employee_salary_structure_id = ''){
        $this->db->where("employee_extended_salary_structure_id", $employee_salary_structure_id);
        $this->db->update("employee_extended_salary_structure",$updated_date_arr);
        $affected_row = $this->db->affected_rows();
        $affected_row = $affected_row == 0 ? 1 : $affected_row;
        return $affected_row;
    }

}

?>
