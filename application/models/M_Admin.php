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

  public function tambahUser(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user_role = $this->input->post('user_role');
    $data = ['user_id' => '', 'username' => $username, 'password' => $password, 'role_id' => $user_role];
    $this->db->insert('users', $data);
  }

  public function totalPenduduk(){
    return $this->db->count_all_results('data_penduduk');
  }
}