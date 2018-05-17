<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('catalog_model');
    }

    /**
     * Lay ra danh sach danh muc san pham
     */
    public function index()
    {
        $input['order'] = array('id', 'DESC');
        $catalogCollection = $this->catalog_model->get_list();
        $totalCatalog = $this->catalog_model->get_total($input);
        $this->data = [
            'count' => $totalCatalog,
            'temp' => 'admin/catalog/index',
            'collection' => $catalogCollection
        ];
        $this->load->view('admin/main', $this->data);
    }

    /**
     * Action add cua controller catalog
     */
    public function add()
    {
        //load
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->lang->load('vi', 'vietnamese');

//        //set vietnamese message
//        $this->form_validation->set_message('required', $this->lang->line('required'));
//        $this->form_validation->set_message('valid_email', $this->lang->line('invalid-email'));
//        $this->form_validation->set_message('matches', $this->lang->line('matches'));
//        $this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));
//
//        //neu co du lieu post len de ktra
//        if ($this->input->post()) {
//
//            $this->form_validation->set_rules('name', 'Tên người dùng', 'required');
//            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
//            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
//            $this->form_validation->set_rules('re-password', 'Re-Password', 'required|matches[password]');
//            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[admin.email]');
//
//            //nhap lieu chinh xac
//            if ($this->form_validation->run()) {
//
//                //them vao csdl
//                $this->load->model('admin_model');
//                $adminInfo = [
//                    'username' => $this->input->post('username'),
//                    'password' => md5($this->input->post('password')),
//                    'name' => $this->input->post('name'),
//                    'email' => $this->input->post('email'),
//                    'phone' => $this->input->post('phone'),
//                    'address' => $this->input->post('address'),
//                ];
//                if ($this->admin_model->create($adminInfo)) {
//                    $this->session->set_flashdata('message', 'Thêm mới quản trị viên thành công');
//                } else {
//                    $this->session->set_flashdata('message', 'Thêm mới quản trị viên không thành công');
//                }
//                redirect(get_admin_url('user'));
//            }
//        }
        $input ['where'] = [
            'parent_id' => 0
        ];
        $catalogParents = $this->catalog_model->get_list($input);

        $this->data = [
            'collection' => $catalogParents,
            'temp' => 'admin/catalog/add'
        ];
        $this->load->view('admin/main', $this->data);
    }
}
