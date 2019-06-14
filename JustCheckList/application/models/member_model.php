<?php
class Member_model extends CI_Model
{
    //untuk menampilkan data
    public function tampil_data()
    {
        return $this->db->get('tb_member');
    }
    //untuk memasukkan data
    public function input_data()
    {
        //kondisi untuk upload foto
        $foto   = $_FILES['foto'];
        if ($foto = '') { } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size']      = '2048';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Mohon Masukkan Foto Anda";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = [
            "id_member" => $this->session->userdata('id', true),
            "nama" => $this->input->post('nama', true),
            "agama" => $this->input->post('agama', true),
            "status" => $this->input->post('status', true),
            "email" => $this->input->post('email', true),
            "noHp" => $this->input->post('noHp', true),
            "alamat" => $this->input->post('alamat', true),
            "negara" => $this->input->post('negara', true),
            "kotakabupaten" => $this->input->post('kotakabupaten', true),
            "kodepos" => $this->input->post('kodepos', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            'foto' => $foto,
        ];

        $this->db->insert('tb_member', $data);
    }

    //untuk hapus data anggota
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //untuk edit data anggota
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    //untuk update data anggota
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    //untuk mengambil file (foto)
    public function ambil_foto($table)
    {
        return $this->db->get($table);
    }

    //untuk detail data anggota
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_member', array('id' => $id))->row();
        return $query;
    }
}
