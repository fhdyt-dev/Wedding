<?php
class M_Tema extends CI_Model
{
	public function m_simpan()
	{
		list($r, $g, $b) = sscanf($this->input->post('warna'), "#%02x%02x%02x");
		$this->db->query('DELETE FROM KONF_WEB WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_WEB_JUDUL' => $this->input->post('judul'),
			'KONF_WEB_WARNA' => $this->input->post('warna'),
			'KONF_WEB_WARNA_RGB' => "".$r.",".$g.",".$b."",
			'KONF_WEB_FONT' => $this->input->post('font'),
			'KONF_WEB_FONT_JUDUL' => $this->input->post('font_judul'),
			'KONF_WEB_FONT_INTRO' => $this->input->post('font_intro'),
			'KONF_WEB_SAMPUL' => $this->input->post('gambar'),
		);

	$result=$this->db->insert('KONF_WEB',$data);
	redirect('konfigurasi/tema');
	}

	public function tersimpan(){
		$hasil=$this->db->query('SELECT * FROM KONF_WEB WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"')->result();
		return $hasil;
	}

}
?>
