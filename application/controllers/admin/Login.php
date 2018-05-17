<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    // Hàm load form login
    public function index()
    {
        //load
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->lang->load('vi', 'vietnamese');

        $this->form_validation->set_message('required', $this->lang->line('required'));

        if ($this->input->post()) {
            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run()){
                $this->form_validation->set_rules('login', 'login', 'callback_check_login');
                if ($this->form_validation->run()) {
                    $this->session->set_userdata('login',true);
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

        $this->load->model('admin_model');
        $where = [
            'username' => $username,
            'password' => $password
        ];
        if ($this->admin_model->check_exists($where)) {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, $this->lang->line('login-error'));
        return false;
    }
}
