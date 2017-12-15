<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actors extends CI_Controller {

	function __construct(){
		parent::__construct();
			$this->load->model('Project_Model');
		$this->load->model('Site_Model');
		$this->load->model('Actor_Model');
	}

	public function index()
	{
		$siteData=$this->Site_Model->GetSiteData();
		$data['actors']=$this->Actor_Model->GetAllActors();
		$this->load->view('header',$siteData);
		$this->load->view('actors',$data);
		$this->load->view('footer');
	}
	public function ActorDetail($id)
	{
		$data['actor']=$this->Actor_Model->GetActorAsID($id);
		$siteData=$this->Site_Model->GetSiteData();
		$this->load->view('header',$siteData);
		$this->load->view('actor_detail',$data);
		$this->load->view('footer');
		
	}
}