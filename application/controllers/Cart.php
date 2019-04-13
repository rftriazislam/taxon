<?php


class Cart extends CI_Controller {
   public function  add_cart($product_id){
      $qty=  $this->input->post('qty',TRUE);
     $product_info=$this->Cart_Model->product_info_product_id($product_id);

      $data=array(
      'id'  => $product_info->product_id,
        'qty' =>$qty,
          'price' => $product_info->product_new_price,
          'price' => $product_info->product_new_price,
         
          'name'  =>$product_info->product_name ,
          'sku'   =>$product_info->product_sku_code,
          'image'  =>$product_info->product_image
          
          ); 
        
          $this->cart->insert($data);
       redirect('Cart/show_cart');
    }
    
    
    public function show_cart(){
             $data['url_name']='show_cart';
             $data['sub_url_name']='show_cart';
             $data['title']='Add Cart Page';
             $data['breadcrumb']=TRUE;
            $data['page_name']='Cart Page';
            $data['sub_page_name']='Cart Page';
            $data['banner']=FALSE;
            $data['view_brand']=$this->Welcome_Model->set_brand_info();
            
            $data['main_content']=  $this->load->view('master_pages/add_cart_page',$data,TRUE);
            $this->load->view('master_page',$data);
    }
    public function update_cart($rowid){
            $data=array(
      'rowid'  => $rowid,
       'qty' =>  $this->input->post('qty',TRUE)
       );  
          $this->cart->update($data);
         
        
       redirect('Cart/show_cart');
    }
    public function remove_cart($rowid){
             $data=array(
      'rowid'  => $rowid,
       'qty' => 0
       );  
          $this->cart->update($data);
         
        
       redirect('Cart/show_cart');
    }

 
}
