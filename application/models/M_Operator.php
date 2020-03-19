<?php 
class M_Operator extends CI_Model{
  public function getAllData(){
    return $this->db->get('data_penduduk')->row_array();
  }
}