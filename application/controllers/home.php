<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
	function __construct() {
    parent::__construct();

		//$this->load->library('session');
		//$this->load->model('Model_admin');
		//$this->load->model('Model_user');
    $this->load->model('M_admin');
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
	 function homeadmin()
	  {
	 // 	$this->m->ambildata('working')->result();
		//$this->load->view('templates/header');
	 	$this->load->view('v_admingis');
	 	//$this->load->view('templates/footer');
	 }

	 function editData()
	  {
	 // 	$this->m->ambildata('working')->result();
		//$this->load->view('templates/header');
	 	$this->load->view('v_admindit');
	 	//$this->load->view('templates/footer');
	 }
	 function lihatData()
	  {
	 // 	$this->m->ambildata('working')->result();
		//$this->load->view('templates/header');
	 	$this->load->view('v_admintbl');
	 	//$this->load->view('templates/footer');
	 }
	 public function tambahmaps(){
		$data = array(
			'idcs' => $this->input->post(''),
			'namacs' => $this->input->post('Namat'),
			'latcs' => $this->input->post('Latt'),
			'longcs' => $this->input->post('Longt'),
			'descs' => $this->input->post('Desct')				
		); 
		$this->M_admin->insert_maps($data);
		redirect(site_url('index.php/home/amin'));

		}	
}
