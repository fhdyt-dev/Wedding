<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi/M_Pesan');

		$this->load->model('LoginModel');
		$this->LoginModel->cek_login();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('konfigurasi/v_pesan');
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$data = $this->M_Pesan->m_simpan();
	}

	public function list()
	{
		$data = $this->M_Pesan->m_list();
		echo json_encode($data);
	}

	public function status()
	{
		$id = $this->uri->segment('4');
		$data = $this->M_Pesan->m_status($id);
		echo json_encode($data);
	}
}
