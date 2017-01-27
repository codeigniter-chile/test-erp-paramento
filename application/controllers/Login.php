<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Login extends CI_Controller {
 function __construct() {
   parent::__construct();
 }


public function index()
	{
	  
	  if($this->session->userdata('usermail'))
		{

			redirect('inicio');
		}

  if(isset($_POST['password']))	{
  	  

		$this->load->model('users_model');
		     
		if($this->users_model->login($_POST['usermail'],$_POST['password'])){
			
			$this->session->set_userdata('usermail',$_POST['usermail']);
		  redirect('inicio');
		}else{
		   redirect('login#pass-incorrect');
	    	}
    }
		$this->load->view('login');
	}


public function logout(){
		$this->session->sess_destroy();
		redirect('inicio');
	}
}

