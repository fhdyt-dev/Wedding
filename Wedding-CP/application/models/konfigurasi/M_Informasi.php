<?php
class M_Informasi extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_INFORMASI WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_INFORMASI_JUDUL' => $this->input->post('judul'),
			'KONF_INFORMASI_ISI' => $this->input->post('isi'),
			'KONF_INFORMASI_STATUS' => $this->input->post('my-checkbox_status'),
		);

	$result=$this->db->insert('KONF_INFORMASI',$data);
	redirect('konfigurasi/informasi');
	}

	public function tersimpan(){
		$hasil=$this->db->query('SELECT * FROM KONF_INFORMASI WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"')->result();
		return $hasil;
	}

}
?>
