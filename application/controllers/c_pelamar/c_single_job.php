<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_single_job extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Detail Pekerjaan';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/single_job');
        $this->load->view('v_pelamar/footer');
    }
}
