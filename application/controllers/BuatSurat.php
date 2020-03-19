<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuatSurat extends CI_Controller{
  // public $data;
  // public function __construct()
  // {
  //   global $data;
  //   //buat list daftar pilihan untuk dimasukkan ke value form
  //   $data['daftar_agama'] = ["Islam", "Kristen Protestan", "Katolik", "Hindu", "Budha", "Konghucu"];
  //   $data['daftar_jkel'] = ["Laki - laki", "Perempuan"];
  //   $data['daftar_status'] = ["Menikah", "Belum Menikah"];
  // }

  public function keteranganStatus(){
    $data['surat'] = "Form Surat Keterangan Status";
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
    global $data;
    $data['daftar_agama'] = ["Islam", "Kristen Protestan", "Katolik", "Hindu", "Budha", "Konghucu"];
    $data['daftar_jkel'] = ["Laki - laki", "Perempuan"];
    $data['daftar_status'] = ["Menikah", "Belum Menikah"];
    if(isset($_POST['btn_cari'])){
      //get nik
      $temp = $this->input->post();
      // var_dump($temp); die;
      $data['btn_cari'] = $temp['btn_cari'];
      //get model
      $data['penduduk'] = $this->M_Operator->getAllData();
      // var_dump($data);
    }
    $this->load->view('surat/ket_status', $data);
    // var_dump($data); die;
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
}