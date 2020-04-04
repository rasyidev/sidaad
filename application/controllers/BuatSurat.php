<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuatSurat extends CI_Controller{
  // public $data;
  // public function __construct()   
  public function __construct()
  {
    parent::__construct();
    $GLOBALS['data'] = $this->_getInitialData();
  }

  private function _getInitialData(){
    $session_data = $this->session->get_userdata();
    $data['username'] = $session_data['username'];
    $data['nama_surat_lengkap'] = ["Ket. Belum Menikah", "Ket. Tidak Mampu", "Izin Usaha", "Izin Keramaian", "Ket. Domisili", "Ket. Penghasilan Ortu", "Pengantar SKCK"];
    $data['daftar_agama'] = ["Islam", "Kristen Protestan", "Katolik", "Hindu", "Budha", "Konghucu"];
    $data['daftar_jkel'] = ["Laki - laki", "Perempuan"];
    $data['daftar_status'] = ["Menikah", "Belum Menikah"];
    $data['kewarganegaraan'] = ["Indonesia", "Warga Negara Asing"];
    return $data;
  }

  public function index(){
    $this->load->view('form');
  }

  public function test(){
    global $data;
    var_dump($data);
  }

  public function ketStatus(){
    global $data;   
    $data['title'] = "Buat Surat Keterangan Status";

    if($this->uri->segment(3)){
      $nik = $this->uri->segment(3);
      $data['penduduk']= $this->M_Operator->getSingleData($nik);
      $data['bulan'] = $this->M_Admin->bulan();
      // var_dump($data);die;
      $this->load->view('templates/header_template', $data);
      $this->load->view('surat/ket_status', $data);
      $this->load->view('templates/footer_template');
    } else {
      $this->load->view('surat/ket_status', $data);
    }
  }

  public function izinUsaha(){
    global $data;
    $this->load->view('surat/ket_izinusaha');
  }

  public function skck(){
    global $data;
    $this->load->view('surat/skck');
  }

  public function izinKeramaian(){
    global $data;
    $this->load->view('surat/izin_keramaian');
  }

  public function sktm(){
    global $data;
    if (($this->uri->segment(3)) != NULL) {
      $nik = $this->uri->segment(3);
      $data['penduduk'] = $this->M_Operator->getSingleData($nik);
      $data['bulan'] = $this->M_Admin->bulan();

      $this->load->view('templates/header_template', $data);
      $this->load->view('surat/ket_tidakmampu', $data);
      $this->load->view('templates/footer_template');
    }
  }

  public function ketDomisili(){
    global $data;
    $this->load->view('surat/ket_domisili');
  }

  public function ketPenghasilan(){
    global $data;
    $this->load->view('surat/ket_penghasilan');
  }

  public function formCari()
  {
    global $data;
    $data['jenis_surat'] = $this->uri->segment(3);
    // var_dump($data); die;

    // if btn clicked and not empty
    if(isset($_POST['btn_cari']) && $_POST['key']!=''){
      $key = $this->input->post('key');
      $data['penduduk'] = $this->M_Operator->getDataSearch($key);
      $session_data = $this->session->get_userdata();
      $data['username'] = $session_data['username'];
      $data['title'] = "Pilih Nama Pemohon";
      $this->load->view('templates/header_template', $data);
      $this->load->view('v_form_cari', $data);
      $this->load->view('templates/footer_template');


      // if there is no data Penduduk at all
      if(empty($data['penduduk'])){
        echo '<div class="alert alert-warning alert-dismissible fade show m-auto col-8 d-flex justify-content-between" role="alert">
                <strong>Data tidak ditemukan!</strong>
                <a class="btn btn-sm btn-success my-0 py-0" href="'. base_url('DataPenduduk/tambah') .'" role="button">Tambah Data Penduduk</a>
              </div>';
      }

    }else{
      $data['penduduk'] = $this->M_Operator->getAllData();
      $session_data = $this->session->get_userdata();
      $data['username'] = $session_data['username'];
      $data['title'] = "Pilih Data Penduduk";
      $this->load->view('templates/header_template', $data);
      $this->load->view('v_form_cari', $data);
      $this->load->view('templates/footer_template');
    }
  }
}