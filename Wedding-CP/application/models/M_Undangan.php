<?php
class M_Undangan extends CI_Model
{
    public function m_simpan()
    {
        // $this->db->query('DELETE FROM UNDANGAN WHERE LINK="' . $this->session->userdata('USER_LINK') . '"');
        $data = array(
            'LINK' => $this->session->userdata('USER_LINK'),
            'UNDANGAN_KEPADA' => $this->input->post('kepada'),
            'UNDANGAN_LINK' => url_title($this->input->post('kepada'), 'dash', TRUE),
        );

        $result = $this->db->insert('UNDANGAN', $data);
        return $result;
    }

    public function m_list()
    {
        $hasil = $this->db->query('SELECT * FROM UNDANGAN WHERE LINK="' . $this->session->userdata('USER_LINK') . '" ')->result();
        return $hasil;
    }

    public function m_hapus($id)
    {
        $hasil = $this->db->query('DELETE FROM UNDANGAN WHERE UNDANGAN_INDEX="' . $id . '" AND LINK="' . $this->session->userdata('USER_LINK') . '"');
        return $hasil;
    }
}
