<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}
		$this->load->model('AboutModel');
	}
	public function index()
	{
		$data['Allabout'] = $this->AboutModel->get_all_about();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('aboutadmin/index.php' ,$data);
		$this->load->view('template_admin/footer.php');
			
	}
public function edit($id_about)
{
		$data['about'] = $this->db->get_where('about', ['id_about' => $id_about])->row_array();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('aboutadmin/edit.php', $data);
		$this->load->view('template_admin/footer.php');
}
	public function editabout()
	{

		$this->db->set('tgl_lahir', $this->input->post('tgl_lahir'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('no_tlp', $this->input->post('no_tlp'));
		$this->db->set('umur', $this->input->post('umur'));
		$this->db->set('hobi', $this->input->post('hobi'));
		$this->db->set('status', $this->input->post('status'));
		$this->db->where('id_about', $this->input->post('id_about'));
		$this->db->update('about');

		redirect('aboutadmin');
	}

}
