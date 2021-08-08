<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
 
  
  $this->load->model('PendidikanModel');
 }

 public function index()
 {
  $data['Allsd'] = $this->PendidikanModel->get_all_sd();
  $data['Allsmp'] = $this->PendidikanModel->get_all_smp();
  $data['Allsmk'] = $this->PendidikanModel->get_all_smk();
  $data['Alluniv'] = $this->PendidikanModel->get_all_univ();
  $data['title'] = "Daftar Pendidikan";
  $this->load->view('template_tampilan/header.php',$data);
  $this->load->view('Pendidikan/index.php',$data);
  $this->load->view('template_tampilan/footer.php');
 }
}