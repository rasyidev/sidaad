<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuatSurat extends CI_Controller{
  public function keteranganStatus(){
    $data['surat'] = "Form Surat Keterangan Status";
    $this->load->view('surat/v_formKetStatus.php', $data);
  }

  public function index(){
    $this->load->view('form');
  }

  public function status(){
    if(isset($_POST['cari'])){
      //get nik
      $temp = $this->input->post();
      $nik = $temp['nik'];

      //get model
      $data = $this->M_Operator->getAllData();
      var_dump($data);
    }else{
      echo "data tidak tersedia";
    }
    $this->load->view('surat/ket_status');
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