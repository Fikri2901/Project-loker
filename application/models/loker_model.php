<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loker_model extends CI_Model
{
    public function GetLoker()
    {
        return $this->db->get('loker');
    }
}
