<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_form_pelamaran extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Form Pelamaran';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/form_pelamaran');
        $this->load->view('v_pelamar/footer');
    }
}
