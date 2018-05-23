<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    /**
     * @var array
     */
    public $data = [];

    /**
     * MY_Controller constructor.
     */
    function __construct()
    {

        parent::__construct();
        $this->check_controller();
        $this->load->helper('common');
    }

    /**
     * Check controller
     */
    function check_controller()
    {
        $controller = $this->uri->segment(1);

        switch ($controller) {
            case 'admin':
                $this->load->helper('admin');
                $this->_check_login();
                break;
            default:
                die('khong fai trang admin');
                break;
        }
    }

    /**
     * Kiem tra trang thai dang nhap cua user admin
     */
    private function _check_login()
    {
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);

        $login = $this->session->userdata('login');

        //neu ma chua dang nhap, ma truy cap vao 1 controller khac login
        if (!$login && $controller != 'login') {
            redirect(get_admin_url('login'));
        }
        //neu admin da dang nhap thi ko cho vao trang login nua
        if ($login && $controller =='login'){
            redirect(get_admin_url());
        }
    }
}
