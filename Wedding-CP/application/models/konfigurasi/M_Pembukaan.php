<?php
class M_Pembukaan extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_PEMBUKAAN WHERE KONF_LINK="' . $this->session->userdata('USER_LINK') . '"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_PEMBUKAAN_JUDUL' => $this->input->post('judul'),
			'KONF_PEMBUKAAN_ISI' => $this->input->post('isi'),
		);

		$result = $this->db->insert('KONF_PEMBUKAAN', $data);
		redirect('konfigurasi/pembukaan');
	}

	public function tersimpan()
	{
		$hasil = $this->db->query('SELECT * FROM KONF_PEMBUKAAN WHERE KONF_LINK="' . $this->session->userdata('USER_LINK') . '"')->result();
		return $hasil;
	}
}
