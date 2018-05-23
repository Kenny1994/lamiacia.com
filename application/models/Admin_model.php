<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends MY_Model
{
    public $table = 'admin';

    /**
     * Get current email in Admin table
     * @param $id
     * @return mixed
     */
    public function get_current_email($id)
    {
        return $this->db->query("SELECT email FROM admin WHERE id = " . $id)->row()->email;
    }

    /**
     * Get current username in Admin table
     * @param $id
     * @return mixed
     */
    public function get_current_username($id)
    {
        return $this->db->query("SELECT username FROM admin WHERE id = " . $id)->row()->username;
    }

    /**
     * Get current password in Admin table
     * @param $id
     * @return mixed
     */
    public function get_current_password($id)
    {
        return $this->db->query("SELECT password FROM admin WHERE id = " . $id)->row()->password;
    }

    /**
     * Get current user id
     * @param $user_name
     * @return mixed
     */
    public function get_current_userid($user_name)
    {
        return $this->db->query("SELECT id FROM admin WHERE username = '" . $user_name . "'")->row()->id;
    }
}
