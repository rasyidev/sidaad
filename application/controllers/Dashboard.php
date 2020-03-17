<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
  public function index(){
    // user filtering
    $data = $this->session->get_userdata();
    ($data['login']=="1") ? $this->admin() : (($data['login']=="2") ? $this->operator() : redirect('auth'));
    // if($data['login']=="1"){
    //   $this->admin();
    // }else if ($data['login']=="2"){
    //   $this->operator();
    // }else{
    //   echo "Gagal Masuk!"; die;
    // }
    
    // var_dump($data); die;
  }

  public function admin(){
    // Unset password to be viewed for reduce vulnarablity
    $data['users'] = $this->M_Admin->getAllUser();
    var_dump($data); die;
    // open dashboard admin and send data to it
    $this->load->view('v_dashboard_admin', $data);
  }

  public function operator(){

    $this->load->view('v_dashboard');
  }
}