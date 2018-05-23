<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('product_model');
    }

    /**
     * Hien thi danh sach san pham
     */
    public function index()
    {
        //lay ra tong so luong tat ca cac san pham trong website
        $total_rows = $this->product_model->get_total();
        //load thu vien phan trang
        $this->load->library('pagination');
        $config = [
            'total_rows' => $total_rows,
            'base_url' => get_admin_url('product/index'),
            'per_page' => 3,
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
        $input['order'] = array('id', 'ASC');
        //lay danh sach san pham
        $list = $this->product_model->get_list($input);

        $this->data = [
            'collection' => $list,
            'count' => $total_rows,
            'temp' => 'admin/product/index',
            'message' => $this->session->flashdata('message')
        ];
        $this->load->view('admin/main', $this->data);
    }
}
