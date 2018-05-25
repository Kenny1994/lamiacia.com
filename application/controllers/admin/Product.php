<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('catalog_model');
        $this->load->library('pagination');
    }

    /**
     * Hien thi danh sach san pham
     */
    public function index()
    {
        $input = [];
        $filter_id = $this->input->get('product_id');
        $filter_id = intval($filter_id);
        if ($filter_id > 0) {
            $input['where'] = ['id' => $filter_id];
        }
        $filter_name = $this->input->get('product_name');
        if ($filter_name) {
            $input['like'] = array('name', $filter_name);
        }
        $filter_catalog_id = $this->input->get('catalog_id');
        $filter_catalog_id = intval($filter_catalog_id);
        if ($filter_catalog_id > 0) {
            $input['where']['catalog_id'] = $filter_catalog_id;
        }

        $total_rows = $this->product_model->get_total($input);
        $config = [
            'total_rows' => $total_rows,
            'base_url' => get_admin_url('product'),
            'per_page' => 3,
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
        $input['order'] = array('id', 'ASC');

        $list = $this->product_model->get_list($input);

        $input = [];
        $input['where'] = ['parent_id' => 0];
        $cat_list = $this->catalog_model->get_list($input);
        foreach ($cat_list as $row) {
            $input['where'] = ['parent_id' => $row->id];
            $cat_subs = $this->catalog_model->get_list($input);
            $row->subs = $cat_subs;
        }

        $this->data['cat_list'] = $cat_list;
        $this->data['collection'] = $list;
        $this->data['count'] = $total_rows;
        $this->data['temp'] = 'admin/product/index';
        $this->data['message'] = $this->session->flashdata('message');
        $this->load->view('admin/main', $this->data);
    }
}
