<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('security');
        $this->lang->load('vi', 'vietnamese');
        $this->load->model('admin_model');
    }

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

        $user_collection = $this->admin_model->get_list($input);
        $total_user = $this->admin_model->get_total($input);

        $this->data['count'] = $total_user;
        $this->data['collection'] = $user_collection;
        $this->data['temp'] = 'admin/user/index';
        $this->data['message'] = $this->session->flashdata('message');

        $this->load->view('admin/main', $this->data);
    }

    /**
     * Action add cua controller user
     */
    public function add()
    {

        //neu co du lieu post len de ktra
        if ($this->input->post()) {

            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[30]|trim|xss_clean|is_unique[admin.username]');
            $this->form_validation->set_rules('name', 'Full Name', 'required|min_length[3]|max_length[14]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean|is_unique[admin.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|xss_clean');
            $this->form_validation->set_rules('re-password', 'Re-Password', 'required|matches[password]|xss_clean');
            $this->form_validation->set_rules('current_password', 'Current User Password', 'required');
            //nhap lieu chinh xac
            if ($this->form_validation->run()) {

                $this->form_validation->set_rules('current_password', 'Current User Password', 'callback_check_password');

                if ($this->form_validation->run()) {
                    //them vao csdl
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
        //xoa du lieu
        if ($this->admin_model->delete($id)) {
            $this->session->set_flashdata('message', 'Xoá quản trị viên có mã `' . $id . '` thành công');
        } else {
            $this->session->set_flashdata('message', 'Xóa quản trị viên có mã `' . $id . '` không thành công');
        }
        //tro ve trang danh sach user
        redirect(get_admin_url('user'));
    }

    /**
     * Edit admin information form
     */
    public function edit()
    {
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

            $current_user = $this->admin_model->get_current_username($id);
            $is_username_unique = ($this->input->post('username') != $current_user) ? '|is_unique[admin.username]' : '';

            $current_email = $this->admin_model->get_current_email($id);
            $is_email_unique = ($this->input->post('email') != $current_email) ? '|is_unique[admin.email]' : '';

            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[30]|trim|xss_clean' . $is_username_unique);
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean' . $is_email_unique);
            $this->form_validation->set_rules('name', 'Full Name', 'required|min_length[3]|max_length[14]');
            $this->form_validation->set_rules('new_password', 'New Password', 'min_length[6]|xss_clean');
            $this->form_validation->set_rules('re_new_password', 'Re-New Password', 'matches[new_password]|xss_clean');
            $this->form_validation->set_rules('current_password', 'Current User Password', 'required');

            //nhap lieu chinh xac
            if ($this->form_validation->run()) {

                $this->form_validation->set_rules('current_password', 'Current User Password', 'callback_check_password');

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
                    if (isset($newPassword) && $newPassword) {
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
        }

        $this->data = [
            'temp' => 'admin/user/edit',
            'user' => $userInfo
        ];
        $this->load->view('admin/main', $this->data);

    }

    /**
     * Action logout
     */
    public function logout()
    {
        if ($this->session->userdata('login')) {
            $this->session->unset_userdata('login');
        }
        redirect(get_admin_url('login'));
    }

    /**
     * Check current user password
     * @return bool
     */
    public function check_password()
    {
        $id = $this->session->userdata('login');
        $id = (int)$id;

        $current_password = $this->admin_model->get_current_password($id);
        if (md5($this->input->post('current_password')) == $current_password) {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, "You have entered an invalid password for current user.");
        return false;
    }
}
