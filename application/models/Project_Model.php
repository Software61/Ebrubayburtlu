
<?php

class Project_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function GetAllProjects(){
		return $this->db->select('*')
				->from("projects")
				->get()
				->result();
		
	}

}

?>