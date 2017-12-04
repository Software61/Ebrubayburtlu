
<?php

class Project_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function GetSlider(){
		return $this->db->select('*')
				->from("slider")
				->get()
				->result();
	}

	function GetVitrinProjects(){
		return $this->db->select('*')
				->from("projects")
				->where("vitrin","1")
				->limit('6')
				->get()
				->result();
	}
	function GetAllProjects(){
		return $this->db->select('*')
				->from("projects")
				->get()
				->result();
	}
	function GetProjectAsType($type){
		return $this->db->select('*')
				->from("projects")
				->where("projecttypeid",$type)
				->get()
				->result();
	}

}

?>