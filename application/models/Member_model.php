<?php
  class Member_model extends CI_Model {
  
    public function __construct()
    {
      // Memanggil konstruktor CI_Model
      parent::__construct();
    }
  
    public function get_data_member($id='')
    {
      $strCriteria  = "";
      if($id != ''){
        $strCriteria  .= " AND id = ".$id;
      }
      $strQuery = "SELECT * FROM an_member WHERE 1=1 AND type <> 1 AND status = 1 ".$strCriteria;
      $query    = $this->db->query($strQuery);
      return $query->result();
    }
  
  }
?>