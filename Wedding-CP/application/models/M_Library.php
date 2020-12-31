<?php
class M_Library extends CI_Model
{
	public function font_list(){
		$hasil=$this->db->query('SELECT * FROM FONT ORDER BY FONT_NAMA ASC')->result();
		return $hasil;
	}
	public function warna_list(){
		$hasil=$this->db->query('SELECT * FROM WARNA ORDER BY WARNA_NAMA ASC')->result();
		return $hasil;
	}

}
?>
