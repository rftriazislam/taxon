<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_Model
 *
 * @author riaz
 */
class Admin_Model extends CI_Model {

    public function admin_cheek_info($admin_email, $admin_password) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email', $admin_email);
       $this->db->where('admin_password', $admin_password);
        $query = $this->db->get();
        $result = $query->row();
       return $result;
    }

}
