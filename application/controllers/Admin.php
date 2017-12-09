<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
		$this->load->model('Label_Model');
		$this->load->model('Admin_Model');
		$this->load->helper(array('form', 'url')); 
		$this->load->helper("yardimci");
	}
	public function Login(){
		$data['title']='Ebru Bayburtlu';
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$data['projects']=$this->Project_Model->GetAllProjects();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/login',$data);
		$this->load->view('footer');
	}
	public function DoLogin(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$result=$this->Admin_Model->Login($username,md5($password));
		if(sizeof($result)>0){
			$this->session->login=1;
			redirect(base_url('Admin'));
		}else{
			$this->session->login=0;
			redirect(base_url('Admin/Login'));
		}

	}
	public function index()
	{
		if($this->session->login==0){
			redirect(base_url('Admin/Login'));
		}
		$data['title']='Ebru Bayburtlu';
		$data['sliders']=$this->Project_Model->GetSlider();
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$data['projects']=$this->Project_Model->GetAllProjects();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('footer');
	}
	public function DeleteSliderImage($imageId){
		$this->Project_Model->RemoveSlider($imageId);
		return true;
	}
	public function DeleteProject($imageId){
		$this->Project_Model->RemoveProject($imageId);
		return true;
	}
	public function InsertSlider(){
		$resimAdi=generate_uri(uniqid()).".jpg";
		  		$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000000000000;
                $config['max_width']            = 9999;
                $config['max_height']           = 9999;
                $config['file_name']			=$resimAdi;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image_uploads'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        printf(json_encode($error));
                }
                else
                {

                }
		$slider["Header"]=$this->input->post('header');
		$slider["Image"]=$resimAdi;
		$this->Project_Model->InsertSlider($slider);
		redirect(base_url('Admin'));
	}
	public function UpdateSlider(){
 
			$resimAdi=generate_uri(uniqid()).".jpg";
			  		$config['upload_path']          = './assets/uploads/';
	                $config['allowed_types']        = 'gif|jpg|png';
	                $config['max_size']             = 10000000000000000;
	                $config['max_width']            = 9999;
	                $config['max_height']           = 9999;
	                $config['file_name']			=$resimAdi;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('image_uploads'))
	                {
	                        $error = array('error' => $this->upload->display_errors());

	                        printf(json_encode($error));
	                }
	                else
	                {

	                }
        $slider["Image"]=$resimAdi;

        $sliderId=$this->input->post('sliderId');
		$slider["Header"]=$this->input->post('header');
		$this->Project_Model->UpdateSlider($slider,$sliderId);
		redirect(base_url('Admin'));
	}
	public function Projects(){
		$data['title']='Ebru Bayburtlu';
		$data['projects']=$this->Project_Model->GetAllProjects();
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/projects',$data);
		$this->load->view('footer');
	}
	public function AddProject(){
		$data['title']='Ebru Bayburtlu';
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/addproject');
		$this->load->view('footer');
	}
	public function InsertProject(){
		$resimAdi=generate_uri(uniqid()).".jpg";
		  		$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000000000000;
                $config['max_width']            = 9999;
                $config['max_height']           = 9999;
                $config['file_name']			=$resimAdi;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image_uploads'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        printf(json_encode($error));
                }
                else
                {

                }
		$project["ProjectTypeId"]=$this->input->post('projecttype');
		$project["Header"]=$this->input->post('header');
		$project["Director"]=$this->input->post('director');
		$project["Vitrin"]=$this->input->post('vitrin');
		$project["With"]=$this->input->post('with');
		$project["Cover"]=$resimAdi;
		$project["VideoPath"]=$this->input->post('videopath');
		$this->Project_Model->InsertProject($project);
		redirect(base_url('Admin/Projects'));
	}
	public function EditProject($id){
		$data['title']='Ebru Bayburtlu';
		$data['project']=$this->Project_Model->GetProjectAsID($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/addproject',$data);
		$this->load->view('footer');
	}
	public function UpdateProject(){
		if($FILES){
			$resimAdi=generate_uri(uniqid()).".jpg";
			  		$config['upload_path']          = './assets/uploads/';
	                $config['allowed_types']        = 'gif|jpg|png';
	                $config['max_size']             = 10000000000000000;
	                $config['max_width']            = 9999;
	                $config['max_height']           = 9999;
	                $config['file_name']			=$resimAdi;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('image_uploads'))
	                {
	                        $error = array('error' => $this->upload->display_errors());

	                        printf(json_encode($error));
	                }
	                else
	                {

	                }
	                $project["Cover"]=$resimAdi;
         }
        $project["ProjectId"]=$this->input->post('projectId');
		$project["ProjectTypeId"]=$this->input->post('projecttype');
		$project["Header"]=$this->input->post('header');
		$project["Director"]=$this->input->post('director');
		$project["Vitrin"]=$this->input->post('vitrin');
		$project["With"]=$this->input->post('with');
		
		$project["VideoPath"]=$this->input->post('videopath');

		$data['title']='Ebru Bayburtlu';
		$this->Project_Model->UpdateProject($project);
		redirect(base_url('Admin/Projects'));
	}

	public function Info(){
		$data['title']='Ebru Bayburtlu';
		$data['infoheader']=$this->Label_Model->GetValue('infoheader');
		$data['info']=$this->Label_Model->GetValue('info');
		$data['contactheader']=$this->Label_Model->GetValue('contactheader');
		$data['email']=$this->Label_Model->GetValue('email');
		$data['phone']=$this->Label_Model->GetValue('phone');
		$data['profile']=$this->Label_Model->GetValue('profile');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/info',$data);
		$this->load->view('footer');
	}
	public function UpdateInfo(){
		if($FILES){
			$resimAdi=generate_uri(uniqid()).".jpg";
			  		$config['upload_path']          = './assets/uploads/';
	                $config['allowed_types']        = 'gif|jpg|png';
	                $config['max_size']             = 10000000000000000;
	                $config['max_width']            = 9999;
	                $config['max_height']           = 9999;
	                $config['file_name']			=$resimAdi;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('image_uploads'))
	                {
	                        $error = array('error' => $this->upload->display_errors());

	                        printf(json_encode($error));
	                }
	                else
	                {

	                }
	                $data["Profile"]=$resimAdi;
	                $this->Label_Model->UpdateValue('profile',$data["Profile"]);
         }

		$data["InfoHeader"]=$this->input->post('infoheader');
		$data["Info"]=$this->input->post('info');
		$data["ContactHeader"]=$this->input->post('contactheader');
		$data["Mail"]=$this->input->post('email');
		$data["Phone"]=$this->input->post('phone');
		$this->Label_Model->UpdateValue('infoheader',$data["InfoHeader"]);
		$this->Label_Model->UpdateValue('info',$data["Info"]);
		$this->Label_Model->UpdateValue('contactheader',$data["ContactHeader"]);
		$this->Label_Model->UpdateValue('email',$data["Mail"]);
		$this->Label_Model->UpdateValue('phone',$data["Phone"]);

		redirect(base_url('Info'));
	}
	public function SocialEdit(){
		$data['title']='Ebru Bayburtlu';
		$data['imdb']=$this->Label_Model->GetValue('imdb');
		$data['vimeo']=$this->Label_Model->GetValue('vimeo');
		$data['facebook']=$this->Label_Model->GetValue('facebook');
		$data['twitter']=$this->Label_Model->GetValue('twitter');
		$data['instagram']=$this->Label_Model->GetValue('instagram');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/socialedit',$data);
		$this->load->view('footer');
	}
	public function SocialUpdate(){
		$social["imdb"]=$this->input->post("imdb");
		$social["vimeo"]=$this->input->post("vimeo");
		$social["facebook"]=$this->input->post("facebook");
		$social["twitter"]=$this->input->post("twitter");
		$social["instagram"]=$this->input->post("instagram");
		$this->Label_Model->UpdateValue('imdb',$social["imdb"]);
		$this->Label_Model->UpdateValue('vimeo',$social["vimeo"]);
		$this->Label_Model->UpdateValue('facebook',$social["facebook"]);
		$this->Label_Model->UpdateValue('twitter',$social["twitter"]);
		$this->Label_Model->UpdateValue('instagram',$social["instagram"]);
		redirect(base_url('Admin/SocialEdit'));
	}
	public function UpdateAdmin(){
		$data['title']='Ebru Bayburtlu';

		$this->load->view('admin/header',$data);
		$this->load->view('admin/socialedit',$data);
		$this->load->view('footer');
	}

}
