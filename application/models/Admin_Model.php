
<?php

class Admin_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function Login($username,$password){
		return $this->db->select('*')
				->from("admin")
				->where("username",$username)
				->where("password",$password)
				->get()
				->result();
	}
	function UpdateValue($name,$value){
		return $this->db->update('label',array('value'=>$value))
					->where("name",$name);
	}
	

}

?>