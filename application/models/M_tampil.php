<?php
class M_tampil extends CI_model {

    public function getMahasiswa(){
        $query = $this->db->get('mahasiswa')->result_array();
        return $query;
    }

    public function getSatuMahasiswa($nim){
        $query = $this->db->get_where('mahasiswa', array('nim' => $nim));
        return $query->row_array();
    }

    public function setMahasiswa(){
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat')
        );
        return $this->db->insert('mahasiswa', $data);
    }

    public function updateMahasiswa($nim){
        $data = array(
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat')
        );
        return $this->db->update('mahasiswa', $data, array("nim"=>$nim));
    }

    public function deleteMahasiswa($nim){
        return $this->db->delete("mahasiswa", array("nim"=>$nim));
    }

}
?>