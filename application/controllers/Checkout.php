<?php

class Checkout extends CI_Controller {

    public function index() {
        $data['url_name'] = 'Checkout';
        $data['sub_url_name'] = 'show_cart';
        $data['title'] = 'Checkout Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Checkout Page';
        $data['sub_page_name'] = 'Checkout Page';
        $data['banner'] = FALSE;
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();

        $data['main_content'] = $this->load->view('master_pages/checkout_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function create_account() {
        $data['url_name'] = 'create_account';
        $data['sub_url_name'] = 'show_cart';
        $data['title'] = 'Create Account Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Create Account Page';
        $data['sub_page_name'] = 'Create Account Page';
        $data['banner'] = FALSE;
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();

        $data['main_content'] = $this->load->view('master_pages/create_account_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function save_checkout() {
        $data = array();
        $data['customer_frist_name'] = $this->input->post('customer_frist_name', TRUE);
        $data['customer_last_name'] = $this->input->post('customer_last_name', TRUE);

        $data['customer_email'] = $this->input->post('customer_email', TRUE);
        $data['customer_phone'] = $this->input->post('customer_frist_name', TRUE);
        $data['customer_fax'] = $this->input->post('customer_fax', TRUE);

        $data['customer_password'] = md5($this->input->post('customer_password', TRUE));
        $data['customer_confirm_password'] = md5($this->input->post('customer_confirm_password', TRUE));
        $data['customer_city'] = $this->input->post('customer_city', TRUE);
        $data['customer_post_code'] = $this->input->post('customer_post_code', TRUE);
        $data['customer_country'] = $this->input->post('customer_country', TRUE);
        $data['customer_region'] = $this->input->post('customer_region', TRUE);
        $data['customer_address'] = $this->input->post('customer_address', TRUE);

        if ($data['customer_frist_name'] != NULL && $data['customer_last_name'] != NULL && $data['customer_email'] != NULL && $data['customer_phone'] != NULL && $data['customer_password'] != NULL && $data['customer_country'] != NULL && $data['customer_address'] != NULL) {
          $this->Checkout_Model->customer_information($data);
          
          
          $data['customer_frist_name']=$this->input->post('customer_frist_name', TRUE);
           $this->session->set_userdata($data);
            redirect('Checkout/shoping_login');
        } else {
            $msg = array();
            $msg['mess'] = 'Please Full Fill All Information';
            $this->session->set_userdata($msg);
            redirect('Checkout/create_account');
        }
    }

    public function login_confirm() {
        $customer_email = $this->input->post('customer_email', TRUE);
        $customer_password = md5($this->input->post('customer_password', TRUE));

        if ($customer_email != NULL && $customer_password != NULL) {
            $re = $this->Checkout_Model->login_confirm_info($customer_email, $customer_password);

            if ($re) {
                $sdata = array();
                $sdata['customer_id'] = $re->customer_id;
                $sdata['customer_frist_name'] = $re->customer_frist_name;
                $sdata['customer_last_name'] = $re->customer_last_name;
                $this->session->set_userdata($sdata);
                redirect('Checkout/shoping_login');
            } else {
                 $msg['mess'] = 'Please Login Valied Account Or Create Account';
            $this->session->set_userdata($msg);
                redirect('Checkout');
            }
        } else {
            $msg = array();
            $msg['mess'] = 'Please Login Valied Account Or Create Account';
            $this->session->set_userdata($msg);
            redirect('Checkout');
        }
    }

    public function shoping_login() {
        $data['url_name'] = 'shoping_login';
        $data['sub_url_name'] = 'show_cart';
        $data['title'] = 'Shoping Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Shoping  Page';
        $data['sub_page_name'] = 'Create Account Page';
        $data['banner'] = FALSE;
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();

        $data['main_content'] = $this->load->view('master_pages/shoping_login_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function save_shoping() {

        $data = array();
        $data['customer_frist_name'] = $this->input->post('customer_frist_name', TRUE);
        $data['customer_last_name'] = $this->input->post('customer_last_name', TRUE);

        $data['customer_email'] = $this->input->post('customer_email', TRUE);
        $data['customer_phone'] = $this->input->post('customer_frist_name', TRUE);



        $data['customer_city'] = $this->input->post('customer_city', TRUE);
        $data['customer_post_code'] = $this->input->post('customer_post_code', TRUE);
        $data['customer_country'] = $this->input->post('customer_country', TRUE);
        $data['customer_region'] = $this->input->post('customer_region', TRUE);
        $data['customer_address'] = $this->input->post('customer_address', TRUE);

        if ($data['customer_frist_name'] != NULL && $data['customer_last_name'] != NULL && $data['customer_email'] != NULL && $data['customer_phone'] != NULL && $data['customer_country'] != NULL && $data['customer_address'] != NULL) {
           $result=$this->Checkout_Model->shoping_information($data);
           if($result){
               $sdata=array();
        $sdata['shoping_id']=$result;
       
        $this->session->set_userdata($sdata);
            redirect('Checkout/payment');
           }
        } else {
            $msg = array();
            $msg['mess'] = 'Please Full Fill All Information';
            $this->session->set_userdata($msg);
            redirect('Checkout/shoping_login');
        }
    }

    public function payment() {
        $data = array();
        $data['url_name'] = 'payment';
        $data['sub_url_name'] = 'show_cart';
        $data['title'] = 'Payment Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Payment  Page';
        $data['sub_page_name'] = 'Create Account Page';
        $data['banner'] = FALSE;
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();

        $data['main_content'] = $this->load->view('master_pages/payment_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }

    public function save_payment() {
        $data = array();
        
        $data['url_name'] = 'payment';
        $data['sub_url_name'] = 'show_cart';
        $data['title'] = 'Payment Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Payment  Page';
        $data['sub_page_name'] = 'Create Account Page';
        $data['banner'] = FALSE;
        $payment_id=array();
        
          $payment_id['payment_method']=  $this->input->post('payment_method',TRUE);
       
          $this->session->set_userdata($payment_id);
                  
        
        
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        $data['main_content'] = $this->load->view('master_pages/order_confirm_page', $data, TRUE);
        $this->load->view('master_page', $data);
    }
    
    public function confirm_order(){
     
     $shoping_id=  $this->session->userdata('shoping_id');
        $payment_id=  $this->session->userdata('payment_id');
        $grand_total=  $this->session->userdata('grand_total');
       if($shoping_id==NULL && $payment_id==NULL  && $grand_total==NULL){
            redirect('Welcome'); 
        }
        
        $payment_method=$this->session->userdata('payment_method');
       
        if($payment_method=='cash_on_delivery'){
            $pdata=array();
            $pdata['payment_type']=$payment_method;
            $this->Checkout_Model->save_payment_info($pdata);
            $this->Checkout_Model->save_order_info();
                    
        }  else {
             $pdata=array();
            $pdata['payment_type']=$payment_method;
            $this->Checkout_Model->save_payment_info($pdata);
            $this->Checkout_Model->save_order_info();
        }
        $data=array();
        
        $data['url_name'] = '';
        $data['sub_url_name'] = 'home';
        $data['title'] = 'confirm Page';
        $data['breadcrumb'] = TRUE;
        $data['page_name'] = 'Confirm  Page';
        $data['sub_page_name'] = 'Confirm Page';
        $data['banner'] = FALSE;
        
        $data['view_brand'] = $this->Welcome_Model->set_brand_info();
        
        $data['main_content']=  $this->load->view('master_pages/confirm_page',$data,TRUE);
     
        $this->load->view('master_page', $data);
    }
    
    
    

}
