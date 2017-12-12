
<?php

class ProjectType_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function GetProjectTypeId($name){
		return $this->db->select('*')
				->from("projecttype")
				->where("Name",$name)
				->get()
				->result();
	}
	function InsertProjectType($name){
		return $this->db->insert('projecttype',$name);
	}

	function UpdateProjectType($name,$categoryId){
		return $this->db->where('ProjectTypeId',$categoryId)
						->update('projecttype',$name);
	}
	function DeleteProjectType($id){
		return $this->db->delete('projecttype',array("ProjectTypeId"=>$id));
	}
}

?>