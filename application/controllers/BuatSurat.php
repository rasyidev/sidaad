<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuatSurat extends CI_Controller{
  public function keteranganStatus(){
    $data['surat'] = "Form Surat Keterangan Status";
    $this->load->view('surat/v_formKetStatus.php', $data);
  }
}