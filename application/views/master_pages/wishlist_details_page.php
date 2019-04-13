<section>
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="container">
                    <!-- BEGIN SIDEBAR & CONTENT -->
                    <div class="row margin-bottom-40">
                        <!-- BEGIN CONTENT -->
                        <div class="col-md-12 col-sm-12">
                            <h1 style="color:#9966ff">Wishlist</h1>
                            <div class="goods-page">
                                <div class="goods-data clearfix">
                                    <div class="table-wrapper-responsive">
                                        <table summary="Shopping cart">
                                            <tr>
                                                <th class="goods-page-image"><kbd>Image</kbd></th>
                                                <th class="goods-page-description"><kbd>Product Name</kbd></th>
                                                <th class="goods-page-ref-no"><kbd>Code Sku No</kbd></th>

                                                <th class="goods-page-price"><kbd>Unit price</kbd></th>

                                                <th class="goods-page-total text-center" colspan="2"><kbd>Action</kbd></th>
                                                
                                            </tr>
                                            <?php
                                            foreach ($select_wishlist as $view_wishlist) {
                                                ?>
                                                <tr>

                                                    <td data-title="Product Image " class="goods-page-image">
                                                        <a href=""><img src="<?php echo base_url() . $view_wishlist->image ?>" alt="Berry Lace Dress">

                                                        </a>
                                                    </td>
                                                    <td class="goods-page-description">
                                                        <?php echo $view_wishlist->name ?>
                                                    </td>
                                                    <td class="goods-page-ref-no">
                                                        <?php echo $view_wishlist->sku ?>
                                                    </td>

                                                    <td class="goods-page-price">
                                                        <strong><span>TK</span><?php echo $view_wishlist->price ?></strong>
                                                    </td>
                                                    <td class="goods-page-total">
                                                        <form action="<?php echo base_url() ?>Welcome/add_cart_wishlist/<?php echo $view_wishlist->wishlist_id ?>" method="post">
                                                            <div>
                                                                <input type="hidden" min="1" name="qty" value="1">
                                                            </div>
                                                            <button class="btn btn-default add2cart float-right" type="submit">Add Cart</button>
                                                        </form>
                                                  
                                                        
                                                    </td> 
                                                    <td class="goods-page-price">
                                                         <form action="<?php echo base_url() ?>Welcome/remove_wishlist/<?php echo $view_wishlist->wishlist_id ?>" method="post">
                                                            <button class="btn  float-center" type="submit" style="background-color:red ; color: white">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>


                                </div>
                                <a href="<?php echo base_url(); ?>Welcome"> <button class="btn btn-default" type="submit">Continue Add Wishlist <i class="fa fa-shopping-cart"></i></button></a>

                                

                            </div>
                        </div>
                        <!-- END CONTENT -->
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
