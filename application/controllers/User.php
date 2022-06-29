<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'User';
        $this->load->view('core/header_user_view', $data);
        $this->load->view('core/sidebar_view', $data);
        $this->load->view('core/topbar_view', $data);
        $this->load->view('content/user/index', $data);
        $this->load->view('core/footer_user_view');
    }
}
