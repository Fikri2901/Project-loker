<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeControl extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
}
