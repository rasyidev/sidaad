<?php 
class M_Operator extends CI_Model{
  public function getAllData(){
    return $this->db->get('data_penduduk')->result_array();
  }
  public function getDataSearch($key){
    $keys = ['nik' => $key, 'nama' => $key, 'alamat' => $key, 'pekerjaan' => $key];
    return  $this->db->select('*')->from('data_penduduk')->or_like($keys)->get()->result_array();
  }

  public function tambahDataPenduduk(){
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $ttl = $this->input->post('ttl');
    $agama = $this->input->post('agama');
    $jkel = $this->input->post('jkel');
    $kewarganegaraan = $this->input->post('kewarganegaraan');
    $status = $this->input->post('status');
    $pekerjaan = $this->input->post('pekerjaan');
    $alamat = $this->input->post('alamat');

    $data = ['nik' => $nik, 'nama' => $nama, 'ttl' => $ttl, 'agama' => $agama, 'jkel' => $jkel, 'kewarganegaraan' => $kewarganegaraan, 'status' => $status, 'pekerjaan' => $pekerjaan, 'alamat' => $alamat];
    $this->db->insert('data_penduduk', $data);
    
  //   if($this->db->affected_rows($this->db->insert('data_penduduk', $data))){
  //     echo "data berhasil ditambahkan";
  //   }else{
  //     echo "data gagal ditambahkan";
  //   }
  }
}