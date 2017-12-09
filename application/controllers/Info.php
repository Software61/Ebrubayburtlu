<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Label_Model');
		$this->load->model('Project_Model');
	}

	public function index()
	{
		$data['title']='Ebru Bayburtlu';
		$data['info']=$this->Label_Model->GetValue('info');
		$data['infoheader']=$this->Label_Model->GetValue('infoheader');
		$data['contactheader']=$this->Label_Model->GetValue('contactheader');
		$data['email']=$this->Label_Model->GetValue('email');
		$data['phone']=$this->Label_Model->GetValue('phone');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('header',$data);
		$this->load->view('info',$data);
		$this->load->view('footer');
	}
}
