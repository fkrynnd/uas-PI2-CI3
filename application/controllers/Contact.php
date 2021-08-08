<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{


 public function index()
 {
  $data['title'] = "Contact Me";
  $this->load->view('template_tampilan/header.php',$data);
  $this->load->view('contact/index.php');
  $this->load->view('template_tampilan/footer.php');
 }
 public function simpancontact()
 {
  $data = [
   'nama_pengunjung' => $this->input->post('nama_pengunjung'),
   'email' => $this->input->post('email'),
   'subject' => $this->input->post('subject'),
   'message' => $this->input->post('message'),
  ];
  $this->db->insert('contact', $data);
  redirect('contact');
 }
	
}
