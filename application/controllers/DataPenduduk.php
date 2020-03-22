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

  public function detail(){
    if($this->uri->segment(3)){
    $nik = $this->uri->segment(3);
    $data['penduduk'] = $this->M_Operator->getSingleData($nik);
    // var_dump($data);
    $this->load->view('detail_penduduk.php', $data);
    }
  }

  public function ubah(){
    $data['agama'] = ["Islam", "Kristen Protestan", "Katolik", "Hindu", "Budha", "Konghucu"];
    $data['status'] = ["Menikah", "Belum Menikah"];
    $data['jkel'] = ["Laki - laki", "Perempuan"];
    $data['kewarganegaraan'] = ["Indonesia", "Warga Negara Asing"];


    // if($this->uri->segment(3)){
      $this->form_validation->set_rules('nik', 'NIK', 'required');
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
      $nik = $this->uri->segment(3);
      if ($this->form_validation->run() == FALSE){
        $data['penduduk'] = $this->M_Operator->getSingleData($nik);
        $this->load->view('ubah_data_penduduk.php', $data);
      }else{
        $this->M_Operator->ubahDataPenduduk();
        $this->session->set_flashdata('flash_ubah', 'Diubah');
        redirect('DataPenduduk');
      }
    // }else{
    //   var_dump($this->uri->segment(3)); die;
    //   // redirect('DataPenduduk');
    // }
  }

  public function hapus(){
    $this->M_Operator->hapusDataPenduduk();
    $this->session->set_flashdata('flash_hapus', "dihapus");
    redirect('DataPenduduk');
  }
}