<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('AboutModel');
 }
 public function index()
 {
  $data['Allabout'] = $this->AboutModel->get_all_about();
  $data['title'] = "ABOUT Me";
  $this->load->view('template_tampilan/header.php',$data);
  $this->load->view('about/index.php',$data);
  $this->load->view('template_tampilan/footer.php');
 }
}
