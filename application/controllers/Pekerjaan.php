<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('PekerjaanModel');
 }


 public function index()
 {
  $data['Allpekerjaan1'] = $this->PekerjaanModel->get_all_pekerjaan1();
  $data['Allpekerjaan2'] = $this->PekerjaanModel->get_all_pekerjaan2();
  $data['title'] = "Daftar Pekerjaan";
  $this->load->view('template_tampilan/header.php',$data);
  $this->load->view('pekerjaan/index.php',$data);
  $this->load->view('template_tampilan/footer.php');
 }
}
