<?php
class Company_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_country()
    {
        $this->db->select("*");
        $result_obj = $this->db->get("tbl_country_master");
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_state()
    {
        $this->db->select("*");
        $result_obj = $this->db->get("state_master");
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }

    public function getCompanies($id = 0){
        $this->db->select("*");
        $result_obj = $this->db->get("companies");
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }

    public function getCompanydetails($id = 0){
        $this->db->select("c.*,tc.country_code");
        $this->db->from('companies c');
        $this->db->join('tbl_country_master tc','c.country = tc.id');
        $this->db->where('c.company_id',$id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    
    }

    public function getBankData($id){
        $this->db->select('*');
        $this->db->from('bank_master');
        $this->db->where('entity_type','Company');
        $this->db->where('entity_id',$id);
        $query = $this->db->get();
        $data = is_object($query) ? $query->result_array() : [];
        return $data;
    }

    public function updateCompanyData($ret_arr = []){
        $company_data = $ret_arr['company_insert_arr'];
        $bank_insert = $ret_arr['bank_insert_arr'];
        $company_id = $ret_arr['company_id'];
        $bank_update = $ret_arr['bank_update_arr'];
        $delete_ids = $ret_arr['delete_ids'];

        if(is_valid_array($delete_ids)){
            $this->db->where_in('id', $delete_ids);
            $this->db->delete('bank_master');
        }

        if(is_valid_array($company_data)){
            $this->db->where('company_id', $company_id);
            $this->db->update('companies', $company_data);
        }
        if(is_valid_array($bank_insert)){
            $this->db->insert_batch('bank_master', $bank_insert);

        }
        if(is_valid_array($bank_update)){
            $this->db->update_batch('bank_master',$bank_update, 'id'); 
        }
    }

    public function getCompanydetailsView($id = 0){
        $this->db->select("c.*,tc.country_name,sm.vState");
        $this->db->from('companies c');
        $this->db->join('tbl_country_master tc','c.country = tc.id');
        $this->db->join('state_master sm','c.state = sm.iStateId');
        $this->db->where('c.company_id',$id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    
    }

    public function bankIds($company_id = 0){
        if($company_id == 0 || $company_id == ''){
            return [];
        }
        $ids = [];
        $this->db->select('id');
        $this->db->from('bank_master');
        $this->db->where('entity_type','Company');
        $this->db->where('entity_id',$company_id);
        $query = $this->db->get();
        $data = is_object($query) ? $query->result_array() : [];
        if(is_valid_array($data)){
            $ids = array_column($data,'id');
        }
        return $ids;
    }

}

