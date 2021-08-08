<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('AuthModel');
 }
 public function index()
 {

  $this->load->view('template_admin/auth_header.php');
  $this->load->view('auth/login.php');
  $this->load->view('template_admin/auth_footer.php');
 }
 public function login_aksi()
 {
  $this->load->view('template_admin/auth_header.php');
  $this->load->view('template_admin/auth_footer.php');
  $user = $this->input->post('username',true);
  $pass = md5($this->input->post('password', true));
 
  $this->form_validation->set_rules('username','username','required');
  $this->form_validation->set_rules('password', 'password', 'required');


  if($this->form_validation->run()!= false){
   $where = array(
 'username'=>$user,
 'password'=>$pass
   );
   $ceklogin = $this->AuthModel->cek_login($where)->num_rows();

   if($ceklogin > 0){
$sess_data = array(
'username'=>$user,
'login' => 'OK'
);
$this->session->set_userdata($sess_data);
redirect(base_url('aboutadmin'));
   }else{
    redirect(base_url('auth'));
   }
  }else{
   $this->load->view('auth/login');
  }
 }
 public function logout(){
  $this->session->sess_destroy();
  redirect(base_url('auth'));
 }
}
