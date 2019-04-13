<section>
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="container">
                    <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40">
                        <!-- BEGIN CONTENT -->
                        <div class="col-md-12 col-sm-12">
                            <h1 style="color:#9966ff">Order Confirm</h1>
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

                                                       
                                                            <?php echo $items['qty'] ?>
                                                            <br><br>


                                                   

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
                                                <em>Shoping Cost ( %) : </em>
                                                <strong class="price"><span>TK.</span></strong>
                                            </li>
                                            <li>
                                                <em>Delivery charge fee ( %) : </em>
                                                <strong class="price"><span>TK.</span></strong>
                                            </li>
                                            <li>
                                                <em>Vat ( %) : </em>
                                                <strong class="price"><span>TK.</span></strong>
                                            </li>
                                            <li class="shopping-total-price">
                                                <em>Total</em>
                                                <strong class="price"><span>$</span><?php echo $grand_total;?></strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                               
                                <a href="<?php echo base_url() ;?>Checkout/confirm_order"><button class="btn btn-primary pull-right" type="submit" id="button-confirm">Confirm Order</button></a>
                                <a href="<?php echo base_url() ;?>Checkout/order_cancel">  <button type="button" class="btn btn-default pull-right margin-right-20">Cancel</button></a>
                    </div>
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