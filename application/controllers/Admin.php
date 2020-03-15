<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  // public function index(){
  //   $this->tambahOperator();
  // }
  public function tambahOperator()
  {
    $this->load->view('admin/tambahOperator');
    // var_dump($this->input->post());die;
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $roleID = $this->input->post('roleID');
    // $sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES ('', " . '$username' . ", " . '$password' . ", " . '$roleID' . ")";
    if(isset($_POST['tambah'])){

      $sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES ('', '$username', '$password', '$roleID')";
        $this->db->query($sql);
        // redirect to dashboard
        echo '<script>';
        echo 'alert(message successfully sent)';  //not showing an alert box.
        echo '</script>';
        $url = base_url('dashboard');
        header("Location:" . $url);
      
      exit;
    }
  }
}