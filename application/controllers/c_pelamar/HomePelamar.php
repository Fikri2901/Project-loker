<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomePelamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
    }

    public function index()
    {
        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['title'] = 'JOBBLY - About';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/home');
        $this->load->view('v_pelamar/footer');
    }
}
