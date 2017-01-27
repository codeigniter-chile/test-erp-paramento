<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C1A extends CI_Controller {

 function __construct() {
   parent::__construct();
 }

 public function index()
	{
	 if(!$this->session->userdata('usermail'))
		{ redirect('login'); }
     // Si estamos insertando un prooveedor
     if(isset($_POST['C1Anname']))	{
         $this->load->model('C1A_model');
          if($this->C1A_model->C1Acreate(
          	        $_POST['C1Anname'],
                    $_POST['C1Ancode'],
                    $_POST['C1Aensoc'],
                    $_POST['C1Aendres'],
                    $_POST['C1Aencontry'],
                    $_POST['C1Aenmon'],
                    $_POST['C1Aenweb'],
                    $_POST['C1Aenphone'],
                    $_POST['C1Aenmapa'],
                    $_POST['C1email'],
                    $_POST['C1Anbanck'],
                    $_POST['C1AenCh'],
                    $_POST['C1AenFi']                           
         	        ))
            {
  			    ///
      		}
          else{
		        ///
	    	}
		  }	
	    $this->load->view('header');
		$this->load->view('C1A');
		$this->load->view('footer');
	}
}
