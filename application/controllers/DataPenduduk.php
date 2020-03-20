<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPenduduk extends CI_Controller {
  public function tambah(){
    $this->load->view('form_tambah_penduduk');
  }
}