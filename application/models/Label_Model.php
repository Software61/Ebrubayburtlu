
<?php

class Label_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function GetValue($key){
		return $this->db->select('*')
				->from("label")
				->where("name",$key)
				->get()
				->result()[0]->value;
	}
	function GetSocialValue(){
		return $this->db->select('*')
				->from("label")
				->where("type",'social')
				->get()
				->result();
	}
	function UpdateValue($name,$value){
		return $this->db->where("name",$name)
						->update('label',array('value'=>$value));
	}
	

}

?>