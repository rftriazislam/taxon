<section>
    <div class="container">
        <div class="row">

            <div class="main">
                <div class="container">
                    <h4><b>Compare Category</b></h4>
                    <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40">
                        <!-- BEGIN SIDEBAR -->
                        <div class="sidebar col-md-3 col-sm-5">
                            <ul class="list-group margin-bottom-25 sidebar-menu">
                                <?php foreach ($select_category as $v_category) {
                                    ?>
                                    <li class="list-group-item clearfix"><a href="<?php echo base_url() ?>Welcome/compare_page/<?php echo $v_category->category_id ?>"><i class="fa fa-angle-right"></i><?php echo $v_category->category_name ?></a></li>
                                <?php } ?>

                            </ul>
                        </div>
                        <!-- END SIDEBAR -->

                        <!-- BEGIN CONTENT -->
                        <div class="col-md-5 col-sm-7 ">
                            <h1>Product Comparison</h1>
                            <div class="goods-page">
                                <div class="goods-data compare-goods clearfix">
                                    <div class="table-wrapper-responsive compare-item">  
                                        <?php
                                        foreach ($compare_product as $c_compare) {
                                            ?>
                                            <table>                  
                                                <tr>

                                                    <td class="compare-item">
                                                        <a href=""><img src="<?php echo base_url() . $c_compare->product_image ?>" alt="Berry Lace Dress"></a>
                                                        <h3><a href="javascript:;"><?php echo $c_compare->product_name ?></a></h3>
                                                        <strong class="compare-price"><span>$</span>47.00</strong>
                                                    </td>

                                                </tr>

                                                <tr>

                                                </tr>
                                                <tr>

                                                    <td class="compare-item">
                                                        Lorem ipsum
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td class="compare-item">
                                                        13.00cm 
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td class="compare-item">
                                                        110.00g
                                                    </td>

                                                </tr>

                                                <tr>

                                                </tr>
                                                <tr>

                                                    <td class="compare-item">
                                                        13 cm
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td class="compare-item">
                                                        In Stock
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="compare-info">&nbsp;</td>
                                                    <td class="compare-item">
                                                        <a class="btn btn-primary" href="javascript:;">Add to cart</a><br>
                                                        <a class="btn btn-default" href="javascript:;">Delete</a>
                                                    </td>

                                                </tr>
                                            </table>
<?php } ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-5 col-sm-7 " >
                            <h1>What Product Compare</h1>

                        </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END SIDEBAR & CONTENT -->
                </div>
            </div>
            <hr>

            <!-- BEGIN SIMILAR PRODUCTS -->
            <div class="row margin-bottom-40">
                <div class="col-md-12 col-sm-12">
                    <h2>Most  Discount Products</h2>
                    <hr>
                    <div class="owl-carousel owl-carousel4" >
<?php
foreach ($discount_product as $dis_product) {
    if ($dis_product->product_discount > 10) {
        ?>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper" >
                                            <b><p class="btn" style="color:red">-<?php echo $dis_product->product_discount ?>%</p></b>
                                            <img  src="<?php echo base_url() . $dis_product->product_image ?>" class="img-responsive" alt="Berry Lace Dress">
                                            <div>
                                                <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                            </div>
                                        </div>
                                        <h3><a href="shop-item.html"><?php echo $dis_product->product_name ?></a></h3>
                                        <div class="pi-price"><?php echo $dis_product->product_new_price ?></div>
                                        <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                        <div class="sticker sticker-new"></div>
                                    </div>
                                </div>

    <?php }
} ?>

                    </div>
                    <hr>
                    <a href="dfsf">
                        <h3 class="btn" style="background-color:slategray;color:white;float:right">More</h3>
                    </a>
                </div>

            </div>

            <!-- END SIMILAR PRODUCTS -->
        </div>
    </div>       











</div>  
</div>
</section>