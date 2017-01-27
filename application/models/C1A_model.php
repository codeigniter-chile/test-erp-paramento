<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C1A_model extends CI_Model{
 
      function __construct() {
   parent::__construct();
 }
 
  
 // Insertando Cliente
 public function C1Acreate($C1Anname,$C1Ancode,$C1Aensoc,$C1Aendres,$C1Aencontry,$C1Aenmon,$C1Aenweb,$C1Aenphone,$C1Aenmapa,$C1email,$C1Anbanck,$C1AenCh,$C1AenFi){
     
    $data = array
            (
                'C1Anname' => $C1Anname,
                'C1Ancode' => $C1Ancode,
                'C1Aensoc' => $C1Aensoc,
                'C1Aendres' => $C1Aendres,
                'C1Aencontry' => $C1Aencontry,
                'C1Aenmon' => $C1Aenmon,
                'C1Aenweb' => $C1Aenweb,
                'C1Aenphone' => $C1Aenphone,
                'C1Aenmapa' => $C1Aenmapa,
                'C1email' => $C1email,

                'C1Anbanck' => $C1Anbanck,
                'C1AenCh' => $C1AenCh,
                'C1AenFi' => $C1AenFi
            );  
            $this->db->insert('tclientes',$data);
           return TRUE; 
     }



 public function C1ListarCliente($id){
    $this->db->select('*')->from('tclientes')->where('idemp =', $id);
    $query = $this->db->get();
        
    if($query->num_rows() > 0 )
        {
            return $query->result();
        }
 }



 


 
 
 
}