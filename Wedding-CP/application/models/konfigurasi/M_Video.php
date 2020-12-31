<?php
class M_Video extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_VIDEO WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_VIDEO_LINK' => $this->input->post('youtube'),
			'KONF_VIDEO_STATUS' => $this->input->post('my-checkbox_status'),
		);

	$result=$this->db->insert('KONF_VIDEO',$data);
	redirect('konfigurasi/video');
	}

	public function tersimpan(){
		$hasil=$this->db->query('SELECT * FROM KONF_VIDEO WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"')->result();
		return $hasil;
	}

}
?>
