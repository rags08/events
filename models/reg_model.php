<?php
class reg_model extends CI_Model {
    function saverecords($data){
        $this->db->insert('tbl_reg',$data);
        $this->db->last_query(); die;
        return true;
    }
    function getCity(){

      $response = array();
      
      // Select record
      $this->db->select('*');
      $q = $this->db->get('tblstatcity');
      $response = $q->result_array();

      return $response;
  }
  function getdept(){

    $response = array();
    
    // Select record
    $this->db->select('*');
    $q = $this->db->get('tblstatcity');
    $response = $q->result_array();

    return $response;
}

function display_records()
  {
    $this->db->select('*');
    
    
    $query=$this->db->get("tbl_challenger");
    return $query->result();
  }
  function deleterecords($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("tbl_challenger");
    return true;
  }
}