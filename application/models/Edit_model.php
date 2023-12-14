<?php
class Edit_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
 //////////////////////////Edit/////////////////////   
 function edit($data,$id,$field_id,$table){
	  $this->db->where($field_id, $id);
       $this->db->update($table, $data);  
       return true;
    } 
/////////End


 function edit_multi($data,$id,$field_id,$id1,$field_id1,$table){
	  $this->db->where($field_id, $id);
	   $this->db->where($field_id1, $id1);
       $this->db->update($table, $data);  
    } 

}

?>
