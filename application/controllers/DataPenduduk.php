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
    $data['daftar_status'] = ["Kawin", "Belum Kawin", "Cerai Hidup", "Cerai Mati"];
    $data['jkel'] = ["Laki - laki", "Perempuan"];
    $data['kewarganegaraan'] = ["Indonesia", "Warga Negara Asing"];
    $data['role'] = ($session_data['login'] == "1") ? "Administrator" : "Operator";
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
      if(!$this->M_Operator->getSingleData($this->input->post('nik')) == null){
        $this->session->set_flashdata('flash_tambah_gagal', 'Gagal Ditambahkan');
        echo "<script>
              alert('NIK Sudah terdaftar!');
              window.location.href=\"http://localhost/sidaad/DataPenduduk\";
         </script>";
      }else{
        $this->M_Operator->tambahDataPenduduk();
      // set flash data
        $this->session->set_flashdata('flash_tambah_berhasil', 'Berhasil Ditambahkan');
        redirect('DataPenduduk');
      }
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
    $data['title'] = "Ubah Data Penduduk";
    // if($this->uri->segment(3)){
      $this->form_validation->set_rules('nik', 'NIK', 'required');
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
      $nik = $this->uri->segment(3);
      // var_dump($nik);die;
      // var_dump($this->M_Operator->ubahDataPenduduk($nik)); die;
      if ($this->form_validation->run() == FALSE){
        $data['penduduk'] = $this->M_Operator->getSingleData($nik);
        $this->load->view('templates/header_template', $data);
        $this->load->view('ubah_data_penduduk.php', $data);
        $this->load->view('templates/footer_template');
      }else{
        // var_dump($nik);
        // var_dump($this->M_Operator->ubahDataPenduduk($nik));die;
        if ($this->M_Operator->ubahDataPenduduk($nik)==1) {
          $this->session->set_flashdata('flash_ubah', 'Berhasil Diubah');
          redirect('DataPenduduk');

        }else if($this->M_Operator->ubahDataPenduduk($nik) == -1){
          echo "<script>
                alert('NIK Sudah terdaftar!');
                window.location.href=\"http://localhost/sidaad/DataPenduduk\";
          </script>";
          $this->session->set_flashdata('flash_ubah_gagal', 'Gagal Diubah');
          
          
        }else if ($this->M_Operator->ubahDataPenduduk($nik) == 0){
        echo "<script>
                alert('Tidak ada perubahan data!');
                window.location.href=\"http://localhost/sidaad/DataPenduduk\";
          </script>";
        }
      
      }
  }

  public function hapus(){
    $this->M_Operator->hapusDataPenduduk();
    $this->session->set_flashdata('flash_hapus', "dihapus");
    redirect('DataPenduduk');
  }

  // public function test(){
  //   $tesnik = $this->M_Operator->getSingleData('123242534223');
  //   var_dump($tesnik); die;
  // }
}