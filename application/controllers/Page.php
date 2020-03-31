<?php
class Page extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url();
      redirect($url);
    }

    $this->load->model('pelamar_model');
    $this->load->model('perusahaan_model');
    $this->load->model('loker_model');
    $this->load->helper('url');
    $this->load->helper('form');
  }

  function index()
  {
    $this->load->view('admin/v_dashboard');
  }

  //===========================================================================================================================//

  function data_pelamar()
  {
    $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamar', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function detailPelamar($id)
  {
    $data['pelamar'] = $this->pelamar_model->GetPelamarById($id);
    $this->load->view('admin/detail/v_detail_pelamar', $data);
  }

  function tambahPelamar()
  {
    $this->load->view('admin/tambah/v_tambah_pelamar');
  }

  function tambahDataPelamar()
  {
    $this->pelamar_model->AddPelamar();

    $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamar', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function hapusPelamar($id)
  {
    $this->pelamar_model->deletePelamar($id);

    $data['reg_pelamar'] = $this->pelamar_model->GetPelamar()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamar', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function editPelamar($id)
  {
    $data['pelamar'] = $this->pelamar_model->GetPelamarById($id);
    $this->load->view('admin/edit/v_edit_pelamar', $data);
  }

  function editDataPelamar()
  {
  }

  //===========================================================================================================================//
  function data_perusahaan()
  {
    $data['reg_perusahaan'] = $this->perusahaan_model->GetPerusahaan()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_perusahaan', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function detailPerusahaan($id)
  {
    $data['perusahaan'] = $this->perusahaan_model->GetPerusahaanById($id);
    $this->load->view('admin/detail/v_detail_perusahaan', $data);
  }

  function tambahPerusahaan()
  {
    $this->load->view('admin/tambah/v_tambah_perusahaan');
  }

  function tambahDataPerusahaan()
  {
    $this->perusahaan_model->AddPerusahaan();

    $data['reg_perusahaan'] = $this->perusahaan_model->GetPerusahaan()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_perusahaan', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function hapusPerusahaan($id)
  {
    $this->perusahaan_model->deletePerusahaan($id);

    $data['reg_perusahaan'] = $this->perusahaan_model->GetPerusahaan()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_perusahaan', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  //===========================================================================================================================//

  function data_loker()
  {
    $data['loker'] = $this->loker_model->GetLoker()->result();

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_loker', $data);
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  //===========================================================================================================================//

  function data_pelamaran()
  {

    if ($this->session->userdata('akses') == '1') {
      $this->load->view('admin/v_data_pelamaran');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
