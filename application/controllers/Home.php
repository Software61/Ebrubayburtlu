<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
	}

	public function index()
	{
		$data['title']='Ebru Bayburtlu';
		$data['sliders']=$this->Project_Model->GetSlider();
		$data['projects']=$this->Project_Model->GetAllProjects();
		$this->load->view('header',$data);
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
}
