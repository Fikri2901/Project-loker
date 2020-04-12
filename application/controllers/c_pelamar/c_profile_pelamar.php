<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_profile_pelamar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('pelamar_model');
    }

    public function index($id)
    {
        $data['pelamar'] = $this->pelamar_model->GetPelamarById($id);
        $data['title'] = 'JOBBLY - Profil';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/profile_pelamar', $data);
        $this->load->view('v_pelamar/footer');
    }
}
