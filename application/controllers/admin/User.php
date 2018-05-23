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

    /**
     * Action index cua controller
     */
    public function index()
    {
        $input['order'] = array('id', 'ASC');
        $this->load->model('admin_model');

        $userCollection = $this->admin_model->get_list($input);
        $totalUser = $this->admin_model->get_total($input);

        $this->data = [
            'count' => $totalUser,
            'collection' => $userCollection,
            'temp' => 'admin/user/index',
            'message' => $this->session->flashdata('message')
        ];

        $this->load->view('admin/main', $this->data);
    }

    /**
     * Action add cua controller user
     */
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

            $this->form_validation->set_rules('name', 'Tên người dùng', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('re-password', 'Re-Password', 'required|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[admin.email]');

            //nhap lieu chinh xac
            if ($this->form_validation->run()) {

                //them vao csdl
                $this->load->model('admin_model');
                $updatedInfo = [
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                ];
                if ($this->admin_model->create($updatedInfo)) {
                    $this->session->set_flashdata('message', 'Thêm mới quản trị viên thành công');
                } else {
                    $this->session->set_flashdata('message', 'Thêm mới quản trị viên không thành công');
                }
                redirect(get_admin_url('user'));
            }
        }

        $this->data = [
            'temp' => 'admin/user/add'
        ];
        $this->load->view('admin/main', $this->data);
    }

    /**
     * Action delete cua controller user
     */
    public function delete()
    {
        $id = $this->uri->rsegment(3);
        //load model
        $this->load->model('admin_model');
        //xoa du lieu
        if ($this->admin_model->delete($id)) {
            $this->session->set_flashdata('message', 'Xoá quản trị viên có mã `' . $id . '` thành công');
        } else {
            $this->session->set_flashdata('message', 'Xóa quản trị viên có mã `' . $id . '` không thành công');
        }
        //tro ve trang danh sach user
        redirect(get_admin_url('user'));
    }

    public function edit()
    {
        //load
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->lang->load('vi', 'vietnamese');
        $this->load->model('admin_model');

        //set tap luat
        $this->form_validation->set_message('required', $this->lang->line('required'));
        $this->form_validation->set_message('valid_email', $this->lang->line('invalid-email'));
        $this->form_validation->set_message('matches', $this->lang->line('matches'));
        $this->form_validation->set_message('is_unique', $this->lang->line('is_unique'));

        //lay id cua quan tri v
        $id = $this->uri->rsegment(3);
        $id = (int)$id;

        $userInfo = $this->admin_model->get_info($id);
        if (!$userInfo) {
            $this->session->set_flashdata('message', 'This user is not exist');
            redirect(get_admin_url('user'));
        }

        //neu co du lieu post len de ktra
        if ($this->input->post()) {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('name', 'Full Name', 'required');
            $this->form_validation->set_rules('new_password', 'New Password', 'min_length[6]');
            $this->form_validation->set_rules('re_new_password', 'Re-New Password', 'matches[new_password]');

            //nhap lieu chinh xac
            if ($this->form_validation->run()) {
                $newPassword = $this->input->post('new_password');
                //them vao csdl
                $updatedInfo = [
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'name' => $this->input->post('name'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                ];
                if (isset($newPassword) && $newPassword){
                    $updatedInfo['password'] = md5($newPassword);
                }
                if ($this->admin_model->update($id, $updatedInfo)) {
                    $this->session->set_flashdata('message', 'Change admin user information successfully');
                } else {
                    $this->session->set_flashdata('message', 'There are something wrong while changing the information');
                }
                redirect(get_admin_url('user'));
            }
        }

        $this->data = [
            'temp' => 'admin/user/edit',
            'user' => $userInfo
        ];
        $this->load->view('admin/main', $this->data);

    }

    public function edit_password()
    {
        //load
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->lang->load('vi', 'vietnamese');
        $this->load->model('admin_model');

        //set tap luat
        $this->form_validation->set_message('required', $this->lang->line('required'));
        $this->form_validation->set_message('matches', $this->lang->line('matches'));

        //lay id cua quan tri v
        $id = $this->uri->rsegment(3);
        $id = (int)$id;

        $userInfo = $this->admin_model->get_info($id);
        if (!$userInfo) {
            $this->session->set_flashdata('message', 'This user is not exist');
            redirect(get_admin_url('user'));
        }

        //neu co du lieu post len de ktra
        if ($this->input->post()) {

            $this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
            $this->form_validation->set_rules('re_new_password', 'Re-New Password', 'required|matches[new_password]');

            //nhap lieu chinh xac
            if ($this->form_validation->run()) {

                //them vao csdl
                $updatedInfo = [
                    'password' => md5($this->input->post('new_password')),
                ];
                if ($this->admin_model->update($id, $updatedInfo)) {
                    $this->session->set_flashdata('message', 'Change password successfully');
                } else {
                    $this->session->set_flashdata('message', 'There are something wrong while changing the password');
                }
                redirect(get_admin_url('user'));
            }
        }

        $this->data = [
            'temp' => 'admin/user/edit_password',
            'user' => $userInfo
        ];
        $this->load->view('admin/main', $this->data);
    }
    /**
     * Action dang xuat
     */
    public function logout()
    {
        if ($this->session->userdata('login'))
        {
            $this->session->unset_userdata('login');
        }
        redirect(get_admin_url('login'));
    }
}
