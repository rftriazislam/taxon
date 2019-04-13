<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data = array();
        $data['title'] = 'Home Page';
        $data['page_name'] = 'Home';
        $data['banner'] = FALSE;
        $data['breadcrumb'] = FALSE;
        $data['view_product'] = $this->Welcome_Model->set_product_info();
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_banner_s'] = $this->Welcome_Model->set_banner_info();
        $data['view_slider'] = $this->Welcome_Model->set_slider_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/home_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function product_page($category_id) {
        $data = array();
        $data['url_name'] = 'product_page/16';
        $data['title'] = 'Product Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Product';
        $data['banner'] = FALSE;
        $data['all_product_category'] = $this->Welcome_Model->all_product_category_info($category_id);
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/product_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function compare_page($category_id) {
        $data = array();
        $data['url_name'] = 'compare_page/16';
        $data['title'] = 'Compare Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Compare';
        $data['banner'] = FALSE;
        $data['all_product_category'] = $this->Welcome_Model->all_product_category_info($category_id);
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/compare_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function compare_product($product_id) {
        $data = array();
        $data['url_name'] = 'compare_page/16';
        $data['title'] = 'Compare Product';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Compare';
        $data['banner'] = FALSE;
        $data['compare_product'] = $this->Welcome_Model->all_product_compare_info($product_id);
        $data['discount_product'] = $this->Welcome_Model->set_product_info();
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/compare_product_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function about_page() {
        $data = array();
        $data['title'] = 'About Page';
        $data['url_name'] = 'about_page';
        $data['page_name'] = 'About';
        $data['breadcrumb'] = TRUE;
        $data['banner'] = FALSE;
        $data['main_content'] = $this->load->view('master_pages/about_page', '', TRUE);
        $this->load->view('master_page', $data);
    }

    public function all_product() {
        $data = array();
        $data['url_name'] = 'all_product';
        $data['title'] = 'Product Page';
        $data['breadcrumb'] = TRUE;
        $data['name'] = 'All Product ';
        $data['page_name'] = 'All Product';
        $data['banner'] = FALSE;
        $data['all_product_category'] = $this->Welcome_Model->all_product_info();
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/all_product_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function new_product_new() {
        $data = array();
        $data['url_name'] = 'new_product_new';
        $data['title'] = 'Product Page';
        $data['breadcrumb'] = TRUE;
        $data['name'] = 'New Arrivals ';
        $data['page_name'] = 'New Product';
        $data['banner'] = FALSE;
        $data['all_product_category'] = $this->Welcome_Model->all_new_product_new_info();
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/all_product_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function new_product_latest() {
        $data = array();
        $data['url_name'] = 'new_product_latest';
        $data['title'] = 'Product Page';
        $data['breadcrumb'] = TRUE;
        $data['name'] = 'Latest Arrivals ';
        $data['page_name'] = 'Latest Product';
        $data['banner'] = FALSE;
        $data['all_product_category'] = $this->Welcome_Model->all_new_product_latest_info();
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/all_product_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function new_product_old() {
        $data = array();
        $data['url_name'] = 'new_product_old';
        $data['title'] = 'Product Page';
        $data['breadcrumb'] = TRUE;
        $data['name'] = 'Old Arrivals ';
        $data['page_name'] = 'Old Product';
        $data['banner'] = FALSE;
        $data['all_product_category'] = $this->Welcome_Model->all_new_product_old_info();
        $data['select_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/all_product_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function product_details($product_id, $category_id) {
        $data = array();
        $data['url_name'] = 'all_product';
        $data['title'] = 'Product Details Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Product Details';
        $data['banner'] = FALSE;
        $data['related_product'] = $this->Welcome_Model->related_product_info($category_id);
        $data['select_banner'] = $this->Welcome_Model->set_banner_info();
        $data['s_category'] = $this->Welcome_Model->set_category_info();
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['product_detalis'] = $this->Welcome_Model->product_details_info($product_id);
        $data['main_content'] = $this->load->view('master_pages/product_details_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function add_wishlist($product_id) {
        $qty = 1;
        $product_info = $this->Welcome_Model->add_wishlist_info($product_id);
        $data=array(
      'id'  => $product_info->product_id,
       'qty' =>$qty,
          'price' => $product_info->product_new_price,
          'name'  =>$product_info->product_name ,
          'sku'   =>$product_info->product_sku_code,
          'image'  =>$product_info->product_image
          
          ); 
         $this->Welcome_Model->wishlist_by_product_id($data);
          redirect('Welcome/wishlist');
    }



public function wishlist(){
$data = array();
$data['url_name'] = 'wishlist';
$data['title'] = 'Wishlist Page';
$data['breadcrumb'] = TRUE;
$data['page_name'] = 'Wishlist';
$data['banner'] = FALSE;
$data['select_wishlist']=  $this->Welcome_Model->wishlist_information();
$data['view_brand'] = $this->Welcome_Model->set_brand_info();
$data['main_content'] = $this->load->view('master_pages/wishlist_details_page', $data, TRUE);
$this->load->view('master_page', $data);
}
public function remove_wishlist($wishlist_id){
    
         $this->Welcome_Model->delete_wishlist_id_by_wishlist_id_id($wishlist_id);
        redirect('Welcome/wishlist'); 
        
}
public function  add_cart_wishlist($wishlist_id){
      $qty=  $this->input->post('qty',TRUE);
     $product_info=$this->Welcome_Model->select_wishlist_info_by_wishlist_id($wishlist_id);
      $data=array(
      'id'  => $product_info->wishlist_id,
       'qty' =>$qty,
          'price' => $product_info->price,
          'name'  =>$product_info->name ,
          'sku'   =>$product_info->sku,
          'image'  =>$product_info->image
          
          ); 
     
      
       $this->cart->insert($data);
        
       redirect('Cart/show_cart');
       
      
       
      
       
       
    }



}
