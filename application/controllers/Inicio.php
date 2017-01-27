<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

 function __construct() {
   parent::__construct();
 }

   
	public function index()
	{
		
   if(!$this->session->userdata('usermail'))
		{ redirect('login'); }	
	
	    $this->load->view('header');
		$this->load->view('inicio');
		$this->load->view('footer');


	}
}
