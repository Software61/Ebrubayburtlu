<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
		$this->load->model('Site_Model');
	}

	public function index()
	{
		$siteData=$this->Site_Model->GetSiteData();
		$data['sliders']=$this->Project_Model->GetSlider();
		$data['projects']=$this->Project_Model->GetVitrinProjects();
		$this->load->view('header',$siteData);
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
}
