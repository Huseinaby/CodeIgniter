<?php
class Tampil extends CI_Controller {
    public function index(){
        $data["judul"] = "Data Mahasiswa";
        $data["mahasiswa"] = $this->M_tampil->getMahasiswa(); 
        // print_r($data["mahasiswa"]);
        $this->load->view('v_tampil', $data);
    }

    public function home() {
        $data["page"] = "home";
        $data["judul"] = "Sistem Informasi Mahasiswa";
        $this->tampilkan($data);
    }

    //fungsi menampilkan daftar mahasiswa
    public function mahasiswa(){
        $data["page"] = "mahasiswa";
        $data["judul"] = "Data Mahasiswa";
        $data["mahasiswa"] = $this->M_tampil->getMahasiswa();
        $this->tampilkan($data);
    }

    //fungsi menambah mahasiswa
    public function tambah_mhs(){
        $data["page"] = "tambah_mhs";
        $data["judul"] = "Tambah Data Mahasiswa";
        $this->form_validation->set_rules('nim','NIM','required');
        $this->form_validation->set_rules('nama','Nama','required');

        if($this->form_validation->run() === FALSE){
            $this->tampilkan($data);
        }
        else {
            $this->M_tampil->setMahasiswa();
            // $this->load->view('news/success');
            $this->mahasiswa();
        }

    }

    //fungsi mengedit mahasiswa
    public function edit_mhs($nim){
        $data["page"] = "edit_mhs";
        $data["judul"] = "Tambah Data Mahasiswa";
        $data["mhs"] = $this->M_tampil->getSatuMahasiswa($nim);
        $this->form_validation->set_rules('nim','NIM','required');
        $this->form_validation->set_rules('nama','Nama','required');

        if($this->form_validation->run() === FALSE){
            $this->tampilkan($data);
        }
        else {
            $this->M_tampil->updateMahasiswa($nim);
            // $this->load->view('news/success');
            $this->mahasiswa();
        }

    }

    //fungsi menghapus mahasiswa
    public function hapus_mhs($nim){
        $this->M_tampil->deleteMahasiswa($nim);
        $this->mahasiswa();
    }

    public function cetak_mhs(){
        $data["judul"] = "Data Mahasiswa";
        $data["mahasiswa"] = $this->M_tampil->getMahasiswa();
        $this->load->view('tampil/cetak', $data);
    }

    public function tampilkan($data){
        $this->load->view("tampil/header", $data);
        $this->load->view("tampil/isi");
        $this->load->view("tampil/footer");
    }
}