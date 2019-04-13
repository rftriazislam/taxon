
<section>
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="container">

                    <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40">
                        <!-- BEGIN SIDEBAR -->
                     
                        <!-- END SIDEBAR -->
                        <!-- BEGIN CONTENT -->
                        <div class="col-md-9 col-sm-7">
                            <h1 class="text-center"><b><?php echo $name?></b></h1>
                            <hr>
                            <div class="row list-view-sorting clearfix">
                                <div class="col-md-2 col-sm-2 list-view">
                                    <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                                    <a href="javascript:;"><i class="fa fa-th-list"></i></a>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <div class="pull-right">
                                        <label class="control-label">Show:</label>
                                        <select class="form-control input-sm">
                                            <option value="#?limit=24" selected="selected">24</option>
                                            <option value="#?limit=25">25</option>
                                            <option value="#?limit=50">50</option>
                                            <option value="#?limit=75">75</option>
                                            <option value="#?limit=100">100</option>
                                        </select>
                                    </div>
                                    <div class="pull-right">
                                        <label class="control-label">Sort&nbsp;By:</label>
                                        <select class="form-control input-sm">
                                            <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                            <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                            <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                            <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                            <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                            <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                            <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                            <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                            <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGIN PRODUCT LIST -->
                            <div class="row product-list ">
                                
                                <?php 
                           foreach ($all_product_category as $all_product) { 
                             
                               
                        ?>
                                <!-- PRODUCT ITEM START -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                         <a href="<?php echo base_url()?>Welcome/product_details/<?php echo $all_product->product_id?>/<?php echo $all_product->category_id?>">
                                    <img src="<?php echo base_url().$all_product->product_image ?>" class="img-responsive" alt="Berry Lace Dress">
                                    
                                        
                                        Quick View</a>
                                        </div>
                                        <h3><?php echo $all_product->product_name?></h3>
                                        <div class="pi-price"><s><?php echo $all_product->product_old_price?></s></div>
                                        <br>
                                        <div ><?php echo $all_product->product_new_price?></div>
                                        &nbsp;
                                         <form action="<?php echo base_url()?>Cart/add_cart/<?php echo $all_product->product_id ?>/<?php echo $all_product->category_id?>" method="post">
                                       <div>
                                        <input type="hidden" min="1" value="1" name="qty">
                                       </div>
                                    <button class="btn btn-default add2cart" type="submit">  Add to Cart</button>
                              </form>
                                           <a href="" style="float:left" class="btn btn-default add2cart " > Wishlist</a>
                                    </div>
                                </div>
                                <!-- PRODUCT ITEM END -->
                           
                           <?php }?>
                                
                            </div>
                           
                            <!-- END PRODUCT LIST -->
                            <!-- BEGIN PAGINATOR -->
                            <div class="row">
                                <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
                                <div class="col-md-8 col-sm-8">
                                    <ul class="pagination pull-right">
                                        <li><a href="javascript:;">&laquo;</a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li><span>2</span></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                        <li><a href="javascript:;">5</a></li>
                                        <li><a href="javascript:;">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END PAGINATOR -->
                        </div>
                          <div class="sidebar-products clearfix col-md-3 col-sm-6">
                                <h2><b>Bestsellers</b></h2>
                                <hr>
                                <div class="item">
                                    <a href="shop-item.html"><img src="<?php echo base_url() ?>asset/front_end/pages/img/products/k1.jpg" alt="Some Shoes in Animal with Cut Out"></a>
                                    <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                                    <div class="price">$31.00</div>
                                </div>
                                <div class="item">
                                    <a href="shop-item.html"><img src="<?php echo base_url() ?>asset/front_end/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out"></a>
                                    <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                                    <div class="price">$23.00</div>
                                </div>
                                <div class="item">
                                    <a href="shop-item.html"><img src="<?php echo base_url() ?>asset/front_end/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out"></a>
                                    <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                                    <div class="price">$86.00</div>
                                </div>
                            </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END SIDEBAR & CONTENT -->
                </div>
            </div>
        </div>  
    </div>
</section>

