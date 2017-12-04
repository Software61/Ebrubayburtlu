<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projeler extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
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
		$sendtype=1;
		if($type=="Film")$sendtype=1;
		else if($type=="Television")$sendtype=2;
		else if($type=="Short")$sendtype=3;
		else if($type=="InProduction")$sendtype=4;

		$data['title']='Ebru Bayburtlu';
		$data['projects']=$this->Project_Model->GetProjectAsType($sendtype);
		$this->load->view('header',$data);
		$this->load->view('projects',$data);
		$this->load->view('footer');
	}

}
