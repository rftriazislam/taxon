<?php

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');

        if ($admin_id == NULL) {
            redirect('Admin', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = 'Home Page';
        $data['body'] = TRUE;
        $data['breadcrumb'] = FALSE;
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/dashboard_page', '', TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

// ---Start---Logout------------------------------------------------------------
    public function logout() {
        $this->session->unset_userdata("admin_id");
        $this->session->unset_userdata("admin_name");
        $data = array();
        $data['message'] = 'You Successfully Logout';
        $this->session->set_userdata($data);
        redirect('Admin');
    }

//---End---Logout--------------------------------------------------------------- 
//---Start---Category-----------------------------------------------------------
    public function add_category() {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Add Category';
        $data['url_name'] = 'add_category';
        $data['page_name'] = 'Add Category';
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_category', '', TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->Super_Admin_Model->save_category_info($data);
        $mess = array();
        $mess['message_category'] = 'You Successfully Save';
        $this->session->set_userdata($mess);
        redirect('Super_Admin/add_category');
    }

    public function manage_category() {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Manage Category';
        $data['url_name'] = 'manage_category';
        $data['page_name'] = 'Manage Category';
        $data['manage_category'] = $this->Super_Admin_Model->manage_category_info();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/manage_category', $data, TRUE);

        $this->load->view('admin/admin_master_page', $data);
    }

    public function edit_category($category_id) {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Edit Category';
        $data['url_name'] = 'manage_category';
        $data['page_name'] = 'Edit Category';
        $data['select_category'] = $this->Super_Admin_Model->edit_category_info($category_id);
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/edit_category', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function published_category($category_id) {
        $this->Super_Admin_Model->published_category_info($category_id);
        redirect('Super_Admin/manage_category');
    }

    public function unpublished_category($category_id) {
        $this->Super_Admin_Model->unpublished_category_info($category_id);
        redirect('Super_Admin/manage_category');
    }

    public function update_category() {
        $category_id = $this->input->post('category_id', TRUE);
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->Super_Admin_Model->update_category($data, $category_id);
        redirect('Super_Admin/manage_category');
    }

    public function delete_category($category_id) {

        $this->Super_Admin_Model->delete_category_info($category_id);
        redirect('Super_Admin/manage_category');
    }

//---End---Category-------------------------------------------------------------  
//-----Start---Manufacture------------------------------------------------------
    public function add_manufacture() {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Add Manufacture';
        $data['url_name'] = 'add_manufacture';
        $data['page_name'] = 'Add Manufacture';
        $data['id_category'] = $this->Super_Admin_Model->category_id_info();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_manufacture', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function save_manufacture() {
        $data = array();
        $data['manufacture_name'] = $this->input->post('manufacture_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);

        $data['manufacture_description'] = $this->input->post('manufacture_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);


//      Start File Upload

        $config['upload_path'] = 'asset/back_end/manufacture_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('manufacture_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_manufacture');
        } else {
            $fdata = $this->upload->data();
            $data['manufacture_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload


        $this->Super_Admin_Model->save_manufacture_info($data);

        $sdata = array();
        $sdata['msg'] = "Manufacture Information Save Successfully";
        $this->session->set_userdata($sdata);
        redirect("Super_Admin/add_manufacture");
    }

    public function manage_manufacture() {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Manage Manufacture';
        $data['url_name'] = 'manage_manufacture';
        $data['page_name'] = 'Manage Manufacture';
        $data['manage_manufacture'] = $this->Super_Admin_Model->manage_manufacture_info();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/manage_manufacture', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function published_manufacture($manufacture_id) {
        $this->Super_Admin_Model->published_manufacture_info($manufacture_id);
        redirect('Super_Admin/manage_manufacture');
    }

    public function unpublished_manufacture($manufacture_id) {
        $this->Super_Admin_Model->unpublished_manufacture_info($manufacture_id);
        redirect('Super_Admin/manage_manufacture');
    }

    public function edit_manufacture($manufacture_id) {

        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Edit Manufacture';
        $data['url_name'] = 'manage_manufacture';
        $data['page_name'] = 'Edit Manufacture';
         $data['id_category'] = $this->Super_Admin_Model->category_id_info();
        $data['select_manufacture'] = $this->Super_Admin_Model->edit_manufacture_info($manufacture_id);
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/edit_manufacture', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function update_manufacture() {
        $data = array();
        $manufacture_id = $this->input->post('manufacture_id', TRUE);
        $data['manufacture_name'] = $this->input->post('manufacture_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['manufacture_description'] = $this->input->post('manufacture_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);


//      Start File Upload

        $config['upload_path'] = 'asset/back_end/manufacture_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('manufacture_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_manufacture');
        } else {
            $fdata = $this->upload->data();
            $data['manufacture_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload


        $this->Super_Admin_Model->update_manufacture_info($data, $manufacture_id);

        redirect('Super_admin/manage_manufacture');
    }

    public function delete_manufacture($manufacture_id) {
        $this->Super_Admin_Model->delete_manufacture_info($manufacture_id);
        redirect('Super_Admin/manage_manufacture');
    }

//-------------------------------End Manufacturer-------------------------------
    //-----start---Product------------------------------------------------------
    public function add_product() {
      // $category_id = $_GET['category_id'];
  
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Add Product';
        $data['url_name'] = 'add_product';
        $data['page_name'] = 'Add Product';
        $data['all_category'] = $this->Super_Admin_Model->category__view_product_page();
        $data['all_manufacture'] = $this->Super_Admin_Model->manufacture__view_product_page();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_product_page', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function save_product() {
        $data = array();
        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['manufacture_id'] = $this->input->post('manufacture_id', TRUE);
        $data['product_new_price'] = $this->input->post('product_new_price', TRUE);
        $data['product_old_price'] = $this->input->post('product_old_price', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $data['product_sku_code'] = $this->input->post('product_sku_code', TRUE);
        $data['product_service'] = $this->input->post('product_service', TRUE);
        $data['product_description'] = $this->input->post('product_description', TRUE);
        $data['product_discount'] = $this->input->post('product_discount', TRUE);
        $data['new_product'] = $this->input->post('new_product', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
    
        
        
        
        
        
        
        
        
        
        
        
        
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/product_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_product');
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload


     
        $this->Super_Admin_Model->save_product_info($data);
        $sdata = array();
        $sdata['msg'] = "Product Information Save Successfully";
        $this->session->set_userdata($sdata);

        redirect('Super_Admin/add_product');


        //-----end-------file upload-----
    }

    public function manage_product() {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Manage Product';
        $data['url_name'] = 'manage_product';
        $data['page_name'] = 'Manage Product';
        $data['manage_product'] = $this->Super_Admin_Model->manage_product_info();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/manage_product', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function published_product($product_id) {
        $this->Super_Admin_Model->published_product_info($product_id);
        redirect('Super_Admin/manage_product');
    }

    public function unpublished_product($product_id) {
        $this->Super_Admin_Model->unpublished_product_info($product_id);
        redirect('Super_Admin/manage_product');
    }

    public function edit_product($product_id) {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Edit Product';
        $data['url_name'] = 'manage_product';
        $data['page_name'] = 'Edit Product';
        $data['all_category'] = $this->Super_Admin_Model->category__view_product_page();
        $data['all_manufacture'] = $this->Super_Admin_Model->manufacture__view_product_page();
        $data['select_product'] = $this->Super_Admin_Model->edit_product_info($product_id);
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/edit_product_page', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function update_product() {
        $product_id = $this->input->post('product_id', TRUE);
        $data = array();
        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['manufacture_id'] = $this->input->post('manufacture_id', TRUE);
        $data['product_new_price'] = $this->input->post('product_new_price', TRUE);
        $data['product_old_price'] = $this->input->post('product_old_price', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $data['product_sku_code'] = $this->input->post('product_sku_code', TRUE);
        $data['product_service'] = $this->input->post('product_service', TRUE);
        $data['product_description'] = $this->input->post('product_description', TRUE);
        $data['product_discount'] = $this->input->post('product_discount', TRUE);
        $data['new_product'] = $this->input->post('new_product', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);


      
        
        
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/product_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_product');
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload






        $this->Super_Admin_Model->update_product_info($data, $product_id);
        redirect('Super_Admin/manage_product');
    }

    public function delete_product($product_id) {
        $this->Super_Admin_Model->delete_product_info($product_id);
        redirect('Super_Admin/manage_product');
    }

    //-----End---Product--------------------------------------------------------
    //-----start---slider-------------------------------------------------------
    public function add_slider() {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Add Slider';
        $data['url_name'] = 'add_slider';
        $data['page_name'] = 'Add Slider';
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_slider_page', '', TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    public function save_slider() {
        $data = array();
        $data['slider_name'] = $this->input->post('slider_name', TRUE);
        $data['new_slider'] = $this->input->post('new_slider', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

    
       
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/slider_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('slider_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_slider');
        } else {
            $fdata = $this->upload->data();
            $data['slider_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload

        
        
        
        
        $this->Super_Admin_Model->save_slider_info($data);
        $sdata = array();
        $sdata['msg'] = "Product Information Save Successfully";
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/add_slider');
    }

    public function manage_slider() {
        $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Manage Slider';
        $data['url_name'] = 'manage_slider';
        $data['page_name'] = 'Manage Slider';
        $data['manage_slider'] = $this->Super_Admin_Model->manage_slider_info();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/manage_slider_page', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }
    public function published_slider($slider_id){
        $this->Super_Admin_Model->published_slider_info($slider_id);
        redirect('Super_Admin/manage_slider');
    }
    public function unpublished_slider($slider_id){
        $this->Super_Admin_Model->unpublished_slider_info($slider_id);
        redirect('Super_Admin/manage_slider');
    }
    public function edit_slider($slider_id){
         $data = array();
        $data['body'] = FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Edit Slider';
        $data['url_name'] = 'manage_slider';
        $data['page_name'] = 'Edit Slider';
        $data['select_slider']=  $this->Super_Admin_Model->edit_slider_if($slider_id);
       $data['admin_main_content'] = $this->load->view('admin/admin_pages/edit_slider_page',$data, TRUE);
       $this->load->view('admin/admin_master_page',$data);
    }
    public function update_slider(){
        $slider_id=  $this->input->post('slider_id',TRUE);
        $data=array();
        $data['slider_name']=  $this->input->post('slider_name',TRUE);
        $data['new_slider']=  $this->input->post('new_slider',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
            
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/slider_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('slider_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_slider');
        } else {
            $fdata = $this->upload->data();
            $data['slider_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload

        
        
        
        $this->Super_Admin_Model->update_slider_info($slider_id,$data);
        $sdata=array();
        $sdata['msg']='Your Data Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/manage_slider');
        
        
        
        //------end file-------------------------
    }

    public function delete_slider($slider_id) {
        $this->Super_Admin_Model->delete_slider_info($slider_id);
        redirect('Super_Admin/manage_slider');
    }

    //----end------slider-------------------------------------------------------
   
    //------------start Banner--------------------------------------------------
    public function add_banner(){
        $data=array();
        $data['body']=FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Add Banner';
        $data['url_name'] = 'add_banner';
        $data['page_name'] = 'Add Banner';
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_banner_page', '', TRUE);
        $this->load->view('admin/admin_master_page', $data);
        
    }
    public function save_banner(){
        $data=array();
        $data['banner_name']=  $this->input->post('banner_name',TRUE);
        $data['banner_type']=  $this->input->post('banner_type',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
            
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/banner_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('banner_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_banner');
        } else {
            $fdata = $this->upload->data();
            $data['banner_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload

        
        $this->Super_Admin_Model->save_banner_info($data);
        $sdata['msg']='Successfully Save Information';
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/add_banner');
    }
    
    public function manage_banner(){
       $data = array();
        $data['body'] = FALSE;
         $data['breadcrumb'] = TRUE;
        $data['title'] = 'Manage Banner';
        $data['url_name'] = 'manage_page';
        $data['page_name'] = 'Manage Banner';
       $data['manage_banner']=  $this->Super_Admin_Model->manage_banner_info();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/manage_banner_page', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data); 
    }
    public function published_banner($banner_id){
        $this->Super_Admin_Model->published_banner_info($banner_id);
        redirect('Super_Admin/manage_banner');
    }
    public function unpublished_banner($banner_id){
        $this->Super_Admin_Model->unpublished_banner_info($banner_id);
        redirect('Super_Admin/manage_banner');
    }
    public function edit_banner($banner_id){
        $data = array();
        $data['body'] = FALSE;
         $data['breadcrumb'] = TRUE;
        $data['title'] = 'Edit Banner';
        $data['url_name'] = 'manage_page';
        $data['page_name'] = 'Edit Banner';
       $data['select_banner']=  $this->Super_Admin_Model->edit_banner_info($banner_id);
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/edit_banner_page', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);  
    }
    public function update_banner(){
        $banner_id =  $this->input->post('banner_id',TRUE);
        $data=array();
           $data['banner_name'] =  $this->input->post('banner_name',TRUE);
           $data['banner_type'] =  $this->input->post('banner_type',TRUE);
           $data['publication_status'] =  $this->input->post('publication_status',TRUE);
           
                     
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/banner_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('banner_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_banner');
        } else {
            $fdata = $this->upload->data();
            $data['banner_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload

        $this->Super_Admin_Model->update_banner_info($banner_id,$data);  
        redirect('Super_Admin/manage_banner');
           //---------end upload file------------
         
    }
        
        


    public function delete_banner($banner_id){
        $this->Super_Admin_Model->delete_banner_info($banner_id);
        redirect('Super_Admin/manage_banner');
    }
   public function top_banner($banner_id){
       $this->Super_Admin_Model->top_banner_info($banner_id);
        redirect('Super_Admin/manage_banner'); 
   }
    
   public function middle_banner($banner_id){
       $this->Super_Admin_Model->middle_banner_info($banner_id);
        redirect('Super_Admin/manage_banner'); 
   }
   public function left_botom_banner($banner_id){
       $this->Super_Admin_Model->left_botom_banner_info($banner_id);
        redirect('Super_Admin/manage_banner'); 
   }
   public function right_botom_banner($banner_id){
       $this->Super_Admin_Model->right_botom_banner_info($banner_id);
        redirect('Super_Admin/manage_banner'); 
   }


        
        
        
        
           //----------end banner------------
      
    
        
        
        
    //------------start Brand--------------------------------------------------
 public function add_brand(){
        $data=array();
        $data['body']=FALSE;
        $data['breadcrumb'] = TRUE;
        $data['title'] = 'Add Brand';
        $data['url_name'] = 'add_brand';
        $data['page_name'] = 'Add Brand';
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_brand_page', '', TRUE);
        $this->load->view('admin/admin_master_page', $data);
        
    }
    public function save_brand(){
        $data=array();
        $data['brand_name']=  $this->input->post('brand_name',TRUE);
        $data['brand_type']=  $this->input->post('brand_type',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
            
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/brand_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('brand_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_brand');
        } else {
            $fdata = $this->upload->data();
            $data['brand_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload

        
        $this->Super_Admin_Model->save_brand_info($data);
        $sdata['msg']='Successfully Save Information';
        $this->session->set_userdata($sdata);
        redirect('Super_Admin/add_brand');
    }
    
    public function manage_brand(){
       $data = array();
        $data['body'] = FALSE;
         $data['breadcrumb'] = TRUE;
        $data['title'] = 'Manage Brand';
        $data['url_name'] = 'manage_page';
        $data['page_name'] = 'Manage Brand';
       $data['manage_brand']=  $this->Super_Admin_Model->manage_brand_info();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/manage_brand_page', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data); 
    }
    public function published_brand($brand_id){
        $this->Super_Admin_Model->published_brand_info($brand_id);
        redirect('Super_Admin/manage_brand');
    }
    public function unpublished_brand($brand_id){
        $this->Super_Admin_Model->unpublished_banner_info($brand_id);
        redirect('Super_Admin/manage_brand');
    }
    public function edit_brand($brand_id){
        $data = array();
        $data['body'] = FALSE;
         $data['breadcrumb'] = TRUE;
        $data['title'] = 'Edit Brand';
        $data['url_name'] = 'manage_page';
        $data['page_name'] = 'Edit Brand';
       $data['select_brand']=  $this->Super_Admin_Model->edit_brand_info($brand_id);
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/edit_brand_page', $data, TRUE);
        $this->load->view('admin/admin_master_page', $data);  
    }
    public function update_brand(){
        $brand_id =  $this->input->post('brand_id',TRUE);
        $data=array();
           $data['brand_name'] =  $this->input->post('brand_name',TRUE);
           $data['brand_type'] =  $this->input->post('brand_type',TRUE);
           $data['publication_status'] =  $this->input->post('publication_status',TRUE);
           
                     
//      Start File Upload

        $config['upload_path'] = 'asset/back_end/brand_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();


        if (!$this->upload->do_upload('brand_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/add_brand');
        } else {
            $fdata = $this->upload->data();
            $data['brand_image'] = $config['upload_path'] . $fdata['file_name'];
        }


        // End File Upload

        $this->Super_Admin_Model->update_brand_info($brand_id,$data);  
        redirect('Super_Admin/manage_brand');
    }
        

//---------end upload file------------
    
    
public function delete_brand($brand_id){
        $this->Super_Admin_Model->delete_brand_info($brand_id);
        redirect('Super_Admin/manage_brand');
    }




    //------------end Brand----------------------------------------------------
    public function message_page() {
        $data = array();
        $data['body'] = FALSE;
        $data['title'] = 'Message Page';
        $data['url_name'] = 'message_page';
        $data['page_name'] = 'Message';
        $data['breadcrumb'] = TRUE;
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/message_page', '', TRUE);
        $this->load->view('admin/admin_master_page', $data);
    }

    
    
    public function server() {
         $q = $_REQUEST["category_id"];
         $data['all_manufacture'] = $this->Super_Admin_Model->manufacture__view_product_page($q);
        print_r($q);
        exit();
        
  
        

    } 
    
    
    
    
    
    
    
    
    
    
    
    
}
