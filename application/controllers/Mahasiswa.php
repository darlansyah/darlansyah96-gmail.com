<?php

class Mahasiswa extends CI_Controller{

  public function index(){
    $this->load->model('m_mhs');
    $data['mahasiswa'] = $this->m_mhs->get_data();

    $this->load->view('v_mhs',$data);
  }
  public function tambah_aksi(){
    $this->load->model('m_mhs');

    // cara pertama
    // $post = $this->input->post();
    // end  cara pertama

    // cara ke dua
     $nama  = $this->input->post('nama');
     $nim  = $this->input->post('nim');
     $alamat  = $this->input->post('alamat');

    $data = array(
      'nama' => $nama,
      'nim' => $nim,
      'alamat' => $alamat
    );
    // end cara ke dua

    // kirim ke model
    $this->m_mhs->input_data($data,'tbl_mhs');
    redirect('mahasiswa/index');
  }

  public function edit($id){
    $where = array('id' => $id);
    $data['mahasiswa']= $this->m_mhs->edit_data($where,'tbl_mhs')->result_array();
    $this->load->view('v_edit',$data);

  }

  public function update_aksi($id){
    $where = array('id'=> $id);

    $nama = $this->input->post('nama');
    $nim = $this->input->post('nim');
    $alamat = $this->input->post('alamat');

    $data = array(
      'nama' => $nama,
      'nim' => $nim,
      'alamat' => $alamat
    );

    $this->m_mhs->update_data($where,$data,'tbl_mhs');
    redirect('mahasiswa/index');
  }

  public function hapus($id){
    $where = array('id' => $id);
    // kirim ke model
    $this->m_mhs->hapus_data($where,'tbl_mhs');
    redirect('mahasiswa/index');
  }



}

 ?>
