<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {
    
    function insert_maps($data){
	 	$this->db->insert('cshop', $data);
	 }
}