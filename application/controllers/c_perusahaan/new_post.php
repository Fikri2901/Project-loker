<?php
defined('BASEPATH') or exit('No direct script access allowed');

class new_post extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Post Loker';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/new_post');
        $this->load->view('v_perusahaan/footer');
    }
}
