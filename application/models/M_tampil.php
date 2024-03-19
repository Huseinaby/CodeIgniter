<?php
class M_tampil extends CI_model {
    function getMahasiswa(){
        $query = $this->db->get('mahasiswa')->result_array();
        return $query;
    }
}
?>