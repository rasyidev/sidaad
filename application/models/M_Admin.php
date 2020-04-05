<?php 
class M_Admin extends CI_Model{
  public function getAllUser(){
    // select 
    $this->db->select('user_id, username, role_name');
    $this->db->from('users');
    $this->db->join('user_role', 'user_role.role_id=users.role_id');
    // $users = $this->db->get('users');
    // $users = $this->db->query("");
    $users = $this->db->get();
    return $users->result_array();
  }

  public function getSingleUser(){
    $user_id = $this->uri->segment(3);
    $this->db->select('username, password, role_name');
    $this->db->from('users');
    $this->db->join('user_role', 'users.role_id=user_role.role_id');
    $this->db->where('user_id', $user_id);
    $data_user = $this->db->get()->row_array();
    return $data_user;
  }

  public function tambahUser(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user_role = $this->input->post('user_role');
    $data = ['user_id' => '', 'username' => $username, 'password' => $password, 'role_id' => $user_role];
    // var_dump($data);die;
    $this->db->insert('users', $data);
  }

  public function ubahUser(){
    $user_id = $this->input->post('user_id');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user_role = $this->input->post('user_role');
    $data = ['user_id' => '', 'username' => $username, 'password' => $password, 'role_id' => $user_role];
    // var_dump($data);die;
    $this->db->where('user_id', $user_id);
    $this->db->update('users', $data);
  }

  public function hapusUser(){
    $user_id = $this->uri->segment(3);
    $this->db->delete('users', array('user_id' => $user_id));
  }

  public function totalPenduduk(){
    return $this->db->count_all_results('data_penduduk');
  }
  public function totalUser(){
    return $this->db->count_all_results('users');
  }
  public function totalSurat(){
    return $this->db->count_all_results('transaksi');
  }

  public function getAllLog(){
    $this->db->select('nama, jenis_surat, created_at, username');
    $this->db->from('users u');
    $this->db->join('transaksi t', 'u.user_id=t.user_id');
    $this->db->join('data_penduduk dp', 'dp.nik=t.nik');
    $this->db->join('user_role ur', 'ur.role_id=u.role_id');
    $this->db->order_by('created_at', 'desc');
    
    // $users = $this->db->get('users');
    // $users = $this->db->query("");
    $users = $this->db->get();
    return $users->result_array();
  }





function bulan()
  {
    $bulan = Date('m');
    switch ($bulan) {
      case 1:
        $bulan = "Januari";
        break;
      case 2:
        $bulan = "Februari";
        break;
      case 3:
        $bulan = "Maret";
        break;
      case 4:
        $bulan = "April";
        break;
      case 5:
        $bulan = "Mei";
        break;
      case 6:
        $bulan = "Juni";
        break;
      case 7:
        $bulan = "Juli";
        break;
      case 8:
        $bulan = "Agustus";
        break;
      case 9:
        $bulan = "September";
        break;
      case 10:
        $bulan = "Oktober";
        break;
      case 11:
        $bulan = "November";
        break;
      case 12:
        $bulan = "Desember";
        break;

      default:
        $bulan = Date('F');
        break;
    }
    return $bulan;
  }


  // $month_number = date('n');
  function romanMonth($number)
  {
    if ($number == 1) {
      return "I";
    } else if ($number == 2) {
      return "II";
    } else if ($number == 3) {
      return "III";
    } else if ($number == 4) {
      return "IV";
    } else if ($number == 5) {
      return "V";
    } else if ($number == 6) {
      return "VI";
    } else if ($number == 7) {
      return "VII";
    } else if ($number == 8) {
      return "VIII";
    } else if ($number == 9) {
      return "IX";
    } else if ($number == 10) {
      return "X";
    } else if ($number == 11) {
      return "XI";
    } else if ($number == 12) {
      return "XII";
    }
  }
}