<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loker_model extends CI_Model
{
    public function GetLoker()
    {
        return $this->db->get('loker');
    }

    public function getLokerKeyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('loker');
        $this->db->like('nama_loker', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get()->result();
    }

    public function GetLokerById($id)
    {
        return $this->db->get_where("loker", array('id_loker' => $id))->row();
    }

    public function AddLoker()
    {
        $foto = $this->input->post('nama_loker');

        $config['upload_path']          = './foto_loker';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5024;
        $config['file_name']            = $foto;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error =  $this->upload->display_errors();
            echo $error;
        }

        $upload_data = $this->upload->data();
        $file_name = $upload_data['file_name'];

        $data = array(
            'gambar' => $file_name,
            'nama_loker' => $this->input->post('nama_loker'),
            'alamat' => $this->input->post('alamat'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
        );

        $this->db->insert('loker', $data);

        // $error = $this->db->error();

        // if ($error != null) {
        //     echo "data belum lengkap";
        //     unlink($upload_data['full_path']);
        // } else {
        //     echo "berhasil";
        // }
    }

    function edit_TampilLoker($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function updateDataLoker($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteLoker($id)
    {
        $_id = $this->db->get_where('loker', ['id_loker' => $id])->row();
        $query = $this->db->delete('loker', ['id_loker' => $id]);
        if ($query) {
            unlink("foto_loker/" . $_id->gambar);
        }
    }
}
