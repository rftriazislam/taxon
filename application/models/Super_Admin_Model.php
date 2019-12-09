<?php


 class Super_Admin_Model extends CI_Model {
    
    
    //-------------------- start category
     
    Public function save_category_info($data){
        $this->db->insert('tbl_category',$data);
    }
    public function manage_category_info(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
        
        
    }
    public function edit_category_info($category_id){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query=$this->db->get();
        $result=$query->row();
        
        return $result;
        
    }
    public function published_category_info($category_id){
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
       
    }
    public function unpublished_category_info($category_id){
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
       
    }

    public function update_category($data,$category_id){
    $this->db->where('category_id',$category_id);
    $this->db->update('tbl_category',$data);
    
    }

    public function delete_category_info($category_id){
     
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
        
    }

       //-------End Category------
       
       
       //-------start----Manufacture-----
    public function save_manufacture_info($data){
      
        $this->db->insert('tbl_manufacture',$data);
    }
    public function category_id_info(){
         $this->db->select('*');
        $this->db->from('tbl_category');
        $query=$this->db->get();
        $result=$query->result();
        return $result;  
    }
   
    public function manage_manufacture_info(){
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    public function published_manufacture_info($manufacture_id){
        $this->db->set('publication_status',0);
        $this->db->where('manufacture_id',$manufacture_id);
        $this->db->update('tbl_manufacture');
    }
    public function unpublished_manufacture_info($manufacture_id){
        $this->db->set('publication_status',1);
        $this->db->where('manufacture_id',$manufacture_id);
        $this->db->update('tbl_manufacture');
    }

    public function edit_manufacture_info($manufacture_id){
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $this->db->where('manufacture_id',$manufacture_id);
        $query=$this->db->get();
        $result=$query->row();
       
        return $result;
    }
    public function update_manufacture_info($data,$manufacture_id){
        $this->db->where('manufacture_id',$manufacture_id);
     $this->db->update('tbl_manufacture',$data);
      
    }

    public function delete_manufacture_info($manufacture_id){
      $this->db->where('manufacture_id',$manufacture_id);
      $this->db->delete('tbl_manufacture');
  }
    //-------End-----Manufacture------
     
    //--------------------start Product-----------------------------------------
    public function category__view_product_page(){
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
        
    }
    public function manufacture__view_product_page(){
     
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
   //     $this->db->where('category_id',$q);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
    public function save_product_info($data){
        $this->db->insert('tbl_product',$data);
    }
    public function manage_product_info(){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
      
        
    }
       public function published_product_info($product_id){
        $this->db->set('publication_status',0);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
        
    }
       public function unpublished_product_info($product_id){
        $this->db->set('publication_status',1);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
        
    }
    public function edit_product_info($product_id){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
     $query=  $this->db->get();
     $result=$query->row();
     return $result;
        
    }
    public function update_product_info($data,$product_id){
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }

    public function delete_product_info($product_id){
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_product');
        
    }
 
    //--------------------end Product-------------------------------------------
    
    //--------------------start slider------------------------------------------
     public function save_slider_info($data){
         $this->db->insert('tbl_slider',$data);
     }
     public function manage_slider_info(){
         $this->db->select('*');
         $this->db->from('tbl_slider');
         $query=  $this->db->get();
         $result=$query->result();
         return $result;
         
     }
     public function published_slider_info($slider_id){
         $this->db->set('publication_status',0);
         $this->db->where('slider_id',$slider_id);
         $this->db->update('tbl_slider');
     }
     public function unpublished_slider_info($slider_id){
         $this->db->set('publication_status',1);
         $this->db->where('slider_id',$slider_id);
         $this->db->update('tbl_slider');
     }
     public function edit_slider_if($slider_id){
         $this->db->select('*');
         $this->db->from('tbl_slider');
         $this->db->where('slider_id', $slider_id );
         $query=  $this->db->get();
         $result=$query->row();
         return $result;      
     }
     public function update_slider_info($slider_id,$data){
       
         $this->db->where('slider_id', $slider_id);
         $this->db->update('tbl_slider',$data);
     }

     public function delete_slider_info($slider_id){
         $this->db->where('slider_id',$slider_id);
         $this->db->delete('tbl_slider');
     }
    //--------------------end slider--------------------------------------------
    
     //-------------------start banner------------------------------------------
     public function save_banner_info($data){
         $this->db->insert('tbl_banner',$data);
     }
     public function manage_banner_info(){
         $this->db->select('*');
         $this->db->from('tbl_banner');
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
     }
     public function published_banner_info($banner_id){
         $this->db->set('publication_status',0);
         $this->db->where('banner_id', $banner_id );
         $this->db->update('tbl_banner');
         
     }
     public function unpublished_banner_info($banner_id){
         $this->db->set('publication_status',1);
         $this->db->where('banner_id', $banner_id );
         $this->db->update('tbl_banner');
         
     }
     public function edit_banner_info($banner_id){
         $this->db->select('*');
         $this->db->from('tbl_banner');
         $this->db->where('banner_id', $banner_id );
        $query= $this->db->get();
        $result=$query->row();
        return $result;
     }
     public function update_banner_info($banner_id,$data){
         $this->db->where('banner_id', $banner_id );
         $this->db->update('tbl_banner',$data );
     }

     public function delete_banner_info($banner_id){
         $this->db->where('banner_id',$banner_id );
         $this->db->delete('tbl_banner');
     }
    public function top_banner_info($banner_id){
        $this->db->set('banner_type',1);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
    
    public function middle_banner_info($banner_id){
        $this->db->set('banner_type',2);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
    public function left_botom_banner_info($banner_id){
        $this->db->set('banner_type',3);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
    public function right_botom_banner_info($banner_id){
        $this->db->set('banner_type',4);
        $this->db->where('banner_id',$banner_id);
        $this->db->update('tbl_banner'); 
        }
    
     
    
     //-------------------end banner------------------------------------------
    
     //-------------------start brand------------------------------------------
     public function save_brand_info($data){
         $this->db->insert('tbl_brand',$data);
     }
     public function manage_brand_info(){
         $this->db->select('*');
         $this->db->from('tbl_brand');
        $query=  $this->db->get();
        $result=$query->result();
        return $result;
     }
     public function published_brand_info($brand_id){
         $this->db->set('publication_status',0);
         $this->db->where('brand_id', $brand_id );
         $this->db->update('tbl_brand');
         
     }
     public function unpublished_brand_info($brand_id){
         $this->db->set('publication_status',1);
         $this->db->where('brand_id', $brand_id );
         $this->db->update('tbl_brand');
         
     }
     public function edit_brand_info($brand_id){
         $this->db->select('*');
         $this->db->from('tbl_brand');
         $this->db->where('brand_id', $brand_id );
        $query= $this->db->get();
        $result=$query->row();
        return $result;
     }
     public function update_brand_info($brand_id,$data){
         $this->db->where('brand_id', $brand_id );
         $this->db->update('tbl_brand',$data ); 
     }

     public function delete_brand_info($brand_id){
         $this->db->where('brand_id',$brand_id );
         $this->db->delete('tbl_brand');
     }
 
     
     //-------------------end banner--------------------------------------------

      public function category_info(){
         $this->db->select('*');
        $this->db->from('tbl_category');
        $query=$this->db->get();
        $result=$query->result();
        return $result;  
    }

     
     
     
     
     
     
     
     
     }