<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Doctor';
            $this->load->view('core/header_login_view', $data);
            $this->load->view('content/login_doctor');
            $this->load->view('core/footer_login_view');
        } else {
            // validasi
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $doctor = $this->db->get_where('doctor', ['email' => $email])->row_array();

        if ($doctor) {

            if ($doctor['is_active'] == 1) {
                if (password_verify($password, $doctor['password'])) {
                    $data = [
                        'email' => $doctor['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('doctor');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Wrong Password!
                    </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Email has not been Activated
          </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Email is not registered!
          </div>');
            redirect('login');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You Have Been Logged out!
          </div>');
        redirect('login');
    }
}
