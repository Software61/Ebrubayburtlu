
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
	function UpdateValue($name,$value){
		return $this->db->update('label',array('value'=>$value))
					->where("name",$name);
	}

}

?>