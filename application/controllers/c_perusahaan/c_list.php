<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_list extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - List';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/list');
        $this->load->view('v_perusahaan/footer');
    }
}
