<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuatSurat extends CI_Controller{
  // public $data;
  // public function __construct()   

  public function keteranganStatus(){
    $data['nama_surat'] = "Form Surat Keterangan Status";
    $this->load->view('surat/v_formKetStatus.php', $data);
  }

  public function index(){
    $this->load->view('form');
  }

  public function test(){
    global $data;
    var_dump($data);
  }

  public function status(){
    // global $data;   
    $data['daftar_agama'] = ["Islam", "Kristen Protestan", "Katolik", "Hindu", "Budha", "Konghucu"];
    $data['daftar_jkel'] = ["Laki - laki", "Perempuan"];
    $data['daftar_status'] = ["Menikah", "Belum Menikah"];

    if(($this->uri->segment(3))!=NULL){
      $nik = $this->uri->segment(3);
      // var_dump($nik);die;
      // $data['penduduk']= $this->M_Operator->getAllData();
      $data['penduduk']= $this->M_Operator->getSingleData($nik);
      $data['bulan'] = $this->M_Admin->bulan();
      // var_dump($data);die;
      if($data['penduduk']==null){
        echo "<script>alert('Nomor NIK tidak tersedia, tambah data penduduk?');</script>";
        $this->load->view('DataPenduduk/tambah', $data);
      }
      $this->load->view('surat/ket_status', $data);
    } else {
      $this->load->view('surat/ket_status', $data);
    }
  }

  public function usaha(){
    $this->load->view('surat/ket_izinusaha');
  }

  public function skck(){
    $this->load->view('surat/skck');
  }

  public function keramaian(){
    $this->load->view('surat/izin_keramaian');
  }

  public function tidakmampu(){
    $this->load->view('surat/ket_tidakmampu');
  }

  public function domisili(){
    $this->load->view('surat/ket_domisili');
  }

  public function penghasilan(){
    $this->load->view('surat/ket_penghasilan');
  }

  public function formCari()
  {
    $data['daftar_agama'] = ["Islam", "Kristen Protestan", "Katolik", "Hindu", "Budha", "Konghucu"];
    $data['daftar_jkel'] = ["Laki - laki", "Perempuan"];
    $data['daftar_status'] = ["Menikah", "Belum Menikah"];
    $data['jenis_surat'] = $this->uri->segment(3);

    // if btn clicked and not empty
    if(isset($_POST['btn_cari']) && $_POST['key']!=''){
      $key = $this->input->post('key');
      $data['penduduk'] = $this->M_Operator->getDataSearch($key);

      $this->load->view('v_form_cari', $data);

      // if there is no data Penduduk at all
      if(empty($data['penduduk'])){
        echo '<div class="alert alert-warning alert-dismissible fade show m-auto col-8 d-flex justify-content-between" role="alert">
                <strong>Data tidak ditemukan!</strong>
                <a class="btn btn-sm btn-success my-0 py-0" href="'. base_url('DataPenduduk/tambah') .'" role="button">Tambah Data Penduduk</a>
              </div>';
      }
      
      // die;
    }else{
      $data['penduduk'] = $this->M_Operator->getAllData();
      $this->load->view('v_form_cari', $data);
    }
  }
}