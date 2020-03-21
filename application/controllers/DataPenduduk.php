<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPenduduk extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index(){
    $data['penduduk'] = $this->M_Operator->getAllData();
    $this->load->view('all_data_penduduk', $data);
  }

  public function tambah(){
    $this->form_validation->set_rules('nik', 'NIK', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
    if($this->form_validation->run() == FALSE){
      $this->load->view('form/form_tambah_penduduk');
    }else{
      $this->M_Operator->tambahDataPenduduk();
    // set flash data
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('DataPenduduk');
    }
  }
}