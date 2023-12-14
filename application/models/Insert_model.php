<?php

class Insert_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
// function insert_data($data,$table){
//       $this->db->insert($table, $data);  
//    } 


 function insert_data($data,$table){
       $this->db->insert($table, $data);
	   return $this->db->insert_id();  
    } 


}

?>
