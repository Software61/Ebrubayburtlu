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
		$data['mail']=$this->Label_Model->GetValue('mail');
		$data['phone']=$this->Label_Model->GetValue('phone');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('header',$data);
		$this->load->view('info',$data);
		$this->load->view('footer');
	}
}
