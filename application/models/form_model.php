<?php
class form_model extends CI_Model
{
    public function GetFormJoin($id)
    {
        $this->db->select('*');
        $this->db->from('form_pelamaran');
        $this->db->join('reg_perusahaan', 'reg_perusahaan.id_perusahaan = form_pelamaran.id_perusahaan', 'left');
        $this->db->where('reg_perusahaan.id_perusahaan', $id);
        return $this->db->get()->result();
    }
}
