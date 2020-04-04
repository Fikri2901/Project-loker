<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_profile_perusahaan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Profil';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/profile_perusahaan');
        $this->load->view('v_perusahaan/footer');
    }
}
