
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
	function GetAllProjectTypes(){
		return $this->db->select('*')
				->from("projecttype")
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
	function GetProjectAsID($id){
		return $this->db->select('*')
				->from("projects")
				->where("ProjectId",$id)
				->get()
				->result()[0];
	}

	function GetProjectLeft($id){
		return $this->db->select('*')
				->from("projects")
				->where("ProjectId<".$id)
				->order_by("ProjectId", "desc")
				->get()
				->result();

	}
	function GetProjectRight($id){
		return $this->db->select('*')
				->from("projects")
				->where("ProjectId>".$id)
				->order_by("ProjectId", "asc")
				->get()
				->result();

	}
	function RemoveSlider($id){
		return $this->db->delete('slider')
						->where('sliderId',$id);
	}
	function InsertSlider($sliderData){
		return $this->db->insert('slider',$sliderData);
	}
	function InsertProject($projectData){
		return $this->db->insert('slider',$projectData);
	}
	function RemoveProject($id){
		return $this->db->delete('projects')
						->where('ProjectId',$id);
	}
	function UpdateProject($projectData){
		return $this->db->insert('projects',$projectData)
						->where('ProjectId',$projectData->ProjectId);
	}
}

?>