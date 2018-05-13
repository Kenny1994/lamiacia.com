<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{


    public function create()
    {
        $this->load->model('admin_model');
        $data['username'] = 'hoangdeptrai';
        $data['password'] = 'admin1';
        $data['name'] = 'HoangND';
        $data['admin_group_id'] = '1';
        if ($this->admin_model->create($data)) {
            echo 'them thanh cong';
        } else {
            echo 'k thanh cong';
        }
    }

    public function index()
    {
        $this->check_controller();
        $input = array();
        $this->load->model('admin_model');
        $list = $this->admin_model->get_list($input);
        $totalAdmin = $this->admin_model->get_total($input);

        $this->data = [
            'total' => $totalAdmin,
            'list' => $list,
            'title' => 'Admin',
            'subtitle' => 'Quản lý Admin',
            'temp' => 'admin/admin/index',
        ];

        $this->load->view('admin/main', $this->data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->data = [
            'title' => 'Thêm mới',
            'subtitle' => 'Thêm mới quản trị viên',
            'temp' => 'admin/admin/add',
        ];
        $this->load->view('admin/main', $this->data);
    }
}
