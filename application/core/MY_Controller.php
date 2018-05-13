<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    /**
     * @var array
     */
    public $data = [];

    /**
     * MY_Controller constructor.
     */
    function __construct()
    {
        return parent::__construct();
    }

    /**
     * Check controller
     */
    function check_controller()
    {

        $controller = $this->uri->segment(1);

        switch ($controller) {
            case 'admin':
                $this->load->helper('admin');
                break;
            default:
                die('khong fai trang admin');
                break;
        }


    }
}
