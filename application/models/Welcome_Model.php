<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome_Model
 *
 * @author riaz
 */
class Welcome_Model extends CI_Model {
    public function set_product_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
       
        
        
    }
    public function product_name_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $query=  $this->db->get();
        $result=$query->result();
         return $result;
     
       
   
    }
  
    
    public function serach_info($serachq){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->like('product_name',$serachq);
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
   
    }
    public function product_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
   
    }
    public function set_category_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function set_banner_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_banner');
        $this->db->where('publication_status',1);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function set_slider_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_slider');
        $this->db->where('publication_status',1);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function set_brand_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_brand');
        $this->db->where('publication_status',1);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function all_product_category_info($category_id){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('category_id',$category_id);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function all_product_compare_info($product_id){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function all_product_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('publication_status',1);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function all_new_product_new_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('new_product',1);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function all_new_product_latest_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('new_product',2);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function all_new_product_old_info(){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('new_product',3);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function product_details_info($product_id){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
         $this->db->join('tbl_manufacture','tbl_product.manufacture_id=tbl_manufacture.manufacture_id');
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function related_product_info($category_id){
        $this->db->select('*'); 
        $this->db->from('tbl_product');
        $this->db->where('category_id',$category_id);
       $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
   //---------------------------------------------start wishlist----------------
   public function add_wishlist_info($product_id){
   $this->db->select('*');
   $this->db->from('tbl_product');
   $this->db->where('product_id', $product_id );
 
   $query = $this->db->get();
   $result = $query->row();
   return $result;
}
public function wishlist_by_product_id($data){
    $this->db->insert('tbl_wishlist',$data);
}
public function wishlist_information(){
$this->db->select('*');
$this->db->from('tbl_wishlist');
$query = $this->db->get();
$result = $query->result();
return $result;
}
public function delete_wishlist_id_by_wishlist_id_id($wishlist_id){
    $this->db->where('wishlist_id',$wishlist_id);
    $this->db->delete('tbl_wishlist');
}
public function ddelete_wishlist_id_by_wishlist_id_id($p){
    $this->db->where('wishlist_id',$p);
    $this->db->delete('tbl_wishlist');
}
public function select_wishlist_info_by_wishlist_id($wishlist_id){
$this->db->select('*');
$this->db->from('tbl_wishlist');
$this->db->where('wishlist_id',$wishlist_id);
$query = $this->db->get();
$result = $query->row();
return $result;
}
    //---------------------------------------------end wishlist-----------------
}
