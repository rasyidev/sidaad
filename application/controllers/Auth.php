<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    // kalo session masih ada
    if ($this->session->has_userdata('login')) {
      $this->_loginBack();
      echo "ada session";
      var_dump($this->session->get_userdata());
    }

    $data['title'] = "Halaman Login";
    $this->load->view('auth/login', $data);


    // button login pressed
    if (isset($_POST['masuk'])) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->_login($username, $password);
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('login', 'username');
    redirect('auth');
  }

  private function _loginBack()
  {
    // $session = $this->session->get_userdata();
    // $data = $session['username'];
    // var_dump($data);
    // $this->_login($data['username'], $data['password']);
    redirect('dashboard');
  }

  private function _login($username, $password)
  {
    $user = $this->db->get_where('users', ['username' => $username])->row_array();
    $error = false;

    if ($user['username'] == $username && $user['password'] == $password) {
      $data = array(
        'user_id' => $user['user_id'],
        'username' => $username,
        'login' => $user['role_id']
      );
      // var_dump($data);die;
      // echo "dashboard/index"; die;
      $this->session->set_userdata($data);
      redirect('dashboard');
    }else{
      $error = true;
    }
  }
}