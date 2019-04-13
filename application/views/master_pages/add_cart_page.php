<section>
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="container">
                    <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40">
                        <!-- BEGIN CONTENT -->
                        <div class="col-md-12 col-sm-12">
                            <h1 style="color:#9966ff">Shopping cart</h1>
                            <div class="goods-page">
                                <div class="goods-data clearfix">
                                    <div class="table-wrapper-responsive">
                                        <table summary="Shopping cart">
                                            <tr>
                                                <th class="goods-page-image"><kbd>Image</kbd></th>
                                                <th class="goods-page-description"><kbd>Product Name</kbd></th>
                                                <th class="goods-page-ref-no"><kbd>Code Sku No</kbd></th>
                                                <th class="goods-page-quantity"><kbd>Quantity</kbd></th>
                                                <th class="goods-page-price"><kbd>Unit price</kbd></th>
                                               
                                                <th class="goods-page-total" colspan="2"><kbd>Sub Total</kbd></th>
                                            </tr>
                                            <?php
                                            foreach ($this->cart->contents() as $items) {
                                             
                                       
                                                ?>
                                                <tr>

                                                    <td data-title="Product Image " class="goods-page-image">
                                                        <a href=""><img src="<?php echo base_url() . $items['image'] ?>" alt="Berry Lace Dress">

                                                        </a>
                                                    </td>
                                                    <td class="goods-page-description">
                                                        <?php echo $items['name'] ?>
                                                    </td>
                                                    <td class="goods-page-ref-no">
                                                        <?php echo $items['sku'] ?>
                                                    </td>
                                                    <td class="goods-page-quantity">

                                                        <form action="<?php echo base_url() ?>Cart/update_cart/<?php echo $items['rowid'] ?>" method="post">
                                                            <input type="number" name="qty" min="0" value="<?php echo $items['qty'] ?>">&nbsp;&nbsp;&nbsp;<input class="color_dark" type="submit" value="Update"> <i class="fa fa-check f_size_medium m_right_5" ></i>
                                                            <br><br>


                                                        </form>

                                                    </td>
                                                    <td class="goods-page-price">
                                                        <strong><span>TK</span><?php echo $items['price'] ?></strong>
                                                    </td>
                                                    <td class="goods-page-total">
                                                        <strong><span>TK.</span>
                                                            <?php 
//                                                            echo $subtotal = $items['subtotal'] ;
                                                            
                                                            
                                                              echo $items['subtotal']
                                                            
                                                        
                                                        
                                                        ?></strong>
                                                    </td>
                                                
                                                    <td class="del-goods-col">

                                                        <a class="btn" style="color:darkblue" href="<?php echo base_url(); ?>Cart/remove_cart/<?php echo $items['rowid'] ?>"><i style="color:red" class="fa fa-times f_size_medium m_right_5"></i>&nbsp;Remove</a>
                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>

                                    <div class="shopping-total">
                                        <ul>
                                            <li>
                                                <em>Sub total</em>
                                                <strong class="price"><span>TK.</span>  <?php
                                                    $grand_total = $this->cart->total();
                                                    $this->session->set_userdata('grand_total', $grand_total);
                                                    echo $grand_total;
                                                    ?></strong>
                                            </li>
                                            <li>
                                                <em>Delivery charge fee ( %) : </em>
                                                <strong class="price"><span>TK.</span></strong>
                                            </li>
                                            <li class="shopping-total-price">
                                                <em>Total</em>
                                                <strong class="price"><span>$</span><?php echo $grand_total;?></strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="<?php echo base_url() ;?>Welcome"> <button class="btn btn-default" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button></a>
                               
                                <a href="<?php echo base_url() ;?>Checkout"> <button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button></a>
                            
                            </div>
                        </div>
                        <!-- END CONTENT -->
                    </div>
                    <!-- END SIDEBAR & CONTENT -->

                    <!-- BEGIN SIMILAR PRODUCTS -->

                    <div class="row margin-bottom-40">
                        <div class="col-md-12 col-sm-12">
                            <h2>Most popular products</h2>
                            <div class="owl-carousel owl-carousel4">
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                                            <div>
                                                <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                            </div>
                                        </div>
                                        <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                        <div class="pi-price">$29.00</div>
                                        <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                        <div class="sticker sticker-new"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                                            <div>
                                                <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                            </div>
                                        </div>
                                        <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                                        <div class="pi-price">$29.00</div>
                                        <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                                            <div>
                                                <a href="assets/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                            </div>
                                        </div>
                                        <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                                        <div class="pi-price">$29.00</div>
                                        <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                                            <div>
                                                <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                            </div>
                                        </div>
                                        <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                                        <div class="pi-price">$29.00</div>
                                        <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                        <div class="sticker sticker-sale"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                                            <div>
                                                <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                            </div>
                                        </div>
                                        <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                                        <div class="pi-price">$29.00</div>
                                        <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="pi-img-wrapper">
                                            <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                                            <div>
                                                <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                            </div>
                                        </div>
                                        <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                                        <div class="pi-price">$29.00</div>
                                        <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SIMILAR PRODUCTS -->
                </div>
            </div>
        </div>
    </div>
</section>