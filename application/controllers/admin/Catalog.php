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
        $total_rows = $this->catalog_model->get_total();
        $this->load->library('pagination');
        $config = [
            'total_rows' => $total_rows,
            'base_url' => get_admin_url('catalog/index'),
            'per_page' => 10,
            'uri_segment' => 4,
            'next_link' => '>',
            'prev_link' => '<',
            'use_page_numbers' => true
        ];
        //khoi tao cau hinh phan trang
        $this->pagination->initialize($config);
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        if ($segment>0){
            $segment = $segment -1;
        }
        $input['limit'] = array($config['per_page'], $segment*$config['per_page']);
        $input['order'] = array('id', 'DESC');
        $list = $this->catalog_model->get_list($input);
        $this->data = [
            'count' => $total_rows,
            'temp' => 'admin/catalog/index',
            'collection' => $list,
            'message' => $this->session->flashdata('message')
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

        //set vietnamese message
        $this->form_validation->set_message('required', $this->lang->line('required'));
        $this->form_validation->set_message('numeric', $this->lang->line('numeric'));

        $input ['where'] = [
            'parent_id' => 0
        ];
        $catalogParents = $this->catalog_model->get_list($input);

        //neu co du lieu post len de ktra
        if ($this->input->post()) {

            $this->form_validation->set_rules('name', 'Tên danh mục', 'required');
            $this->form_validation->set_rules('sort_order', 'Thứ tự hiển thị', 'required|numeric');

            //nhap lieu chinh xac
            if ($this->form_validation->run()) {

                //them vao csdl
                $updatedInfo = [
                    'name' => $this->input->post('name'),
                    'site_title' => $this->input->post('site_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'meta_key' => $this->input->post('meta_key'),
                    'parent_id' => $this->input->post('parent_id'),
                    'sort_order' => (int)$this->input->post('sort_order'),
                ];
                if ($this->catalog_model->create($updatedInfo)) {
                    $this->session->set_flashdata('message', 'Thêm mới danh mục thành công');
                } else {
                    $this->session->set_flashdata('message', 'Thêm mới danh mục không thành công');
                }
                redirect(get_admin_url('catalog'));
            }
        }

        $this->data = [
            'collection' => $catalogParents,
            'temp' => 'admin/catalog/add'
        ];
        $this->load->view('admin/main', $this->data);
    }

    public function edit()
    {
        //load
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->lang->load('vi', 'vietnamese');

        //set vietnamese message
        $this->form_validation->set_message('required', $this->lang->line('required'));
        $this->form_validation->set_message('numeric', $this->lang->line('numeric'));

        $input ['where'] = [
            'parent_id' => 0
        ];
        $catalogParents = $this->catalog_model->get_list($input);

        //lay id cua danh muc
        $id = $this->uri->rsegment(3);
        $id = (int)$id;

        $catalogInfo = $this->catalog_model->get_info($id);

        if (!$catalogInfo) {
            $this->session->set_flashdata('message', 'Không tồn tại danh muc này');
            redirect(get_admin_url('catalog'));
        }

        //neu co du lieu post len de ktra
        if ($this->input->post()) {

            $this->form_validation->set_rules('name', 'Tên danh mục', 'required');
            $this->form_validation->set_rules('sort_order', 'Thứ tự hiển thị', 'required|numeric');

            //nhap lieu chinh xac
            if ($this->form_validation->run()) {

                //them vao csdl
                $updatedInfo = [
                    'name' => $this->input->post('name'),
                    'site_title' => $this->input->post('site_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'meta_key' => $this->input->post('meta_key'),
                    'parent_id' => $this->input->post('parent_id'),
                    'sort_order' => (int)$this->input->post('sort_order'),
                ];
                if ($this->catalog_model->update($id, $updatedInfo)) {
                    $this->session->set_flashdata('message', 'Sửa thông tin danh muc `' . $id . '` thành công');
                } else {
                    $this->session->set_flashdata('message', 'Sửa thông tin danh muc `' . $id . '` không thành công');
                }
                redirect(get_admin_url('catalog'));
            }
        }

        $this->data = [
            'collection' => $catalogParents,
            'temp' => 'admin/catalog/edit',
            'catalog' => $catalogInfo
        ];
        $this->load->view('admin/main', $this->data);
    }

    public function delete()
    {
        $id = $this->uri->rsegment(3);
        //load model
        $this->load->model('catalog_model');
        //xoa du lieu
        if ($this->catalog_model->delete($id)) {
            $this->session->set_flashdata('message', 'Xoá danh muc có mã `' . $id . '` thành công');
        } else {
            $this->session->set_flashdata('message', 'Xóa danh muc có mã `' . $id . '` không thành công');
        }
        //tro ve trang danh sach user
        redirect(get_admin_url('catalog'));
    }
}
