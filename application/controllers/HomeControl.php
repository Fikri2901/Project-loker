<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeControl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('loker_model');
    }


    public function index()
    {
        $data['loker'] = $this->loker_model->GetLoker()->result();
        $data['title'] = 'JOBBLY - Home';
        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
}
