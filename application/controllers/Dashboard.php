<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');

  }
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

  public function tambahDataOperator(){
    $this->form_validation->set_rules('username', "Username", 'required');
    $this->form_validation->set_rules('password', "Password", 'required');
    $this->form_validation->set_rules('repassword', "Ulang Password", 'required|matches[password]');
    if($this->form_validation->run()==FALSE){
      $this->load->view('form/tambah_data_user');
    }else{
      $this->M_Admin->tambahUser();
      $this->session->set_flashdata('flash', 'Berhasil');
    }
  }

  public function tampilUser(){
    $data['user'] = $this->M_Admin->getAllUser();
    $this->load->view('v_tampil_user', $data);
  }

}