<?php
defined('BASEPATH') or exit('No direct script access allowed');

class list_form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('form_model');
    }

    public function index($id)
    {
        $data['form'] = $this->form_model->GetFormJoin($id);

        $data['title'] = 'JOBBLY - List';
        $this->load->view('v_perusahaan/header', $data);
        $this->load->view('v_perusahaan/list_formulir', $data);
        $this->load->view('v_perusahaan/footer');
    }
}
