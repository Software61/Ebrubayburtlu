<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
		$this->load->model('Label_Model');
	}

	public function index()
	{
		$data['title']='Ebru Bayburtlu';
		$data['sliders']=$this->Project_Model->GetSlider();
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$data['projects']=$this->Project_Model->GetAllProjects();
		$this->load->view('header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('footer');
	}
	public function DeleteSliderImage($imageId){
		$this->Project_Model->RemoveSlider($imageId);
		redirect(base_url('Admin'));
	}
	public function InsertSlider(){
		$slider["Header"]=$this->input->post('text');
		$slider["Image"]=$this->input->post('image');
		$this->Project_Model->InsertSlider($slider);
		redirect(base_url('Admin'));
	}
	public function Projects(){
		$data['title']='Ebru Bayburtlu';
		$data['projects']=$this->Project_Model->GetAllProjects();
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('header',$data);
		$this->load->view('admin/projects',$data);
		$this->load->view('footer');
	}
	public function AddProject(){
		$data['title']='Ebru Bayburtlu';
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('header',$data);
		$this->load->view('admin/addproject');
		$this->load->view('footer');
	}
	public function InsertProject(){
		$slider["ProjectTypeId"]=$this->input->post('projecttype');
		$slider["Header"]=$this->input->post('header');
		$slider["Director"]=$this->input->post('director');
		$slider["Vitrin"]=$this->input->post('vitrin');
		$slider["With"]=$this->input->post('with');
		$slider["Cover"]=$this->input->post('cover');
		$slider["VideoPath"]=$this->input->post('videopath');
		$this->Project_Model->InsertProject($slider);
		redirect(base_url('Admin'));
	}
	public function Info(){
		$data['title']='Ebru Bayburtlu';
		$data['info']=$this->Label_Model->GetValue('info');
		$data['mail']=$this->Label_Model->GetValue('mail');
		$data['phone']=$this->Label_Model->GetValue('phone');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('header',$data);
		$this->load->view('admin/info',$data);
		$this->load->view('footer');
	}
	public function UpdateInfo(){
		$data["InfoHeader"]=$this->input->post('infoheader');
		$data["Info"]=$this->input->post('info');
		$data["ContactHeader"]=$this->input->post('contactheader');
		$data["Mail"]=$this->input->post('mail');
		$data["Phone"]=$this->input->post('phone');
		$this->Label_Model->Update('InfoHeader',$data["InfoHeader"]);
		$this->Label_Model->Update('Info',$data["Info"]);
		$this->Label_Model->Update('ContactHeader',$data["ContactHeader"]);
		$this->Label_Model->Update('Mail',$data["Mail"]);
		$this->Label_Model->Update('Phone',$data["Phone"]);

		redirect(base_url('Info'));
	}

}
