<section>
    <div class="container">
        <div class="row">
            <div class="row margin-bottom-40">
                <!-- BEGIN SALE PRODUCT -->
                <div class="col-md-12 sale-product">
                    <h2><b>New Arrivals</b></h2>
                    <hr>
                    <div class="owl-carousel owl-carousel5">
                        <?php
                        foreach ($view_product as $new_product) {
                            $d = $new_product->new_product;

                            if ($d == 1) {
                                $p = 1;
                                ?>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <a style="color:#42e719;" href="<?php echo base_url() ?>Welcome/product_details/<?php echo $new_product->product_id ?>/<?php echo $new_product->category_id ?>">
                                                <img src="<?php echo base_url() . $new_product->product_image ?>" class="img-responsive" alt="Berry Lace Dress">


                                                Quick View</a>

                                        </div>
                                        <h3><a href="shop-item.html"><?php echo $new_product->product_name ?></a></h3>
                                        <div class="pi-price"><?php echo $new_product->product_new_price ?></div>

                                        <form action="<?php echo base_url() ?>Cart/add_cart/<?php echo $new_product->product_id ?>/<?php echo $new_product->category_id ?>" method="post">
                                            <div>
                                                <input type="hidden" min="1" value="1" name="qty">
                                            </div>
                                            <button class="btn btn-default add2cart" type="submit">  Add to Cart</button>
                                        </form>

                                    </div>
                                </div>
                            <?php }
                        }
                        ?>
                    </div>

                    <a href="<?php echo base_url() ?>Welcome/new_product_new">
                        <h3 class="btn" style="background-color:slategray;color:white;float:right"><b>View All</b> </h3>
                    </a>
                </div>

                <!-- END SALE PRODUCT -->
            </div>
        </div>  
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="row margin-bottom-40">
                <!-- BEGIN SALE PRODUCT -->
                <div class="col-md-12 sale-product">
                    <h2><b>Old Arrivals</b></h2>
                    <hr>
                    <div class="owl-carousel owl-carousel5">
                        <?php
                        foreach ($view_product as $new_product) {
                            $d = $new_product->new_product;
                            if ($d == 3) {
                                $s = '3';
                                ?>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <a style="color:#05f9f9;" href="<?php echo base_url() ?>Welcome/product_details/<?php echo $new_product->product_id ?>/<?php echo $new_product->category_id ?>">
                                                <img src="<?php echo base_url() . $new_product->product_image ?>" class="img-responsive" alt="Berry Lace Dress">


                                                Quick View</a>
                                        </div>
                                        <h3><a href="shop-item.html"><?php echo $new_product->product_name ?></a></h3>
                                        <div class="pi-price"><?php echo $new_product->product_new_price ?></div>
                                        <form action="<?php echo base_url() ?>Cart/add_cart/<?php echo $new_product->product_id ?>/<?php echo $new_product->category_id ?>" method="post">
                                            <div>
                                                <input type="hidden" min="1" name="qty" value="1">
                                            </div>
                                            <button class="btn btn-default add2cart" type="submit">  Add to Cart</button>
                                        </form>

                                        <div class="sticker sticker-sale"></div>
                                    </div>
                                </div>
                            <?php }
                        }
                        ?>
                    </div>

                    <a href="<?php echo base_url() ?>Welcome/new_product_old">
                        <h3 class="btn" style="background-color:slategray;color:white;float:right"><b>View All</b> </h3>
                    </a>
                </div>

                <!-- END SALE PRODUCT -->
            </div>
        </div>  
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="row margin-bottom-40">
                <!-- BEGIN SALE PRODUCT -->
                <div class="col-md-12 sale-product">
                    <h2><b>Latest Arrivals</b></h2>
                    <hr>
                    <div class="owl-carousel owl-carousel5">
                        <?php
                        foreach ($view_product as $new_product) {
                            $d = $new_product->new_product;
                            if ($d == 2) {
                                $t = 2;
                                ?>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <a style="color:#c005f9;" href="<?php echo base_url() ?>Welcome/product_details/<?php echo $new_product->product_id ?>/<?php echo $new_product->category_id ?>">
                                                <img src="<?php echo base_url() . $new_product->product_image ?>" class="img-responsive" alt="Berry Lace Dress">


                                                Quick View</a>
                                        </div>
                                        <h3><a href="shop-item.html"><?php echo $new_product->product_name ?></a></h3>
                                        <div class="pi-price"><?php echo $new_product->product_new_price ?></div>
                                        <form action="<?php echo base_url() ?>Cart/add_cart/<?php echo $new_product->product_id ?>/<?php echo $new_product->category_id ?>" method="post">
                                            <div>
                                                <input type="hidden" min="1" name="qty" value="1">
                                            </div>
                                            <button class="btn btn-default add2cart" type="submit">  Add to Cart</button>
                                        </form>

                                        <div class="sticker sticker-sale"></div>
                                    </div>
                                </div>
    <?php }
}
?>
                    </div>

                    <a href="<?php echo base_url() ?>Welcome/new_product_latest">
                        <h3 class="btn" style="background-color:slategray;color:white;float:right"><b>View All</b> </h3>
                    </a>
                </div>

                <!-- END SALE PRODUCT -->
            </div>
        </div>  
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="container">

                    <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40">
                        <!-- BEGIN SIDEBAR -->
                        <div class="sidebar col-md-3 col-sm-5">
                            <h2><b>Category</b></h2>
                            <hr>
                            <ul class="list-group margin-bottom-25 sidebar-menu">
                                <?php
                                foreach ($select_category as $v_category) {
                                    ?>
                                    <li class="list-group-item clearfix"><a href="<?php echo base_url() ?>Welcome/product_page/<?php echo $v_category->category_id ?>"><i class="fa fa-angle-right"></i><b><?php echo $v_category->category_name ?></b></a></li>
<?php } ?>
                            </ul>

                            <div class="sidebar-filter margin-bottom-25">
                                <h2>Filter</h2>
                                <h3>Availability</h3>
                                <div class="checkbox-list">
                                    <label><input type="checkbox"> Not Available (3)</label>
                                    <label><input type="checkbox"> In Stock (26)</label>
                                </div>

                                <h3>Price</h3>
                                <p>
                                    <label for="amount">Range:</label>
                                    <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
                                </p>
                                <div id="slider-range"></div>
                            </div>

                            <div class="sidebar-products clearfix">
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
                        </div>
                        <!-- END SIDEBAR -->
                        <!-- BEGIN CONTENT -->
                        <div class="col-md-9 col-sm-7">
                            <h1 class="text-center"><b>All Product</b></h1>
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

                            <div class="row product-list">
<?php
foreach ($view_product as $v_product) {
    ?>


                                    <div class="col-md-4 col-sm-6 col-xs-12">

                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                <a style="color:#05f9f9;" href="<?php echo base_url() ?>Welcome/product_details/<?php echo $v_product->product_id ?>/<?php echo $v_product->category_id ?>">

                                                    <img src="<?php echo base_url() . $v_product->product_image ?>" class="img-responsive" alt="">

                                                    Quick View
                                                </a>

                                            </div>

                                            <div><h3><b><?php echo $v_product->product_name ?></b></h3></div>

                                            <div class="pi-price"><s><?php echo $v_product->product_old_price ?></s></div>&nbsp;
                                            <div><?php echo $v_product->product_new_price ?></div>
                                            <form action="<?php echo base_url() ?>Cart/add_cart/<?php echo $v_product->product_id ?>/<?php echo $v_product->category_id ?>" method="post">
                                                <div>
                                                    <input type="hidden" min="1" name="qty" value="1">
                                                </div>
                                                <button class="btn btn-default add2cart float-right" type="submit">Go Cart</button>
                                            </form>

                                            <a href="<?php echo base_url()?>Welcome/add_wishlist/<?php echo $v_product->product_id ?>/<?php echo $v_product->category_id ?> " style="float:left" class="btn btn-default add2cart " > Wishlist</a>
                                        </div>
                                    </div>
<?php } ?>

                            </div>

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
                        <!-- END CONTENT -->
                    </div>
                    <!-- END SIDEBAR & CONTENT -->
                </div>
            </div>
        </div>  
    </div>
</section>
<!-- start   all product -->
<section>
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="container">
                    <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->


                    <!-- END SALE PRODUCT & NEW ARRIVALS -->

                    <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40 ">

                        <!-- BEGIN CONTENT -->
                        <div class="col-md-9 col-sm-12 float-right">
                            <h2><b>Best Discount Product </b></h2>
                            <hr>
                            <div class="owl-carousel owl-carousel3">
                                <?php
                                foreach ($view_product as $discount_product) {
                                    $d = $discount_product->product_discount;
                                    if ($d > 10) {
                                        ?>
                                        <div>
                                            <div class="product-item">
                                                <div class="pi-img-wrapper">
                                                    <b><p class="btn" style="color:red">-<?php echo $discount_product->product_discount ?>%</p></b>
                                                    <a style="color:#c005f9;" href="<?php echo base_url() ?>Welcome/product_details/<?php echo $discount_product->product_id ?>/<?php echo $discount_product->category_id ?>">
                                                        <img src="<?php echo base_url() . $discount_product->product_image ?>" class="img-responsive" alt="Berry Lace Dress">


                                                        Quick View</a>
                                                </div>
                                                <h3><a href="shop-item.html"><?php echo $discount_product->product_name ?></a></h3>
                                                <div class="pi-price"><s><?php echo $discount_product->product_old_price?></s></div><br>
                                                <div><?php
                                                 $ol=$discount_product->product_old_price; 
                                                        $sd=($ol*$d)/100;
                                                       echo $new=$ol-$sd;
                                                        ?></div><br>
                                                <form action="<?php echo base_url() ?>Cart/add_cart/<?php echo $discount_product->product_id ?>/<?php echo $discount_product->category_id ?>" method="post">
                                                    <div>
                                                        <input type="hidden" min="1" name="qty" value="1">
                                                    </div>
                                                    <button class="btn btn-default add2cart float-right" type="submit">Go Cart</button>
                                                </form>

                                              <a href="<?php echo base_url()?>Welcome/add_wishlist/<?php echo $discount_product->product_id ?>/<?php echo $discount_product->category_id ?> " style="float:left" class="btn btn-default add2cart " > Wishlist</a>
                                                <div class="sticker sticker-new"></div>
                                            </div>
                                        </div>

    <?php }
}
?>
                            </div>
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN SIDEBAR -->
                        <div class="sidebar col-md-3 col-sm-4 float-right">
                            <h2><b>Compare Product </b></h2>
                            <hr>
                            <ul class="list-group margin-bottom-25 sidebar-menu">
                                <?php
                                foreach ($select_category as $v_category) {
                                    ?>
                                    <li class="list-group-item clearfix"><a href="<?php echo base_url() ?>Welcome/compare_page/<?php echo $v_category->category_id ?>"><i class="fa fa-angle-right"></i><?php echo $v_category->category_name ?></a></li>
<?php } ?>
                            </ul>
                        </div>
                        <!-- END SIDEBAR -->
                    </div>
                    <!-- END SIDEBAR & CONTENT -->

                    <!-- BEGIN TWO PRODUCTS & PROMO -->
                    <div class="row margin-bottom-35 ">
                        <!-- BEGIN TWO PRODUCTS -->
                        <div class="col-md-6 three-items-bottom-items">
                            <h2><b>Two Banner</b></h2>
                            <hr>
                            <div class="owl-carousel owl-carousel2">
<?php
foreach ($view_banner_s as $b_banner) {
    if ($b_banner->banner_type == 1) {
        ?>
                                        <div>
                                            <div class="product-item">
                                                <div class="pi-img-wrapper">
                                                    <a href="#">
                                                        <img src="<?php echo base_url() . $b_banner->banner_image ?>" class="img-responsive" alt="">
                                                    </a>
                                                </div>
        <!--                                        <h3><a href="shop-item.html"><?php echo $b_banner->banner_name ?></a></h3>
                                               
                                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>-->
                                            </div>
                                        </div>
    <?php }if ($b_banner->banner_type == 2) { ?>


                                        <div>
                                            <div class="product-item">
                                                <div class="pi-img-wrapper">
                                                    <a href="#">
                                                        <img src="<?php echo base_url() . $b_banner->banner_image ?>" class="img-responsive" alt="">
                                                    </a>
                                                </div>
        <!--                                        <h3><a href="shop-item.html"><?php echo $b_banner->banner_name ?></a></h3>
                                               
                                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>-->
                                            </div>
                                        </div>
    <?php }
}
?>

                            </div>

                        </div>
                        <!-- END TWO PRODUCTS -->
                        <!-- BEGIN PROMO -->
                        <div class="col-md-6 shop-index-carousel">
                            <div class="content-slider">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>

                                    </ol>
                                    <div class="carousel-inner ">
                                        <div class="item active">

                                            <img src="<?php echo base_url() ?>asset/back_end/slider_image/DSC04186-600x4001.jpg" class="img-responsive" alt="Berry Lace Dress">
                                        </div>

<?php
foreach ($view_slider as $S_slider) {
    ?>
                                            <div class="item ">

                                                <img src="<?php echo base_url() . $S_slider->slider_image ?>" class="img-responsive" alt="Berry Lace Dress">
                                            </div>
<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROMO -->
                    </div>        
                    <!-- END TWO PRODUCTS & PROMO -->
                </div>
            </div>
        </div>  
    </div>
</section>

<!-- end   all product -->

