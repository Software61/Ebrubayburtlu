<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
		$this->load->model('ProjectType_Model');
		$this->load->model('Site_Model');
	}

	public function index()
	{
		$siteData=$this->Site_Model->GetSiteData();
		$data['projects']=$this->Project_Model->GetAllProjects();
		$this->load->view('header',$siteData);
		$this->load->view('projects',$data);
		$this->load->view('footer');
	}
	public function Type($type)
	{
		
		$sendtypes=$this->ProjectType_Model->GetProjectTypeId($type);
		$siteData=$this->Site_Model->GetSiteData();
		$this->load->view('header',$siteData);
		if(sizeof($sendtypes)>0){
			$sendtype=$sendtypes[0]->ProjectTypeId;
			$data['projects']=$this->Project_Model->GetProjectAsType($sendtype);
			$this->load->view('projects',$data);
		}
		$this->load->view('footer');
	}
	public function Project($id)
	{
		$data['project']=$this->Project_Model->GetProjectAsID($id);
		$data['left']=$this->Project_Model->GetProjectLeft($id);
		$data['right']=$this->Project_Model->GetProjectRight($id);
		$data['same']=$this->Project_Model->GetProjectAsType($data['project']->ProjectTypeId);
		$siteData=$this->Site_Model->GetSiteData();

		$this->load->view('header',$siteData);
		$this->load->view('project_detail',$data);
		$this->load->view('footer');
	}


}
