<?php
class M_Gantipassword extends CI_Model
{
	public function m_simpan()
	{
		$password_baru = $this->input->post('konfirmasi_password_baru');
		$password_lama = $this->input->post('password_lama');
		$query = $this->db->get_where('USER', array('USER_LINK' => $this->session->userdata('USER_LINK')));
		// echo $this->db->last_query();
		// echo $query->num_rows();
		// exit;
		if ($query->num_rows() > 0) {
			$data_user = $query->row();
			if (password_verify($password_lama, $data_user->USER_PASSWORD)) {

				$data = array(
					'USER_PASSWORD' => password_hash($password_baru, PASSWORD_DEFAULT),
				);
				$this->db->where('USER_LINK', $this->session->userdata('USER_LINK'));
				$this->db->update('USER', $data);
				$this->session->set_flashdata('success_change_password', 'Password Berhasil diganti.');
				$this->session->unset_userdata('is_login');
				redirect('login');
			} else {
				$this->session->set_flashdata('error_change_password', 'Password Lama anda salah.');
				redirect('gantipassword');
			}
		} else {
			return FALSE;
		}
	}
}
