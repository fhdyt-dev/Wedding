<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

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
 		$this->load->model('M_Upload');

 		$this->load->model('LoginModel');
 		$this->LoginModel->cek_login();
 	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('konfigurasi/v_album');
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$data=$this->M_Upload->m_simpan();
    }
    
    public function list()
	{
			$data=$this->M_Upload->m_list();
			echo json_encode($data);
	}

}
