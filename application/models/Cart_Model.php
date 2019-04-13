<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cart_Model
 *
 * @author riaz
 */
class Cart_Model extends CI_Model {
    public function product_info_product_id($product_id){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id );
        $query=  $this->db->get();
        $result=$query->row();
        return $result;
    }
}
