<?php
class M_Pesan extends CI_Model
{
	public function m_simpan()
	{
		$this->db->query('DELETE FROM KONF_VIDEO WHERE KONF_LINK="' . $this->session->userdata('USER_LINK') . '"');
		$data = array(
			'KONF_LINK' => $this->session->userdata('USER_LINK'),
			'KONF_VIDEO_LINK' => $this->input->post('youtube'),
			'KONF_VIDEO_STATUS' => $this->input->post('my-checkbox_status'),
		);

		$result = $this->db->insert('KONF_VIDEO', $data);
		redirect('konfigurasi/video');
	}

	public function tersimpan()
	{
		$hasil = $this->db->query('SELECT * FROM KONF_VIDEO WHERE KONF_LINK="' . $this->session->userdata('USER_LINK') . '"')->result();
		return $hasil;
	}

	public function m_list()
	{
		$hasil = $this->db->query('SELECT * FROM RSVP WHERE LINK="' . $this->session->userdata('USER_LINK') . '" ')->result();
		return $hasil;
	}

	public function m_status($id)
	{
		$query = $this->db->query('SELECT * FROM RSVP WHERE RSVP_INDEX="' . $id . '" AND RSVP_STATUS="show"');
		$data_gallery = $query->num_rows();
		if ($data_gallery == 0) {
			$data = array(
				'RSVP_STATUS' => "show",
			);

			$this->db->where('RSVP_INDEX', $id);
			$result = $this->db->update('RSVP', $data);
			return $result;
		} else {
			$data = array(
				'RSVP_STATUS' => "hide",
			);

			$this->db->where('RSVP_INDEX', $id);
			$result = $this->db->update('RSVP', $data);
			return $result;
		}
	}
}
