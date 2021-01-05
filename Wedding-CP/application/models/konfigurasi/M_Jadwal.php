<?php
class M_Jadwal extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_JADWAL WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_JADWAL_ACARA1_STATUS' => $this->input->post('my-checkbox_acara_1'),
			'KONF_JADWAL_ACARA1_JUDUL' => $this->input->post('judul_acara1'),
			'KONF_JADWAL_ACARA1_TANGGAL' => $this->input->post('tanggal_acara1'),
			'KONF_JADWAL_ACARA1_JAM' => $this->input->post('jam_acara1'),
			'KONF_JADWAL_ACARA1_ALAMAT' => $this->input->post('alamat_acara1'),
			'KONF_JADWAL_ACARA1_MAP' => $this->input->post('kordinat_acara1'),

			'KONF_JADWAL_ACARA2_STATUS' => $this->input->post('my-checkbox_acara_2'),
			'KONF_JADWAL_ACARA2_JUDUL' => $this->input->post('judul_acara2'),
			'KONF_JADWAL_ACARA2_TANGGAL' => $this->input->post('tanggal_acara2'),
			'KONF_JADWAL_ACARA2_JAM' => $this->input->post('jam_acara2'),
			'KONF_JADWAL_ACARA2_ALAMAT' => $this->input->post('alamat_acara2'),
			'KONF_JADWAL_ACARA2_MAP' => $this->input->post('kordinat_acara2'),
			'KONF_JADWAL_INTRO' => $this->input->post('r2'),
		);

	$result=$this->db->insert('KONF_JADWAL',$data);
	redirect('konfigurasi/jadwal');
	}

	public function tersimpan(){
		$hasil=$this->db->query('SELECT * FROM KONF_JADWAL WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"')->result();
		return $hasil;
	}

}
?>
