<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
	function __construct() {
    parent::__construct();


    //$this->load->model('example');
}
	  function index()
	 {
	 	$this->load->view('templates/header');
	 	$this->load->view('v_home');
	 	$this->load->view('templates/footer');
	 	
	 }
	
	function wor()
	  {
	 // 	$this->m->ambildata('working')->result();

	 	$data=$this->db->get('working')->result();
		echo json_encode($data);
	 }
	 function cs()
	  {
	 // 	$this->m->ambildata('working')->result();

	 	$data=$this->db->get('cshop')->result();
		echo json_encode($data);
	 }

	 function amin()
	  {
	 // 	$this->m->ambildata('working')->result();
		$this->load->view('templates/header');
	 	$this->load->view('v_admin');
	 	$this->load->view('templates/footer');
	 }
}
