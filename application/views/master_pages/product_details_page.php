<section>
    <div class="container">
        <div class="row">

   <div class="row margin-bottom-40">
    <div>
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">
            <ul class="list-group margin-bottom-25 sidebar-menu">
                <?php 
                foreach ($s_category as $v_category) {
                    
                ?>
                <li class="list-group-item clearfix"><a href="<?php echo base_url()?>Welcome/product_page/<?php echo $v_category->category_id?>"><h4 class="btn" style="background-color:#45097e;color:white;"><?php echo $v_category->category_name?></h4></a></li>
                <?php }?>
            
            </ul>

          
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                  <?php 
                  foreach ($product_detalis as $details_product) {
                    
                  ?>
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="<?php echo base_url().$details_product->product_image?>" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="<?php echo base_url().$details_product->product_image?>">
                  </div>
                  <div class="product-other-images">
                    <a href="<?php echo base_url().$details_product->product_image?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?php echo base_url().$details_product->product_image?>"></a>
                    <a href="<?php echo base_url().$details_product->product_image?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?php echo base_url().$details_product->product_image?>"></a>
                    <a href="<?php echo base_url().$details_product->product_image?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?php echo base_url().$details_product->product_image?>"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h1 style="color:#c005f9"><b> <kbd>Name :</kbd> <?php echo $details_product->product_name?></b></h1>
                     <div >
                         <h4 style="color:darkblue;"> <b><kbd>Manufacture :</kbd></b></h4>
                    <h4 style="color:rosybrown;"><p><?php echo $details_product->manufacture_name ?></p></h4>
                  </div>
                    <hr>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                        <h4 style="color:darkblue;"> <b><kbd>Price :</kbd></b></h4>
                      <strong><span>TK </span><?php echo $details_product->product_new_price?></strong>
                      <em>TK <span><?php echo $details_product->product_old_price?></span></em>
                    </div>
                   
                  </div>
                   <div>
                       
                       <h4 style="color:darkblue;"><b><kbd>Availability:</kbd> </b></h4>
                          <?php 
                                    if($details_product->product_quantity==0)
                                    {
                                        ?>
                       <span style="color:red;"><strong>Out stock </strong>&nbsp</span><b style="color:#00ffff"<?php echo $details_product->product_quantity ?></b> &nbsp <b>items</b>
                                    <?php }else { ?>
                                     <span style="color:green;"><strong> In stock </strong >&nbsp</span><?php echo $details_product->product_quantity ?> &nbsp <b>items</b>
                                    <?php }?>  
                    </div>
                    <hr>
                    <div>
                        
                        <h4 style="color:darkblue;"><b><kbd>Product Code :</kbd></b></h4>
                    
                     <h4 style="color:pink;"><?php echo $details_product->product_sku_code?></h4>
                    </div>
                  <hr>
                  <div class="description">
                      <h4 style="color:darkblue;"> <b><kbd>Description :</kbd></b></h4>
                    <p><?php echo $d=$details_product->product_description?></p>
                  </div>
                 
                  <form action="<?php echo base_url()?>Cart/add_cart/<?php echo $details_product->product_id?>" method="post">
                  <div class="product-page-options">
                   <div class="pull-left">
                      <label class="control-label"><kbd>Color:</kbd></label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div >  
                      <h4><kbd>Quantity:</kbd></h4>
                      <input type="number" min="1" name="qty" value="1"  >
                   
                 
                  </div>
                      <br>
                  <div>
                      
                   <button class="btn btn-primary" type="submit" >Add to cart</button>
                  
                  </div>
                
                  </form>
                </div>
                  <?php }?>
              </div>
                  
                <div class="product-page-content">
                  <ul id="myTjab" class="nav nav-tabs">
                    <li><a href="#Description" data-toggle="tab">Description</a></li>
                    <li><a href="#Information" data-toggle="tab">Information</a></li>
                   
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="Description">
                        <p><?php echo $d;?></p>
                    </div>
                    <div class="tab-pane fade" id="Information">
                      <table class="datasheet">
                        <tr>
                          <th colspan="2">Additional features</th>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 1</td>
                          <td>21 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 2</td>
                          <td>700 gr.</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 3</td>
                          <td>10 person</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 4</td>
                          <td>14 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 5</td>
                          <td>plastic</td>
                        </tr>
                      </table>
                    </div>
                   
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
            <!-- END SIDEBAR & CONTENT -->
            
              <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40 ">

                        <!-- BEGIN CONTENT -->
                        <div class="col-md-9 col-sm-12 float-right">
                            <h2><b>Related Product </b></h2>
                            <hr>
                            <div class="owl-carousel owl-carousel3">
                                <?php foreach ($related_product as $r_product) {
                                  
                                                               ?>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                          
                                             <a href="<?php echo base_url()?>Welcome/product_details/<?php echo $r_product->product_id?>/<?php echo $r_product->category_id?>">
                                            <img src="<?php echo base_url().$r_product->product_image?>" class="img-responsive" alt="Berry Lace Dress">
                                               Quick View</a>
                                        </div>
                                        <h3><a href="shop-item.html"><?php echo $r_product->product_name?></a></h3>
                                        <div class="pi-price"><s><?php echo $r_product->product_old_price?></s></div><br>
                                        <div ><?php echo $r_product->product_new_price?></div>
                                        &nbsp;
                                         <form action="<?php echo base_url()?>Cart/add_cart/<?php echo $r_product->product_id ?>/<?php echo $r_product->category_id?>" method="post">
                                       <div>
                                        <input type="hidden" min="1" value="1" name="qty">
                                       </div>
                                    <button class="btn btn-default add2cart" type="submit">  Add to Cart</button>
                              </form>
                                           <a href="" style="float:left" class="btn btn-default add2cart " > Wishlist</a>
                                    </div>
                                </div>
                              
                     
                                
                                                                  <?php }?>
                            </div>
                        
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN SIDEBAR -->
                        <div class="sidebar col-md-3 col-sm-4 float-right">
                            <h2><b></b></h2>
                            <hr>
                            <div class="list-group margin-bottom-25 sidebar-menu">
                                <?php 
                      foreach ($select_banner as $b_banner) {
                                  if($b_banner->banner_type==3){
                                  ?>
                          <div>
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                <a href="#">
                                                    <img style="width:200px;height:200px ;" src="<?php echo base_url() . $b_banner->banner_image ?>" class="img-responsive" alt="">
                                                </a>
                                            </div>
    <!--                                        <h3><a href="shop-item.html"><?php echo $b_banner->banner_name ?></a></h3>
                                           
                                            <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>-->
                                        </div>
                                    </div>
                               <?php } if($b_banner->banner_type==4){?>
                                  <div>
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                <a href="#">
                                                    <img style="width:200px;height:200px ;" src="<?php echo base_url() . $b_banner->banner_image ?>" class="img-responsive" alt="">
                                                </a>
                                            </div>
    <!--                                        <h3><a href="shop-item.html"><?php echo $b_banner->banner_name ?></a></h3>
                                           
                                            <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>-->
                                        </div>
                                    </div>
                                  <?php
                      
                      }}?>
                            </div>
                        </div>
                        <!-- END SIDEBAR -->
                    </div>
                    <!-- END SIDEBAR & CONTENT -->

            
            
            
            
            
            
            
            
            
        
        </div> 
    </div>
</section>