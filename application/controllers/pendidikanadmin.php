<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikanadmin extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}
  $this->load->model('PendidikanModel');
 }

	public function index()
	{
		$data['Allsd'] = $this->PendidikanModel->get_all_sd();
  $data['Allsmp'] = $this->PendidikanModel->get_all_smp();
  $data['Allsmk'] = $this->PendidikanModel->get_all_smk();
  $data['Alluniv'] = $this->PendidikanModel->get_all_univ();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pendidikanadmin/index.php' ,$data);
		$this->load->view('template_admin/footer.php');
			
	}
	public function edit($id_sd)
	{
		$data['sd'] = $this->db->get_where('sd', ['id_sd' => $id_sd])->row_array();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pendidikanadmin/edit_sd.php', $data);
		$this->load->view('template_admin/footer.php');
	}
	public function editsd()
	{

		$this->db->set('nama_sd', $this->input->post('nama_sd'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('tahun_masuk', $this->input->post('tahun_masuk'));
		$this->db->set('tahun_lulus', $this->input->post('tahun_lulus'));
		$this->db->where('id_sd', $this->input->post('id_sd'));
		$this->db->update('sd');

		redirect('pendidikanadmin');
	}
	public function edit1($id_smp)
	{
		$data['smp'] = $this->db->get_where('smp', ['id_smp' => $id_smp])->row_array();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pendidikanadmin/edit_smp.php', $data);
		$this->load->view('template_admin/footer.php');
	}
	public function editsmp()
	{

		$this->db->set('nama_smp', $this->input->post('nama_smp'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('tahun_masuk', $this->input->post('tahun_masuk'));
		$this->db->set('tahun_lulus', $this->input->post('tahun_lulus'));
		$this->db->where('id_smp', $this->input->post('id_smp'));
		$this->db->update('smp');

		redirect('pendidikanadmin');
	}
	public function edit2($id_smk)
	{
		$data['smk'] = $this->db->get_where('smk', ['id_smk' => $id_smk])->row_array();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pendidikanadmin/edit_smk.php', $data);
		$this->load->view('template_admin/footer.php');
	}
	public function editsmk()
	{

		$this->db->set('nama_smk', $this->input->post('nama_smk'));
		$this->db->set('jurusan', $this->input->post('jurusan'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('tahun_masuk', $this->input->post('tahun_masuk'));
		$this->db->set('tahun_lulus', $this->input->post('tahun_lulus'));
		$this->db->where('id_smk', $this->input->post('id_smk'));
		$this->db->update('smk');

		redirect('pendidikanadmin');
	}
	public function edit3($id_univ)
	{
		$data['univ'] = $this->db->get_where('univ', ['id_univ' => $id_univ])->row_array();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pendidikanadmin/edit_univ.php', $data);
		$this->load->view('template_admin/footer.php');
	}
	public function edituniv()
	{

		$this->db->set('nama_univ', $this->input->post('nama_univ'));
		$this->db->set('prodi', $this->input->post('prodi'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('tahun_masuk', $this->input->post('tahun_masuk'));
		$this->db->set('tahun_lulus', $this->input->post('tahun_lulus'));
		$this->db->where('id_univ', $this->input->post('id_univ'));
		$this->db->update('univ');

		redirect('pendidikanadmin');
	}
}