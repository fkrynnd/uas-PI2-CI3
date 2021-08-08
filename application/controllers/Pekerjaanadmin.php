<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaanadmin extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  
  $this->load->model('PekerjaanModel');
 }

	public function index()
	{
  $data['Allpekerjaan1'] = $this->PekerjaanModel->get_all_pekerjaan1();
  $data['Allpekerjaan2'] = $this->PekerjaanModel->get_all_pekerjaan2();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pekerjaanadmin/index.php',$data);
		$this->load->view('template_admin/footer.php');
			
	}
 }