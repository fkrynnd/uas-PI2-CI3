<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('ContactModel');
	}
	public function index()
	{
	$data['Allcontact'] = $this->ContactModel->get_all_contact();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('contactadmin/index.php',$data);
		$this->load->view('template_admin/footer.php');
			
	}
	public function hapus($id_contact)
	{


		$this->db->where('id_contact', $id_contact);
		$this->db->delete('contact');

		
		redirect('contactadmin');
	}
}