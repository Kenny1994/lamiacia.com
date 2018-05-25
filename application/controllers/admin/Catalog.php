<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('catalog_model');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    /**
     * Lay ra danh sach danh muc san pham
     */
    public function index()
    {
        $total_rows = $this->catalog_model->get_total();
        $config = [
            'total_rows' => $total_rows,
            'base_url' => get_admin_url('catalog'),
            'per_page' => 10,
            'uri_segment' => 4,
            'next_link' => '>',
            'prev_link' => '<',
            'use_page_numbers' => true,
            'page_query_string' => true,
            'query_string_segment' => 'page'
        ];
        $this->pagination->initialize($config);
        $segment = $this->input->get('page');
        $segment = intval($segment);
        if ($segment > 0) {
            $segment = $segment - 1;
        }
        $input['limit'] = array($config['per_page'], $segment * $config['per_page']);
        $input['order'] = array('id', 'DESC');
        $list = $this->catalog_model->get_list($input);
        $this->data['count'] = $total_rows;
        $this->data['temp'] = 'admin/catalog/index';
        $this->data['collection'] = $list;
        $this->data['message'] = $this->session->flashdata('message');

        $this->load->view('admin/main', $this->data);
    }

    /**
     * Action add cua controller catalog
     */
    public function add()
    {
        $input ['where'] = [
            'parent_id' => 0
        ];
        $catalogParents = $this->catalog_model->get_list($input);

        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Category Name', 'required');
            $this->form_validation->set_rules('sort_order', 'Position', 'required|numeric');
            if ($this->form_validation->run()) {
                $updatedInfo = [
                    'name' => $this->input->post('name'),
                    'site_title' => $this->input->post('site_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'meta_key' => $this->input->post('meta_key'),
                    'parent_id' => $this->input->post('parent_id'),
                    'sort_order' => (int)$this->input->post('sort_order'),
                ];
                if ($this->catalog_model->create($updatedInfo)) {
                    $this->session->set_flashdata('message', '<i class=" mdi mdi-window-close text-success"></i><span class="text-success"> You saved the category.</span>');
                } else {
                    $this->session->set_flashdata('message', '<i class=" mdi mdi-window-close text-danger"></i><span class="text-danger"> There are something wrong while saving the category.</span>');
                }
                redirect(get_admin_url('catalog'));
            }
        }
        $this->data['collection'] = $catalogParents;
        $this->data['temp'] = 'admin/catalog/add';
        $this->load->view('admin/main', $this->data);
    }

    public function edit()
    {
        $input ['where'] = [
            'parent_id' => 0
        ];
        $catalogParents = $this->catalog_model->get_list($input);
        $id = $this->uri->rsegment(3);
        $id = (int)$id;

        $catalogInfo = $this->catalog_model->get_info($id);

        if (!$catalogInfo) {
            $this->session->set_flashdata('message', '<i class=" mdi mdi-window-close text-danger"></i><span class="text-danger"> This category is not exist.</span>');
            redirect(get_admin_url('catalog'));
        }
        if ($this->input->post()) {

            $this->form_validation->set_rules('name', 'Tên danh mục', 'required');
            $this->form_validation->set_rules('sort_order', 'Thứ tự hiển thị', 'required|numeric');

            if ($this->form_validation->run()) {
                $updatedInfo = [
                    'name' => $this->input->post('name'),
                    'site_title' => $this->input->post('site_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'meta_key' => $this->input->post('meta_key'),
                    'parent_id' => $this->input->post('parent_id'),
                    'sort_order' => (int)$this->input->post('sort_order'),
                ];
                if ($this->catalog_model->update($id, $updatedInfo)) {
                    $this->session->set_flashdata('message', '<i class="mdi mdi-check-all text-success"></i><span class="text-success"> You saved the category.</span>');
                } else {
                    $this->session->set_flashdata('message', '<i class=" mdi mdi-window-close text-danger"></i><span class="text-danger"> There are something wrong while saving the category.</span>');
                }
                redirect(get_admin_url('catalog'));
            }
        }
        $this->data['collection'] = $catalogParents;
        $this->data['temp'] = 'admin/catalog/edit';
        $this->data['catalog'] = $catalogInfo;

        $this->load->view('admin/main', $this->data);
    }

    /**
     * Delete category action
     */
    public function delete()
    {
        $id = $this->uri->rsegment(3);
        if ($this->catalog_model->delete($id)) {
            $this->session->set_flashdata('message', '<i class=" mdi mdi-window-close text-success"></i><span class="text-success"> You deleted the category.</span>');
        } else {
            $this->session->set_flashdata('message', '<i class=" mdi mdi-window-close text-danger"></i><span class="text-danger"> There are something wrong while deleting the category.</span>');
        }
        redirect(get_admin_url('catalog'));
    }
}
