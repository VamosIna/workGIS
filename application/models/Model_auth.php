<?php 

class Model_auth extends CI_Model{
	function __construct(){
		parent::__construct();
	}   
	function get($username){
	          $this->db->where('nmuser', $username); // Untuk menambahkan Where Clause : username='$username'        
	$result = $this->db->get('nmuser')->row(); // Untuk mengeksekusi dan mengambil data hasil query        
	return $result;
		}
	}

 ?>