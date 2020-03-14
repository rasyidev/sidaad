<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{
  private function _login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('users', ['username' => $username])->row_array();
    
    if($user['username'] == $username && $user['password'] == $password){
      $data['username'] = $username;
      $this->load->view('v_dashboard', $data);
    }
  }
  public function index(){
    if(isset($_POST['masuk'])){
      $this ->_login();

    }
    $data['title'] = "Halaman Login";
    $this->load->view('auth/login', $data);
  }
}