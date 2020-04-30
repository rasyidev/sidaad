<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $GLOBALS['data'] = $this->_getInitialData();
  }

  private function _getInitialData(){
    $session_data = $this->session->get_userdata();
    $data['nama_surat_lengkap'] = ["Ket. Belum Menikah", "Ket. Tidak Mampu", "Izin Usaha", "Izin Keramaian", "Ket. Domisili", "Ket. Penghasilan Ortu", "Pengantar SKCK"];
    $data['username'] = $session_data['username'];
    $data['role'] = ($session_data['login']=="1") ? "Administrator" : "Operator";
    return $data;
  }

  public function index(){
    // user filtering
    $data = $this->session->get_userdata();
    ($data['login']=="1") ? $this->admin() : (($data['login']=="2") ? $this->operator() : redirect('auth'));
    // if($data['login']=="1"){
    //   $this->admin();
    // }else if ($data['login']=="2"){
    //   $this->operator();
    // }else{
    //   echo "Gagal Masuk!"; die;
    // }
    
    // var_dump($data); die;
  }

  public function admin(){
    global $data;
    // Unset password to be viewed for reduce vulnarablity
    $data['users'] = $this->M_Admin->getAllUser();
    $data['title'] = "Dashboard Admin";
    // var_dump($data); die;
    // open dashboard admin and send data to it
    $this->load->view('templates/header_template', $data);
    $this->load->view('v_dashboard_admin', $data);
    $this->load->view('templates/footer_template');
  }

  public function operator(){
    global $data;
    // var_dump($this->session->get_userdata());
    // var_dump($data); die;
    $data['title'] = "Dashboard Operator";
    $this->load->view('templates/header_template', $data);
    $this->load->view('v_dashboard');
    $this->load->view('templates/footer_template');
  }

  public function tambahDataUser(){
    global $data;
    $data['title'] = "Tambah Data User";
    $this->form_validation->set_rules('username', "Username", 'required');
    $this->form_validation->set_rules('password', "Password", 'required');
    $this->form_validation->set_rules('repassword', "Ulang Password", 'required|matches[password]');
    if($this->form_validation->run()==FALSE){
      $this->load->view('templates/header_template', $data);
      $this->load->view('form/tambah_data_user');
      $this->load->view('templates/footer_template');
    }else{
      $username = $this->input->post('username');
      $db_username = $this->db->query("Select username from users where username='$username'")->row_array()['username'];
      // var_dump($username);
      // var_dump($db_username); die;
      if($username == $db_username){
        $this->session->set_flashdata('flash_tambah_gagal', 'Gagal Ditambah');
        echo "<script>
                alert('Username Sudah terdaftar, silahkan gunakan username lain!');
                window.location.href=\"http://localhost/sidaad/Dashboard/tampilUser\";
          </script>";
      }else{
        $this->M_Admin->tambahUser();
        // echo "stop";die;
        $this->session->set_flashdata('flash_tambah_berhasil', 'Berhasil');
        redirect('dashboard/tampilUser');
      }
    }
  }

  public function detailUser()
  {
    global $data;
    $data['title'] = "Detail User";
    $user_id = $this->uri->segment(3);
    $data['user'] = $this->M_Admin->getSingleUser();
    $this->load->view('templates/header_template', $data);
    $this->load->view('detail_user', $data);
    $this->load->view('templates/footer_template', $data);
  }

  public function ubahUser()
  {
    global $data;
    $data['daftar_role'] = ["1", "2"];
    $data['title'] = "Ubah Data User";
    $data['user'] = $this->M_Admin->getSingleUser();
    // var_dump($data);die;
    // if($this->uri->segment(3)){
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('repassword', "Ulang Password", 'required|matches[password]');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header_template', $data);
      $this->load->view('ubah_data_user.php', $data);
      $this->load->view('templates/footer_template');
    } else {
      $this->M_Admin->ubahUser();
      $this->session->set_flashdata('flash_ubah', 'Diubah');
      redirect('dashboard/tampilUser');
    }
  }

  public function tampilUser(){
    global $data;
    $data['user'] = $this->M_Admin->getAllUser();
    $data['title'] = "Daftar User";
    $this->load->view('templates/header_template', $data);
    $this->load->view('v_tampil_user', $data);
    $this->load->view('templates/footer_template');
  }

  public function allLog(){
    global $data;
    $session_data = $this->session->get_userdata();
    $data['username'] = $session_data['username'];
    $data['allLog'] = $this->M_Admin->getAllLog();
    $data['title'] = "Log Surat Lengkap";
    // var_dump($data);die;
    $this->load->view('templates/header_template', $data);
    $this->load->view('v_tampil_all_log', $data);
    $this->load->view('templates/footer_template');
  }

  public function hapusUser(){
    $this->M_Admin->hapusUser();
    redirect('dashboard/tampilUser');
  }

}