<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
  public function index(){
    
  }

  public function surat1(){
    $this->load->file(base_url('letter/index-surat-1.php'));
  }
}