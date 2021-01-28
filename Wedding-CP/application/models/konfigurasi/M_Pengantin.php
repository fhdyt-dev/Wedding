<?php
class M_Pengantin extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_PENGANTIN WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_PENGANTIN_SUB_TITLE' => $this->input->post('sub_title'),
			'KONF_PENGANTIN_PRIA_NAMA_LENGKAP' => $this->input->post('nama_lengkap_pria'),
			'KONF_PENGANTIN_WANITA_NAMA_LENGKAP' => $this->input->post('nama_lengkap_wanita'),
			'KONF_PENGANTIN_PRIA_NAMA' => $this->input->post('nama_pria'),
			'KONF_PENGANTIN_WANITA_NAMA' => $this->input->post('nama_wanita'),
			'KONF_PENGANTIN_PRIA_KETERANGAN' => $this->input->post('keterangan_pria'),
			'KONF_PENGANTIN_WANITA_KETERANGAN' => $this->input->post('keterangan_wanita'),
			'KONF_PENGANTIN_PRIA_FOTO' => $this->input->post('foto_pria'),
			'KONF_PENGANTIN_WANITA_FOTO' => $this->input->post('foto_wanita'),
		);

	$result=$this->db->insert('KONF_PENGANTIN',$data);
	redirect('konfigurasi/pengantin');
	}

	public function tersimpan(){
		$hasil=$this->db->query('SELECT * FROM KONF_PENGANTIN WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"')->result();
		return $hasil;
	}

}
?>
