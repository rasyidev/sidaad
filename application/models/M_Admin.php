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
}