<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_profile_perusahaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('perusahaan_model');
    }

    public function index($id)
    {
        $data['perusahaan'] = $this->perusahaan_model->GetPerusahaanById($id);
        $data['title'] = 'JOBBLY - Profil';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/profile_perusahaan', $data);
        $this->load->view('v_perusahaan/footer');
    }
}
