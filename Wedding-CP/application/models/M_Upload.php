<?php
class M_Upload extends CI_Model
{
	public function m_simpan($config)
	{
		//$this->db->query('DELETE FROM KONF_WEB WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'ALBUM_USER_FOTO' => $config['file_name'],
		);

	$result=$this->db->insert('ALBUM_USER',$data);

	}

	public function tersimpan(){
		$hasil=$this->db->query('SELECT * FROM KONF_WEB WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'"')->result();
		return $hasil;
	}

	public function m_list(){
		$hasil=$this->db->query('SELECT * FROM ALBUM_USER WHERE KONF_LINK="'.$this->session->userdata('USER_LINK').'" ORDER BY ALBUM_USER_INDEX DESC')->result();
		return $hasil;
	}

	public function m_hapus($id)
  	{
		$query = $this->db->get_where('ALBUM_USER',array('ALBUM_USER_INDEX'=>$id));
		$data_gallery = $query->row();
		unlink('./uploads/cover/'.$data_gallery->ALBUM_USER_FOTO.'');
    	$hasil=$this->db->query('DELETE FROM ALBUM_USER WHERE ALBUM_USER_INDEX="'.$id.'" AND KONF_LINK="'.$this->session->userdata('USER_LINK').'"');
		return $hasil;
	}

}
?>
