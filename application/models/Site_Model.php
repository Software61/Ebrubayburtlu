
<?php

class Site_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Label_Model');
	}
	function GetSiteData(){
		$data['title']=$this->Label_Model->GetValue('site_name');
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['social']=$this->Label_Model->GetSocialValue();
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		return $data;
	}
}

?>