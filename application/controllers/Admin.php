<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author riaz
 */
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');

        if ($admin_id != NULL) {
            redirect('Super_Admin', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = 'Admin Page';
        $this->load->view('admin/admin_login', $data);
    }

    public function admin_login_cheek() {


        $admin_email = $this->input->post('admin_email', TRUE);
        $admin_password = md5($this->input->post('admin_password', TRUE));
        $result = $this->Admin_Model->admin_cheek_info($admin_email, $admin_password);
        if ($result) {
            $sdata = array();
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_name'] = $result->admin_name;

            $this->session->set_userdata($sdata);
            redirect('Super_Admin');
        } else {

            $data = array();
            $data['message'] = 'Your login password or email is invalied';
            $this->session->set_userdata($data);
            redirect('Admin');
        }
    }

}
