<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projeler extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
		$this->load->model('ProjectType_Model');
	}

	public function index()
	{
		$data['title']='Ebru Bayburtlu';
		$data['projects']=$this->Project_Model->GetAllProjects();
		$this->load->view('header',$data);
		$this->load->view('projects',$data);
		$this->load->view('footer');
	}
	public function Type($type)
	{
		$sendtype=$this->ProjectType_Model->GetProjectTypeId($type);
		$data['title']='Ebru Bayburtlu';
		$data['projects']=$this->Project_Model->GetProjectAsType($sendtype);
		$this->load->view('header',$data);
		$this->load->view('projects',$data);
		$this->load->view('footer');
	}
	public function Proje($id)
	{
		$data['project']=$this->Project_Model->GetProjectAsID($id);
		$data['title']='Ebru Bayburtlu';
		
		$this->load->view('header',$data);
		$this->load->view('project_detail',$data);
		$this->load->view('footer');
	}


}
