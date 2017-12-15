<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Project_Model');
		$this->load->model('ProjectType_Model');
		$this->load->model('Label_Model');
		$this->load->model('Admin_Model');
		$this->load->model('Actor_Model');
		$this->load->helper(array('form', 'url')); 
		$this->load->helper("yardimci");

		if($this->session->login==0 && base_url(uri_string())!=base_url('Admin/Login') && base_url(uri_string())!=base_url('Admin/DoLogin')){
			$data["title"]=$this->Label_Model->GetValue('site_name');
			redirect(base_url('Admin/Login'));
		}
	}
	public function Login(){
		$data["title"]=$this->Label_Model->GetValue('site_name');
		$data['logo']=$this->Label_Model->GetValue('logo');
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
			$data['logo']=$this->Label_Model->GetValue('logo');
			$data["error"]="Kullanıcı adı veya şifre yanlış";
			$data["title"]=$this->Label_Model->GetValue('site_name');
			$this->load->view('admin/header',$data);
			$this->load->view('admin/login',$data);
			$this->load->view('footer');
		}

	}
	public function index()
	{
		if($this->session->login==0){
			redirect(base_url('Admin/Login'));
		}
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data["title"]=$this->Label_Model->GetValue('site_name');
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
	                	 $slider["Image"]=$resimAdi;
	                }
       

        $sliderId=$this->input->post('sliderId');
		$slider["Header"]=$this->input->post('header');
		$this->Project_Model->UpdateSlider($slider,$sliderId);
		redirect(base_url('Admin'));
	}
	public function Projects(){
		$data["title"]=$this->Label_Model->GetValue('site_name');
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['projects']=$this->Project_Model->GetAllProjects();
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/projects',$data);
		$this->load->view('footer');
	}
	public function AddProject(){
		$data["title"]=$this->Label_Model->GetValue('site_name');
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/addproject');
		$this->load->view('footer');
	}
	public function InsertProject(){
		$resimAdi=generate_uri(uniqid()).".jpg";
		  		$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = '*';
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
         unset($this->upload);
        $projectType=$this->input->post('video-upload');
        if($projectType==0){
        	$project["VideoPath"]=$this->input->post('video-url');
        }else {
        	$uploaddir = './assets/videos/';
        	$ext = pathinfo($_FILES['videofile']['name'], PATHINFO_EXTENSION);
        	$videoName=generate_uri(uniqid()).'.'.$ext;
        	$uploadfile = $uploaddir .$videoName;
        	if (move_uploaded_file($_FILES['videofile']['tmp_name'], $uploadfile)) {
				 $project["VideoPath"]=$videoName;
			} else {
					
			}
       		 	
        }
        $project["ExternalLink"]=$projectType;
		$project["ProjectTypeId"]=$this->input->post('projecttype');
		$project["Header"]=$this->input->post('header');
		$project["Director"]=$this->input->post('director');
		$project["With"]=$this->input->post('with');
		$project["Vitrin"]=$this->input->post('vitrin');
		$project["Cover"]=$resimAdi;
		
		$this->Project_Model->InsertProject($project);
		redirect(base_url('Admin/Projects'));
	}
	public function EditProject($id){
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data["title"]=$this->Label_Model->GetValue('site_name');
			$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$project=$this->Project_Model->GetProjectAsID($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/addproject',$project,$data);
		$this->load->view('footer');
	}
	public function UpdateProject(){
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
	                        
	                }
	                else
	                {
	                	 $project["Cover"]=$resimAdi;	
	                }
         
        $projectId=$this->input->post('projectId');
		$project["ProjectTypeId"]=$this->input->post('projecttype');
		$project["Header"]=$this->input->post('header');
		$project["Director"]=$this->input->post('director');
		$project["Vitrin"]=$this->input->post('vitrin');
		$project["With"]=$this->input->post('with');
		
		$project["VideoPath"]=$this->input->post('videopath');
		
		$this->Project_Model->UpdateProject($project,$projectId);
		redirect(base_url('Admin/Projects'));
	}
	public function EditProjectType(){
		$data["title"]=$this->Label_Model->GetValue('site_name');
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/editprojecttype');
		$this->load->view('footer');
	}
	public function InsertProjectType(){
		$projectType["Name"]=$this->input->post('categoryName');
		$this->ProjectType_Model->InsertProjectType($projectType);
		redirect(base_url('Admin/EditProjectType'));
	}
	public function UpdateProjectType(){
		$categoryId=$this->input->post('categoryId');
		$projectType["Name"]=$this->input->post('categoryName');
		$this->ProjectType_Model->UpdateProjectType($projectType,$categoryId);
		redirect(base_url('Admin/EditProjectType'));
	}
	public function DeleteProjectType($ProjectTypeId){
		$this->ProjectType_Model->DeleteProjectType($ProjectTypeId);
		redirect(base_url('Admin/EditProjectType'));
	}
	public function Info(){
		$data["title"]=$this->Label_Model->GetValue('site_name');
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['infoheader']=$this->Label_Model->GetValue('infoheader');
		$data['info']=$this->Label_Model->GetValue('info');
		$data['contactheader']=$this->Label_Model->GetValue('contactheader');
		$data['email']=$this->Label_Model->GetValue('email');
		$data['phone']=$this->Label_Model->GetValue('phone');
		$data['profile']=$this->Label_Model->GetValue('logo');
		$data['projecttypes']=$this->Project_Model->GetAllProjectTypes();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/info',$data);
		$this->load->view('footer');
	}
	public function UpdateInfo(){
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
	                        //$error = array('error' => $this->upload->display_errors());

	                       // printf(json_encode($error));
	                }
	                else
	                {
	               	 	$this->Label_Model->UpdateValue('logo',$resimAdi);	
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

		redirect(base_url('Admin/Info'));
	}
	public function SocialEdit(){
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data["title"]=$this->Label_Model->GetValue('site_name');
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
		$social['logo']=$this->Label_Model->GetValue('logo');
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
		$data['title']=$data["title"]=$this->Label_Model->GetValue('site_name');
		$account["Username"]=$this->input->post('username');
		if($this->input->post('password')!=$this->input->post('passwordagain')){
			$data['response']='<label style="color:red;"><b>Şifreler aynı değil.</b></label>';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/settings',$data);
			$this->load->view('footer');
		}else{
			$account["Password"]= md5($this->input->post('password'));
			$this->Admin_Model->UpdateAccount($account)	;
			$data['response']='<label style="color:green;"><b>Hesap bilgileri güncellendi.</b></label>';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/settings',$data);
			$this->load->view('footer');		
		}
		
	}
	public function Settings(){
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['title']=$data["title"]=$this->Label_Model->GetValue('site_name');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/settings',$data);
		$this->load->view('footer');
	}
	public function Logout(){
		$this->session->login=0;
		redirect(base_url('Admin/Login'));
	}


	public function Actors(){
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['title']=$data["title"]=$this->Label_Model->GetValue('site_name');
		$dataActor['actors']=$this->Actor_Model->GetAllActors();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/actor',$dataActor);
		$this->load->view('footer');
	}

	public function DeleteActor($id){
		$this->Actor_Model->RemoveActor($id);
		return true;
	}

	public function AddActor(){
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['title']=$data["title"]=$this->Label_Model->GetValue('site_name');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/addactor');
		$this->load->view('footer');
	}
	public function InsertActor(){
		$resimAdi=generate_uri(uniqid()).".jpg";
		  		$config['upload_path']          = './assets/actors/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 10000000000000000;
                $config['max_width']            = 9999;
                $config['max_height']           = 9999;
                $config['file_name']			=$resimAdi;
        $this->load->library('upload', $config);
		if($_FILES) {
			// Dosyaları diziye aktar

			foreach($_FILES['image_uploads'] as $key=>$val) {
				$i = 1;
				foreach($val as $v) {
					$field_name = "file_".$i;
					$_FILES[$field_name][$key] = $v;
					$i++;
				}
			}
		}
		
		// Gereksiz olanı sil
		unset($_FILES['upload']);

		// Cevapları ayarla
		$error      = array();
		$success    = array();

		$i = 1;
		$yuklenen = 0;
		foreach($_FILES as $field_name => $file) {
			if (!$this->upload->do_upload($field_name)) {
				$error[$i] = $this->upload->display_errors();
			} else {
				$upload_data = $this->upload->data();
				$actor["Photo"].=$upload_data['file_name'].",";
				$success[$i] = $upload_data['file_name'];
				$yuklenen++;
			}
			$i++;
		}
		if($yuklenen!=0){ $actor["Photo"]=substr($actor["Photo"], 0, -1);}
        $projectType=$this->input->post('video-upload');
        if($projectType==0){
        	$actor["VideoPath"]=$this->input->post('video-url');
        }else {
        	$uploaddir = './assets/actors/videos/';
        	$ext = pathinfo($_FILES['videofile']['name'], PATHINFO_EXTENSION);
        	$videoName=generate_uri(uniqid()).'.'.$ext;
        	$uploadfile = $uploaddir .$videoName;
        	if (move_uploaded_file($_FILES['videofile']['tmp_name'], $uploadfile)) {
				 $actor["VideoPath"]=$videoName;
			} else {
					
			}
       		 	
        }
        $actor["Name"]=$this->input->post('name');
		$actor["Surname"]=$this->input->post('surname');
		$actor["Address"]=$this->input->post('address');
		$actor["Phone"]=$this->input->post('phone');
		$actor["Age"]=$this->input->post('age');
		
		$this->Actor_Model->InsertActor($actor);
		redirect(base_url('Admin/Actors'));
	}
	public function EditActor($id){
		$data['logo']=$this->Label_Model->GetValue('logo');
		$data['title']=$data["title"]=$this->Label_Model->GetValue('site_name');
		$project=$this->Actor_Model->GetActorAsID($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/addactor',$project,$data);
		$this->load->view('footer');
	}
	public function UpdateActor(){
		$resimAdi=generate_uri(uniqid()).".jpg";
		  		$config['upload_path']          = './assets/actors/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 10000000000000000;
                $config['max_width']            = 9999;
                $config['max_height']           = 9999;
                $config['file_name']			=$resimAdi;
        $this->load->library('upload', $config);
		if($_FILES) {
			// Dosyaları diziye aktar

			foreach($_FILES['image_uploads'] as $key=>$val) {
				$i = 1;
				foreach($val as $v) {
					$field_name = "file_".$i;
					$_FILES[$field_name][$key] = $v;
					$i++;
				}
			}
		}
		
		// Gereksiz olanı sil
		unset($_FILES['upload']);

		// Cevapları ayarla
		$error      = array();
		$success    = array();

		$i = 1;
		$yuklenen = 0;
		foreach($_FILES as $field_name => $file) {
			if (!$this->upload->do_upload($field_name)) {
				$error[$i] = $this->upload->display_errors();
			} else {
				$upload_data = $this->upload->data();
				$actor["Photo"].=$upload_data['file_name'].",";
				$success[$i] = $upload_data['file_name'];
				$yuklenen++;
			}
			$i++;
		}
		if($yuklenen!=0){ $actor["Photo"]=substr($actor["Photo"], 0, -1);}
        $projectType=$this->input->post('video-upload');
        if($projectType==0){
        	$actor["VideoPath"]=$this->input->post('video-url');
        }else {
        	if(@$_FILES["videofile"]){
	        	$uploaddir = './assets/actors/videos/';
	        	$ext = pathinfo($_FILES['videofile']['name'], PATHINFO_EXTENSION);
	        	$videoName=generate_uri(uniqid()).'.'.$ext;
	        	$uploadfile = $uploaddir .$videoName;
	        	if (move_uploaded_file($_FILES['videofile']['tmp_name'], $uploadfile)) {
					 $actor["VideoPath"]=$videoName;
				} else {
						
				}
       		 }	
        }
        $actorId=$this->input->post('actorId');
        $actor["Name"]=$this->input->post('name');
		$actor["Surname"]=$this->input->post('surname');
		$actor["Address"]=$this->input->post('address');
		$actor["Phone"]=$this->input->post('phone');
		$actor["Age"]=$this->input->post('age');
		
		$this->Actor_Model->UpdateActor($actor,$actorId);
		redirect(base_url('Admin/Actors'));
	}

}
