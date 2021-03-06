<?php
class LoginModel extends CI_Model
{

  function login_user($username, $password)
  {
    $query = $this->db->get_where('USER', array('USER_USERNAME' => $username));
    if ($query->num_rows() > 0) {
      $data_user = $query->row();
      if (password_verify($password, $data_user->USER_PASSWORD)) {

        if (empty($data_user->USER_LINK)) {
          $this->session->set_flashdata('error_login', 'Undangan anda belum aktif.');
          redirect('login');
        } else {
          $this->session->set_userdata('USER_LINK', $data_user->USER_LINK);
          $this->session->set_userdata('USER_USERNAME', $data_user->USER_USERNAME);
          $this->session->set_userdata('USER_ID', $data_user->USER_ID);
          $this->session->set_userdata('is_login', TRUE);
          return TRUE;
        }
      } else {
        return FALSE;
      }
    } else {
      $this->session->set_flashdata('error_login', 'Username belum terdaftar.');
      redirect('login');
    }
  }

  function cek_login()
  {
    if (empty($this->session->userdata('is_login'))) {
      redirect('login');
    }
  }
}
