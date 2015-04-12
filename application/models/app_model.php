<?php 

class App_model extends CI_Model{

	function auth($user,$pass){
		$check = $this->db->query("select * from user_admin where user='$user' and pass='$pass'");
		return $check;
	}	
	
	function get_profile(){
		$query = $this->db->query("select * from tbl_profile")->row();
		return $query;
	}
	
		
}
