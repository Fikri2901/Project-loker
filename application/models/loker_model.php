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
}
