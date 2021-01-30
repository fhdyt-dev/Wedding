<?php
class M_Musik extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_MUSIK WHERE KONF_LINK="' . $this->session->userdata('USER_LINK') . '"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_MUSIK' => $this->input->post('musik'),
			'KONF_MUSIK_STATUS' => $this->input->post('my-checkbox_status'),
		);

		$result = $this->db->insert('KONF_MUSIK', $data);
		redirect('konfigurasi/musik');
	}

	public function tersimpan()
	{
		$hasil = $this->db->query('SELECT * FROM KONF_MUSIK WHERE KONF_LINK="' . $this->session->userdata('USER_LINK') . '"')->result();
		return $hasil;
	}
}
