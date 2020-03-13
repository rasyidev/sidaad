<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
  public function index(){
    $this->load->view('v_dashboard');
  }

  public function admin(){
    $this->load->view('v_dashboard_admin');
  }

  public function operator(){
    $this->load->view('v_dashboard_operator');
  }
}