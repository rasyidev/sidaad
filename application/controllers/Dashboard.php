<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
  public function index(){
    $data = $this->session->userdata('login', 'usename');
    // var_dump($data); die;
    $this->load->view('v_dashboard');
  }

  public function admin(){
    $this->load->view('v_dashboard_admin');
  }
}