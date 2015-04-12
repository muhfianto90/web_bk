<?php 

class App_model extends CI_Model{

	function auth($user,$pass){
		$check = $this->db->query("select * from tbl_useradmin where username='$user' and password='$pass'");
		return $check;
	}	
	
	function get_profile(){
		$query = $this->db->query("select * from tbl_profile")->row();
		return $query;
	}
	
		
}
