<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->lang->load('vi', 'vietnamese');
        $this->load->model('admin_model');
    }

    // Hàm load form login
    public function index()
    {

        $this->form_validation->set_message('required', $this->lang->line('required'));

        if ($this->input->post()) {
            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run()){
                $this->form_validation->set_rules('login', 'login', 'callback_check_login');
                if ($this->form_validation->run()) {

                    $username = $this->input->post('username');
                    $user_id = $this->admin_model->get_current_userid($username);

                    $this->session->set_userdata('login',$user_id);
                    redirect(get_admin_url());
                }
            }
        }
        $this->load->view('admin/login/index');
    }

    function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $where = [
            'username' => $username,
            'password' => $password
        ];
        if ($this->admin_model->check_exists($where)) {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, "You did not sign in correctly or your account is temporarily disabled.");
        return false;
    }
}
