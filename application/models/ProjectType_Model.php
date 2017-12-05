
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
				->result()[0]->ProjectTypeId;
	}
}

?>