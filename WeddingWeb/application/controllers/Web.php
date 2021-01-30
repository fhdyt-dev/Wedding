<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
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
	public function index()
	{
		$this->load->model('M_Web');
		$data['link'] =	$this->M_Web->link($this->uri->segment('1'));
		$data['detail'] = $this->M_Web->detail();
		$data['font'] = $this->M_Web->font_list();
		$data['galeri'] = $this->M_Web->galeri_list();
		$data['pesan'] = $this->M_Web->pesan_list();
		if (empty($data['detail'])) {
			echo "Website belum dikonfigurasi";
		} else {
			$this->load->view('v_web', $data);
		}
	}

	public function kirim()
	{
		$this->load->model('M_Web');
		$data = $this->M_Web->m_simpan();
	}

	// public function link()
	// {
	// 	$this->load->model('M_Web');
	// 	$data['link'] = $this->M_Web->link($this->uri->segment('1'));
	// 	$data['detail'] = $this->M_Web->detail();
	// 	$data['font'] = $this->M_Web->font_list();
	// 	$data['galeri'] = $this->M_Web->galeri_list();
	// 	$data['pesan'] = $this->M_Web->pesan_list();
	// 	if (empty($data['detail'])) {
	// 		echo "Website belum dikonfigurasi";
	// 	} else {
	// 		$this->load->view('v_web', $data);
	// 	}
	// }
}
