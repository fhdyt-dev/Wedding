<?php
class M_Live extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_LIVE WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_LIVE_PLATFORM' => $this->input->post('platform'),
			'KONF_LIVE_LINK' => $this->input->post('link_live'),
			'KONF_LIVE_STATUS' => $this->input->post('my-checkbox_status'),
			'KONF_LIVE_KETERANGAN'   => $this->input->post('keterangan'),
		);

	$result=$this->db->insert('KONF_LIVE',$data);
	redirect('konfigurasi/live');
	}

	public function tersimpan(){
		$hasil=$this->db->query('SELECT * FROM KONF_LIVE WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"')->result();
		return $hasil;
	}

}
