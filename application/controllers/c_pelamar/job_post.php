<?php
defined('BASEPATH') or exit('No direct script access allowed');

class job_post extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Post';
        $this->load->view('v_pelamar/header', $data);
        $this->load->view('v_pelamar/job_post');
        $this->load->view('v_pelamar/footer');
    }
}
