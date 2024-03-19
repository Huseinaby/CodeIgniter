<?php
class Tampil extends CI_Controller {
    public function index(){
        $data["judul"] = "Data Mahasiswa";
        $data["mahasiswa"] = $this->M_tampil->getMahasiswa(); 
        // print_r($data["mahasiswa"]);
        $this->load->view('v_tampil', $data);
    }

    public function mahasiswa(){
        $data["judul"] = "Data Mahasiswa";
        $data["mahasiswa"] = $this->M_tampil->getMahasiswa();
        $this->load->view("tampil/header", $data);
        $this->load->view("tampil/isi");
        $this->load->view("tampil/footer");
    }
}