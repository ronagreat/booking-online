<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doctor extends CI_Controller
{

    public function index()
    {
        $data['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Doctor';
        $this->load->view('core/header_user_view', $data);
        $this->load->view('core/sidebar_view', $data);
        $this->load->view('core/topbar_view', $data);
        $this->load->view('content/doctor/index', $data);
        $this->load->view('core/footer_user_view');
    }
}
