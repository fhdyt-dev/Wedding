<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

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
 		$this->load->model('konfigurasi/M_Jadwal');

 		$this->load->model('LoginModel');
 		$this->LoginModel->cek_login();
 	}

	public function index()
	{

		$data['tersimpan']=$this->M_Jadwal->tersimpan();

		$this->load->view('template/header');
		$this->load->view('konfigurasi/v_jadwal', $data);
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$data=$this->M_Jadwal->m_simpan(); 
	}

}
