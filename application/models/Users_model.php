<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
 
      function __construct() {
   parent::__construct();
 }
 
  
 public function login($username,$password){
     $this->db->where('fmail',$username);
     $this->db->where('fpass',md5($password));
     $q = $this->db->get('tuser');
     if ($q->num_rows()>0) {
         
     // Registro el usuario en la tabla de registro.
     // Inserting in Table(students) of Database(college)
    $data = array
            (
                'iduser' => giveme_id_mail("ok"),
                'fecha' => date("Y-m-d H:i:s"),
                'state' => '1'
            );
            $this->db->insert('ruser',$data);
            return TRUE;
     }
     else 
     {
     FALSE;
     }
 }
 
 
 
}