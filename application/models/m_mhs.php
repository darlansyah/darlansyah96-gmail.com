<?php

class m_mhs extends CI_Model{

  public function get_data(){
    return $this->db->get('tbl_mhs')->result_array();
  }

  public function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  public function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }

  public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function detail_data($id = null){
    $query = $this->db->get_where('tbl_mhs',array('id'=>$id))->result_array();
    return $query;
  }
}

 ?>
