<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPenduduk extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $GLOBALS['data'] = $this->_getInitialData();
  }

  private function _getInitialData()
  {
    $session_data = $this->session->get_userdata();
    $data['username'] = $session_data['username'];
    $data['nama_surat_lengkap'] = ["Ket. Belum Menikah", "Ket. Tidak Mampu", "Izin Usaha", "Izin Keramaian", "Ket. Domisili", "Ket. Penghasilan Ortu", "Pengantar SKCK"];
    $data['agama'] = ["Islam", "Kristen Protestan", "Katolik", "Hindu", "Budha", "Konghucu"];
    $data['status'] = ["Menikah", "Belum Menikah"];
    $data['jkel'] = ["Laki - laki", "Perempuan"];
    $data['kewarganegaraan'] = ["Indonesia", "Warga Negara Asing"];
    return $data;
  }

  public function index(){
    global $data;
    $data['title'] = "Daftar Penduduk";
    $data['penduduk'] = $this->M_Operator->getAllData();
    $this->load->view('templates/header_template', $data);
    $this->load->view('all_data_penduduk', $data);
    $this->load->view('templates/footer_template', $data);
  }

  public function tambah(){
    global $data;
    $data['title'] = "Tambah Data Penduduk";
    $this->form_validation->set_rules('nik', 'NIK', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
    if($this->form_validation->run() == FALSE){
      $this->load->view('templates/header_template', $data);
      $this->load->view('form/form_tambah_penduduk');
      $this->load->view('templates/footer_template', $data);
    }else{
      $this->M_Operator->tambahDataPenduduk();
    // set flash data
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('DataPenduduk');
    }
  }

  public function detail(){
    global $data;
    $data['title'] = "Detail Data Penduduk";
    if($this->uri->segment(3)){
    $nik = $this->uri->segment(3);
    $data['penduduk'] = $this->M_Operator->getSingleData($nik);
      // var_dump($data);
      $this->load->view('templates/header_template', $data);
      $this->load->view('detail_penduduk.php', $data);
      $this->load->view('templates/footer_template');
    }
  }

  public function ubah(){
    global $data;
    // if($this->uri->segment(3)){
      $this->form_validation->set_rules('nik', 'NIK', 'required');
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
      $nik = $this->uri->segment(3);
      if ($this->form_validation->run() == FALSE){
        $data['penduduk'] = $this->M_Operator->getSingleData($nik);
        $this->load->view('templates/header_template', $data);
        $this->load->view('ubah_data_penduduk.php', $data);
        $this->load->view('templates/footer_template');
      }else{
        $this->M_Operator->ubahDataPenduduk();
        $this->session->set_flashdata('flash_ubah', 'Diubah');
        redirect('DataPenduduk');
      }
  }

  public function hapus(){
    $this->M_Operator->hapusDataPenduduk();
    $this->session->set_flashdata('flash_hapus', "dihapus");
    redirect('DataPenduduk');
  }
}