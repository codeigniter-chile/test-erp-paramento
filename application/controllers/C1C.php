<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C1C extends CI_Controller {

 function __construct() {
   parent::__construct();
 }

 public function index()
	{
	 if(!$this->session->userdata('usermail'))
		{ redirect('login'); }
     // Listamos un cliente
     $this->load->model('C1A_model');
     $data['db_cliente'] = $this->C1A_model->C1ListarCliente('0');

      if (empty($data['db_cliente']))
            {
              show_404();
             }
    $this->load->view('header');
		$this->load->view('C1C',$data);
		$this->load->view('footer');
	}
}
