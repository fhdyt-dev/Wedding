<?php
class M_Web extends CI_Model
{
  public function detail()
  {
    $hasil = $this->db->query(
      'SELECT * FROM
                                KONF_WEB AS WEB
                                LEFT JOIN KONF_PENGANTIN AS PENGANTIN
                                ON
                                WEB.KONF_LINK=PENGANTIN.KONF_LINK
                                LEFT JOIN KONF_PEMBUKAAN AS PEMBUKAAN
                                ON
                                WEB.KONF_LINK=PEMBUKAAN.KONF_LINK
                                LEFT JOIN KONF_JADWAL AS JADWAL
                                ON
                                WEB.KONF_LINK=JADWAL.KONF_LINK
                                LEFT JOIN KONF_INFORMASI AS INFORMASI
                                ON
                                WEB.KONF_LINK=INFORMASI.KONF_LINK
                                LEFT JOIN KONF_VIDEO AS VIDEO
                                ON
                                WEB.KONF_LINK=VIDEO.KONF_LINK
                                LEFT JOIN KONF_LIVE AS LIVE
                                ON
                                WEB.KONF_LINK=LIVE.KONF_LINK
                                LEFT JOIN KONF_MUSIK AS MUSIK
                                ON
                                WEB.KONF_LINK=MUSIK.KONF_LINK
                                WHERE WEB.KONF_LINK="' . $_SERVER['HTTP_HOST'] . '"
                                LIMIT 1
                                '
    )->result();
    return $hasil;
  }

  public function galeri_list()
  {
    $hasil = $this->db->query('SELECT * FROM ALBUM_USER WHERE KONF_LINK="' . $_SERVER['HTTP_HOST'] . '" AND ALBUM_USER_GALERI_STATUS="show"')->result();
    return $hasil;
  }

  public function pesan_list()
  {
    $hasil = $this->db->query('SELECT * FROM RSVP WHERE LINK="' . $_SERVER['HTTP_HOST'] . '" AND RSVP_STATUS="show"')->result();
    return $hasil;
  }
  public function link($link)
  {
    $hasil = $this->db->query('SELECT * FROM UNDANGAN WHERE LINK="' . $_SERVER['HTTP_HOST'] . '" AND UNDANGAN_LINK="' . $link . '"')->result();
    return $hasil;
  }

  public function m_simpan()
  {
    $data = array(
      'LINK' => $_SERVER['HTTP_HOST'],
      'RSVP_NAMA' => $this->input->post('nama'),
      'RSVP_KEHADIRAN' => $this->input->post('kehadiran'),
      'RSVP_PESAN' => $this->input->post('pesan'),
    );

    $result = $this->db->insert('RSVP', $data);
    echo "Pesan Anda Terkirim";
  }
}
