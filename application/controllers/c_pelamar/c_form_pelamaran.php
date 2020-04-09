<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_form_pelamaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelamar_model');
        $this->load->model('loker_model');
    }

    public function index($id)
    {
        $data['loker'] = $this->loker_model->GetLokerById($id);
        $data['title'] = 'JOBBLY - Form Pelamaran';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/form_pelamaran', $data);
        $this->load->view('v_pelamar/footer');
    }
}
