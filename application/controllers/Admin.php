<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Doctor_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin';

        $data['doctor'] = $this->Doctor_model->getAllDoctor();
        $this->load->view('content/admin/header_user_view', $data);
        $this->load->view('content/admin/sidebar_view', $data);
        $this->load->view('content/admin/topbar_view', $data);
        $this->load->view('content/admin/index', $data);
        $this->load->view('content/admin/footer_user_view');
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['doctor'] = $this->Doctor_model->getAllDoctor();

        $data['title'] = 'Form Tambah Jadwal';
        $this->load->view('content/admin/header_user_view', $data);
        $this->load->view('content/admin/sidebar_view', $data);
        $this->load->view('content/admin/topbar_view', $data);
        $this->load->view('content/admin/tambah', $data);
        $this->load->view('content/admin/footer_user_view');

        // $this->Doctor_model->tambahDataDoctor();
        // redirect('admin');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Jadwal Dokter';
        $data['doctor'] = $this->Doctor_model->getDoctorById($id);
        $this->load->view('content/admin/header_user_view', $data);
        $this->load->view('content/admin/sidebar_view', $data);
        $this->load->view('content/admin/topbar_view', $data);
        $this->load->view('content/admin/detail', $data);
        $this->load->view('content/admin/footer_user_view');
    }

    public function appointment()
    {
        $data['title'] = 'Appoinment';
        $this->load->view('content/admin/header_user_view', $data);
        $this->load->view('content/admin/sidebar_view', $data);
        $this->load->view('content/admin/topbar_view', $data);
        $this->load->view('content/admin/appointment', $data);
        $this->load->view('content/admin/footer_user_view');
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('content/admin/header_user_view', $data);
        $this->load->view('content/admin/sidebar_view', $data);
        $this->load->view('content/admin/topbar_view', $data);
        $this->load->view('content/admin/dashboard', $data);
        $this->load->view('content/admin/footer_user_view');
    }
}
