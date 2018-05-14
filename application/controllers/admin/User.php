<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
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
        $input = array();
        $this->load->model('admin_model');

        $list = $this->admin_model->get_list($input);
        $totalAdmin = $this->admin_model->get_total($input);

        $this->data = [
            'total' => $totalAdmin,
            'list' => $list,
            'temp' => 'admin/user/index',
            'message' =>  $this->session->flashdata('message')
        ];

        $this->load->view('admin/main', $this->data);
    }

    public function add()
    {
        //load
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->lang->load('vi', 'vietnamese');

        //set vietnamese message
        $this->form_validation->set_message('required', $this->lang->line('required'));
        $this->form_validation->set_message('valid_email', $this->lang->line('invalid-email'));
        $this->form_validation->set_message('matches', $this->lang->line('matches'));
        $this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));

        //neu co du lieu post len de ktra
        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Tên', 'required|is_unique[admin.username]');
            $this->form_validation->set_rules('user', 'User', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('re_password', 'Re-Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[admin.email]');

            //nhap lieu chinh xac
            if ($this->form_validation->run()) {
                //them vao csdl
                $this->load->model('admin_model');
                $adminInfo = [
                    'username' => $this->input->post('user'),
                    'password' => md5($this->input->post('password')),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                ];
                if ($this->admin_model->create($adminInfo)) {
                    $this->session->set_flashdata('message','Thêm mới thành công');
                } else {
                    $this->session->set_flashdata('message','Thêm mới không thành công');
                }
                redirect(base_url('admin/admin'));
            }
        }

        $this->data = [
            'title' => 'Thêm mới',
            'subtitle' => 'Thêm mới quản trị viên',
            'temp' => 'admin/admin/add'
        ];
        $this->load->view('admin/main', $this->data);
    }

    public function edit()
    {
        $id = $this->uri->rsegment(3);
        echo $id;
    }
}
