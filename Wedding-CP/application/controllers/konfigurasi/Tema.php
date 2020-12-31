<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tema extends CI_Controller {

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
 		$this->load->model('konfigurasi/M_Tema');

 		$this->load->model('LoginModel');
 		$this->LoginModel->cek_login();
 	}

	public function index()
	{
		$this->load->model('M_Library');
		$data['warna']=$this->M_Library->warna_list();
		$data['font']=$this->M_Library->font_list();

		$data['tersimpan']=$this->M_Tema->tersimpan();

		$this->load->view('template/header');
		$this->load->view('konfigurasi/v_tema', $data);
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$data=$this->M_Tema->m_simpan();
		// $config['name']					= random_string('sha1', 40);
		// $config['upload_path']          = './uploads/cover';
		// $config['allowed_types']        = 'gif|jpg|png';
		// $config['file_name']            = $config['name'].".".pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);
		// $config['max_size']             = 1024;
		//
		// $this->load->library('upload', $config);
		// if ( ! $this->upload->do_upload('userfile'))
		// {
		//     $error = array('error' => $this->upload->display_errors());
		// 		print_r($error);
		// }
		// else{
		//
		// }
	}

}
