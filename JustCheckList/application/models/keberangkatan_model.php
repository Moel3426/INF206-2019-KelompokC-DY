<?php

class keberangkatan_model extends CI_Model
{
    public function getAnggotaIkutByIdKapal($idKapal)
    {
        $this->db->where('id_kapal', $idKapal);
        $this->db->select('anggota');
        return $this->db->get('keberangkatan')->result();
    }

    public function getDataById($idKapal)
    {
        $this->db->where('id_kapal', $idKapal);
        return $this->db->get('keberangkatan')->result();
    }
}
