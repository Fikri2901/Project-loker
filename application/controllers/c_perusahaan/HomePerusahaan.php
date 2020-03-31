<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomePerusahaan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/home');
        $this->load->view('v_perusahaan/footer');
    }
}
