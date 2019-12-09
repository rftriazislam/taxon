<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Head BEGIN -->
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta content="Metronic Shop UI description" name="description">
        <meta content="Metronic Shop UI keywords" name="keywords">
        <meta content="keenthemes" name="author">

        <meta property="og:site_name" content="-CUSTOMER VALUE-">
        <meta property="og:title" content="-CUSTOMER VALUE-">
        <meta property="og:description" content="-CUSTOMER VALUE-">
        <meta property="og:type" content="website">
        <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
        <meta property="og:url" content="-CUSTOMER VALUE-">

        <link rel="shortcut icon" href="favicon.ico">

        <!-- Fonts START -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
        <!-- Fonts END -->

        <!-- Global styles START -->          
        <link href="<?php echo base_url() ?>asset/front_end/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Global styles END --> 

        <!-- Page level plugin styles START -->
        <link href="<?php echo base_url() ?>asset/front_end/pages/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <!-- Page level plugin styles END -->

        <!-- Theme styles START -->
        <link href="<?php echo base_url() ?>asset/front_end/pages/css/components.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/pages/css/slider.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/pages/css/style-shop.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>asset/front_end/corporate/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/corporate/css/style-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/front_end/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
        <link href="<?php echo base_url() ?>asset/front_end/corporate/css/custom.css" rel="stylesheet">
        <!-- Theme styles END -->
      <script type="text/javascript">
        function bannerDelete(){
            var mes=confirm('add to cart','add to wishlist');
            if(mes){
                return true;
            }
            else{
                return false;
            }
        }
        
        
        
        
        
        
        
        
        
        
        
                    if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
                
                
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              // alert(xmlhttp);
            }


//            function showHint(given_text)
//            {
//                alert(given_text);
//                //var obj = document.getElementById(objID);
//                serverPage = '<?php echo base_url()?>/Welcome/server?q=' + given_text;
//                 alert(serverPage);
//                xmlhttp.open("GET", serverPage);
//                xmlhttp.onreadystatechange = function ()
//                {
////                   alert(xmlhttp.readyState);
// //                  alert(xmlhttp.status);
//                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
//                    {
////                       alert(xmlhttp.responseText);
//                        document.getElementById('res').innerHTML = xmlhttp.responseText;
//                        //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
//                    }
//                }
//                xmlhttp.send(null);
//            }
        
        
        
        function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
           
        xmlhttp.open("GET", "<?php echo base_url()?>/Welcome/server?q=" + str, true);
        
        xmlhttp.send();
    }
}
        
        
        
        
        
        </script>
    </head>
    <!-- Head END -->

    <!-- Body BEGIN -->
    <body>  
  

        <section class="ecommerce">
            <!-- BEGIN STYLE CUSTOMIZER -->
            <div class="color-panel hidden-sm">
                <div class="color-mode-icons icon-color"></div>
                <div class="color-mode-icons icon-color-close"></div>
                <div class="color-mode">
                    <p>THEME COLOR</p>
                    <ul class="inline">
                        <li class="color-red current color-default" data-style="red"></li>
                        <li class="color-blue" data-style="blue"></li>
                        <li class="color-green" data-style="green"></li>
                        <li class="color-orange" data-style="orange"></li>
                        <li class="color-gray" data-style="gray"></li>
                        <li class="color-turquoise" data-style="turquoise"></li>
                    </ul>
                </div>
            </div>
            <!-- END BEGIN STYLE CUSTOMIZER --> 

            <!-- BEGIN TOP BAR -->
            <div class="pre-header">
                <div class="container">
                    <div class="row">
                        <!-- BEGIN TOP BAR LEFT PART -->
                        <div class="col-md-6 col-sm-6 additional-shop-info">
                            <ul class="list-unstyled list-inline">
                                <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                                <!-- BEGIN CURRENCIES -->
                                <li class="shop-currencies">
                                    <a href="javascript:void(0);">€</a>
                                    <a href="javascript:void(0);">£</a>
                                    <a href="javascript:void(0);" class="current">$</a>
                                </li>
                                <!-- END CURRENCIES -->
                                <!-- BEGIN LANGS -->
                                <li class="langs-block">
                                    <a href="javascript:void(0);" class="current"><b>English </b></a>
                                    <div class="langs-block-others-wrapper"><div class="langs-block-others">
                                            <a href="javascript:void(0);">French</a>
                                            <a href="javascript:void(0);">Germany</a>
                                            <a href="javascript:void(0);">Turkish</a>
                                        </div></div>
                                </li>
                                <!-- END LANGS -->
                            </ul>
                        </div>
                        <!-- END TOP BAR LEFT PART -->
                        <!-- BEGIN TOP BAR MENU -->
                        <div class="col-md-6 col-sm-6 additional-nav">
                            <ul class="list-unstyled list-inline pull-right">
                                <li ><a style="color:blueviolet;" href="shop-account.html"><b>My Account</b></a></li>
                                <li ><a style="color:fuchsia;" href="shop-wishlist.html"><b>My Wishlist</b></a></li>
                                <li><a  style="color:rosybrown;" href="<?php echo base_url()?>Checkout"><b>Checkout</b></a></li>
                                <li ><a style="color:#4acdd2;" href="page-login.html"><b>
                                    <?php
                                    $d= $this->session->userdata('customer_frist_name');
                                    $s= $this->session->userdata('customer_last_name');
                                    if($d!=NULL&&$s!=NULL){
                                      echo $d.' &nbsp;' .$s; 
                                    }
                                    else{
                                      echo 'logout'  ;
                                    }
                                    ?>
                                       
                                        </b></a></li>
                            </ul>
                        </div>
                        <!-- END TOP BAR MENU -->
                    </div>
                </div>        
            </div>
            <!-- END TOP BAR -->

            <!-- BEGIN HEADER -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="header">
                            <div class="container">
                                <a class="site-logo" href="<?php echo base_url()?>Welcome"><img src="<?php echo base_url() ?>asset/front_end/corporate/img/logos/logo-shop-red.png" alt="Metronic Shop UI"></a>

                                <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

                                <!-- BEGIN CART -->
                                <div class="top-cart-block">
                                    <div class="top-cart-info">
                                        <a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
                                        <a href="javascript:void(0);" class="top-cart-info-value">TK.<?php echo $this->session->userdata('grand_total')?></a>
                                    </div>
                                    <i class="fa fa-shopping-cart"></i>

                                    <div class="top-cart-content-wrapper">
                                        <div class="top-cart-content">
                                            <ul class="scroller" style="height: 250px;">
                                                   <?php
                                            foreach ($this->cart->contents() as $items) {
                                               
                                      
                                                ?>
                                                <li>
                                                    <a href="shop-item.html"><img src="<?php echo base_url().$items['image'] ?>" alt="Rolex Classic Watch" width="37" height="34"></a>
                                                    <span class="cart-content-count">x <?php echo $items['qty']?></span>
                                                    <strong><a href="shop-item.html"><?php echo $items['name']?></a></strong>
                                                    <b>TK.<?php echo $items['subtotal']?> </b>
                                                    <a href="<?php echo base_url(); ?>Cart/remove_cart/<?php echo $items['rowid'] ?>" ><i style="color:red" class="fa fa-times f_size_medium m_right_5"></i></a>
                                                </li>
                                                
                                            <?php }?>
                                             
                                                <div class="text-right" style="color:red"><b>Total price : </b><b style="color:blueviolet;"><?php echo $this->session->userdata('grand_total')?></b></div>
                                            </ul>
                                            
                                            <div class="text-right">
                                                <a href="<?php echo base_url(); ?>Cart/show_cart" class="btn btn-default">View Cart</a>
                                                <a href="<?php echo base_url() ;?>Checkout" class="btn btn-primary">Checkout</a>
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                                <!--END CART -->

                                <!-- BEGIN NAVIGATION -->
                                <div class="header-navigation">
                                    <ul>
                                        <li><a href="<?php echo base_url() ?>Welcome"><b>Home</b></a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                                Women
                                            </a>

                                            <!-- BEGIN DROPDOWN MENU -->
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="shop-product-list.html">Hi Tops <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="shop-product-list.html">Second Level Link</a></li>
                                                        <li><a href="shop-product-list.html">Second Level Link</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                                                Second Level Link 
                                                                <i class="fa fa-angle-right"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="shop-product-list.html">Third Level Link</a></li>
                                                                <li><a href="shop-product-list.html">Third Level Link</a></li>
                                                                <li><a href="shop-product-list.html">Third Level Link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-product-list.html">Running Shoes</a></li>
                                                <li><a href="shop-product-list.html">Jackets and Coats</a></li>
                                            </ul>
                                            <!-- END DROPDOWN MENU -->
                                        </li>
                                        <li class="dropdown dropdown-megamenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                                Man

                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="header-navigation-content">
                                                        <div class="row">
                                                            <div class="col-md-4 header-navigation-col">
                                                                <h4>Footwear</h4>
                                                                <ul>
                                                                    <li><a href="shop-product-list.html">Astro Trainers</a></li>
                                                                    <li><a href="shop-product-list.html">Basketball Shoes</a></li>
                                                                    <li><a href="shop-product-list.html">Boots</a></li>
                                                                    <li><a href="shop-product-list.html">Canvas Shoes</a></li>
                                                                    <li><a href="shop-product-list.html">Football Boots</a></li>
                                                                    <li><a href="shop-product-list.html">Golf Shoes</a></li>
                                                                    <li><a href="shop-product-list.html">Hi Tops</a></li>
                                                                    <li><a href="shop-product-list.html">Indoor and Court Trainers</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 header-navigation-col">
                                                                <h4>Clothing</h4>
                                                                <ul>
                                                                    <li><a href="shop-product-list.html">Base Layer</a></li>
                                                                    <li><a href="shop-product-list.html">Character</a></li>
                                                                    <li><a href="shop-product-list.html">Chinos</a></li>
                                                                    <li><a href="shop-product-list.html">Combats</a></li>
                                                                    <li><a href="shop-product-list.html">Cricket Clothing</a></li>
                                                                    <li><a href="shop-product-list.html">Fleeces</a></li>
                                                                    <li><a href="shop-product-list.html">Gilets</a></li>
                                                                    <li><a href="shop-product-list.html">Golf Tops</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 header-navigation-col">
                                                                <h4>Accessories</h4>
                                                                <ul>
                                                                    <li><a href="shop-product-list.html">Belts</a></li>
                                                                    <li><a href="shop-product-list.html">Caps</a></li>
                                                                    <li><a href="shop-product-list.html">Gloves, Hats and Scarves</a></li>
                                                                </ul>

                                                                <h4>Clearance</h4>
                                                                <ul>
                                                                    <li><a href="shop-product-list.html">Jackets</a></li>
                                                                    <li><a href="shop-product-list.html">Bottoms</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-12 nav-brands">
                                                                <ul>
                                                                    <li><a href="shop-product-list.html"><img title="esprit" alt="esprit" src="<?php echo base_url() ?>asset/front_end/pages/img/brands/esprit.jpg"></a></li>
                                                                    <li><a href="shop-product-list.html"><img title="gap" alt="gap" src="<?php echo base_url() ?>asset/front_end/pages/img/brands/gap.jpg"></a></li>
                                                                    <li><a href="shop-product-list.html"><img title="next" alt="next" src="<?php echo base_url() ?>asset/front_end/pages/img/brands/next.jpg"></a></li>
                                                                    <li><a href="shop-product-list.html"><img title="puma" alt="puma" src="<?php echo base_url() ?>asset/front_end/pages/img/brands/puma.jpg"></a></li>
                                                                    <li><a href="shop-product-list.html"><img title="zara" alt="zara" src="<?php echo base_url() ?>asset/front_end/pages/img/brands/zara.jpg"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>Welcome/all_product">Product</a></li>

                                        <li class="dropdown dropdown100 nav-catalogue">
                                            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                                New

                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="header-navigation-content">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-4 col-xs-6">
                                                                <div class="product-item">
                                                                    <div class="pi-img-wrapper">
                                                                        <a href="shop-item.html"><img src="<?php echo base_url() ?>asset/front_end/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                                                    </div>
                                                                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                                                    <div class="pi-price">$29.00</div>
                                                                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-4 col-xs-6">
                                                                <div class="product-item">
                                                                    <div class="pi-img-wrapper">
                                                                        <a href="shop-item.html"><img src="<?php echo base_url() ?>asset/front_end/pages/img/products/model3.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                                                    </div>
                                                                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                                                    <div class="pi-price">$29.00</div>
                                                                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-4 col-xs-6">
                                                                <div class="product-item">
                                                                    <div class="pi-img-wrapper">
                                                                        <a href="shop-item.html"><img src="<?php echo base_url() ?>asset/front_end/pages/img/products/model7.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                                                    </div>
                                                                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                                                    <div class="pi-price">$29.00</div>
                                                                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-4 col-xs-6">
                                                                <div class="product-item">
                                                                    <div class="pi-img-wrapper">
                                                                        <a href="shop-item.html"><img src="<?php echo base_url() ?>asset/front_end/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                                                    </div>
                                                                    <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                                                    <div class="pi-price">$29.00</div>
                                                                    <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                                                Pages 

                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a href="shop-index.html">Home Default</a></li>
                                                <li class="active"><a href="shop-index-header-fix.html">Home Header Fixed</a></li>
                                                <li><a href="shop-index-light-footer.html">Home Light Footer</a></li>
                                                <li><a href="shop-product-list.html">Product List</a></li>
                                                <li><a href="shop-search-result.html">Search Result</a></li>
                                                <li><a href="shop-item.html">Product Page</a></li>
                                                <li><a href="shop-shopping-cart-null.html">Shopping Cart (Null Cart)</a></li>
                                                <li><a href="shop-shopping-cart.html">Shopping Cart</a></li>
                                                <li><a href="shop-checkout.html">Checkout</a></li>
                                                <li><a href="shop-about.html">About</a></li>
                                                <li><a href="shop-contacts.html">Contacts</a></li>
                                                <li><a href="shop-account.html">My account</a></li>
                                                <li><a href="shop-wishlist.html">My Wish List</a></li>
                                                <li><a href="shop-goods-compare.html">Product Comparison</a></li>
                                                <li><a href="shop-standart-forms.html">Standart Forms</a></li>
                                                <li><a href="shop-faq.html">FAQ</a></li>
                                                <li><a href="shop-privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="shop-terms-conditions-page.html">Terms &amp; Conditions</a></li>
                                            </ul>
                                        </li>


                                        
                                        <li><a href="<?php echo base_url() ?>Welcome/about_page">About</a></li>
                                        <li><a href="<?php echo base_url() ?>Welcome/email">Email</a></li>

                                        <!-- BEGIN TOP SEARCH -->
                                        <li class="menu-search">
                                            <span class="sep"></span>
                                            <i class="fa fa-search search-btn"></i>
                                            <div class="search-box">
                                                <form action="<?php echo base_url()?>Welcome/search_name_product"  method="post">
                                                    <div class="input-group">
                                                    
                                                        <input type="text" name="search_name" onkeyup="showHint(this.value)">
                                                              
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-primary"  type="submit">Search</button>
                                                        </span>
                                                     
                                                       
                                                    </div>  
                                                    <p id="txtHint"></p>
                                                        
                                                </form>
                                            </div> 
                                        </li>
                                        <!-- END TOP SEARCH -->
                                    </ul>
                                </div>
                                <!-- END NAVIGATION -->
                            </div>

                        </div>

                    </div>  

                </div>

            </section>

            <!-- Header END -->
            <!--  start Beadcumb -->

            <section>
                <div class="container">
                    <div class="row">

                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>Welcome"><b><h4><i>Home </i></h4></b></a></li>
                            <?php
                            if ($breadcrumb) {
                               ?>
                                <li><a   href="<?php echo base_url() ?>Welcome/<?php echo $url_name ?>"><b><h4><i>><?php echo $page_name ?></i></h4></b></a></li>
                                <li class="active">Category</li>
                            <?php } ?>
                        </ul>

                    </div>  
                </div>
            </section>
            <!--  end Beadcumb -->

            <?php
            if ($banner) {
                ?>






                <section>
                    <div class="container">
                        <div class="row ">
                            <div class="main">
                                <div class="container">
                                <div class="row margin-bottom-40">
                            <a href="#">
                            <img src="<?php echo base_url() ?>asset/back_end/banner_image/grph_city-detroit-1200x400.jpg" alt=""/>
                            
                            </a> 
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>  
                   
                </section>
            
            <?php } ?>


            
            <br>


            <?php echo $main_content; ?>
            <hr>

            <!-- BEGIN BRANDS -->
            <section>

                <div class="brands">
                    <div class="container">
                        <div class="owl-carousel owl-carousel6-brands">
                            <?php foreach ($view_brand as $b_brand) {
                                            if($b_brand->brand_type==1){
                                        ?>
                           
                            <a href="<?php echo base_url()?>Welcome/all_brand/<?php echo $b_brand->brand_id?>"><img src="<?php echo base_url().$b_brand->brand_image ?>" alt="canon" title="canon"></a>
                            <?php } }?>
                        </div>
                    </div>
                </div>

            </section>

            <!-- END BRANDS -->

            <!-- BEGIN STEPS -->
            <section>

                <div class="steps-block steps-block-red">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 steps-block-col">
                                <i class="fa fa-truck"></i>
                                <div>
                                    <h2>Free shipping</h2>
                                    <em>Express delivery withing 3 days</em>
                                </div>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-4 steps-block-col">
                                <i class="fa fa-gift"></i>
                                <div>
                                    <h2>Daily Gifts</h2>
                                    <em>3 Gifts daily for lucky customers</em>
                                </div>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-4 steps-block-col">
                                <i class="fa fa-phone"></i>
                                <div>
                                    <h2>477 505 8877</h2>
                                    <em>24/7 customer care available</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- END STEPS -->


            <!-- BEGIN PRE-FOOTER -->
            <section>

                <div class="pre-footer">
                    <div class="container">
                        <div class="row">
                            <!-- BEGIN BOTTOM ABOUT BLOCK -->
                            <div class="col-md-3 col-sm-6 pre-footer-col">
                                <h2>About us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                                <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
                            </div>
                            <!-- END BOTTOM ABOUT BLOCK -->
                            <!-- BEGIN BOTTOM INFO BLOCK -->
                            <div class="col-md-3 col-sm-6 pre-footer-col">
                                <h2>Information</h2>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
                                    <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
                                    <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
                                    <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li>
                                    <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                                    <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Careers</a></li>
                                    <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Payment Methods</a></li>
                                </ul>
                            </div>
                            <!-- END INFO BLOCK -->

                            <!-- BEGIN TWITTER BLOCK --> 
                            <div class="col-md-3 col-sm-6 pre-footer-col">
                                <h2 class="margin-bottom-0">Latest Tweets</h2>
                                <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>      
                            </div>
                            <!-- END TWITTER BLOCK -->

                            <!-- BEGIN BOTTOM CONTACTS -->
                            <div class="col-md-3 col-sm-6 pre-footer-col">
                                <h2>Our Contacts</h2>
                                <address class="margin-bottom-40">
                                    35, Lorem Lis Street, Park Ave<br>
                                    California, US<br>
                                    Phone: 300 323 3456<br>
                                    Fax: 300 323 1456<br>
                                    Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                                    Skype: <a href="skype:metronic">metronic</a>
                                </address>
                            </div>
                            <!-- END BOTTOM CONTACTS -->
                        </div>
                        <hr>
                        <div class="row">
                            <!-- BEGIN SOCIAL ICONS -->
                            <div class="col-md-6 col-sm-6">
                                <ul class="social-icons">
                                    <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
                                    <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                                    <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                                    <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
                                    <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
                                    <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
                                    <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
                                </ul>
                            </div>
                            <!-- END SOCIAL ICONS -->
                            <!-- BEGIN NEWLETTER -->
                            <div class="col-md-6 col-sm-6">
                                <div class="pre-footer-subscribe-box pull-right">
                                    <h2>Newsletter</h2>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" placeholder="youremail@mail.com" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">Subscribe</button>
                                            </span>
                                        </div>
                                    </form>
                                </div> 
                            </div>
                            <!-- END NEWLETTER -->
                        </div>
                    </div>
                </div>

            </section>

            <!-- END PRE-FOOTER -->

            <!-- BEGIN FOOTER -->
            <section>

                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <!-- BEGIN COPYRIGHT -->
                            <div class="col-md-4 col-sm-4 padding-top-10">
                                2019 @ Md.Riazul Islam ALL Rights Reserved. 
                            </div>
                            <!-- END COPYRIGHT -->
                            <!-- BEGIN PAYMENTS -->
                            <div class="col-md-4 col-sm-4">
                                <ul class="list-unstyled list-inline pull-right">
                                    <li><img src="<?php echo base_url() ?>asset/front_end/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
                                    <li><img src="<?php echo base_url() ?>asset/front_end/corporate/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
                                    <li><img src="<?php echo base_url() ?>asset/front_end/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
                                    <li><img src="<?php echo base_url() ?>asset/front_end/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
                                    <li><img src="<?php echo base_url() ?>asset/front_end/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
                                </ul>
                            </div>
                            <!-- END PAYMENTS -->
                            <!-- BEGIN POWERED -->
                            <div class="col-md-4 col-sm-4 text-right">
                                <p class="powered">Powered by: <a href="http://www.keenthemes.com/">MZ.com</a></p>
                            </div>
                            <!-- END POWERED -->
                        </div>
                    </div>
                </div>

            </section>

            <!-- END FOOTER -->

            <!-- BEGIN fast view of a product -->
            <section>

                <div id="product-pop-up" style="display: none; width: 700px;">
                    <div class="product-page product-pop-up">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-3">
                                <div class="product-main-image">
                                    <img src="<?php echo base_url() ?>asset/front_end/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
                                </div>
                                <div class="product-other-images">
                                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="<?php echo base_url() ?>asset/front_end/pages/img/products/model3.jpg"></a>
                                    <a href="javascript:;"><img alt="Berry Lace Dress" src="<?php echo base_url() ?>asset/front_end/pages/img/products/model4.jpg"></a>
                                    <a href="javascript:;"><img alt="Berry Lace Dress" src="<?php echo base_url() ?>asset/front_end/pages/img/products/model5.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-9">
                                <h2>Cool green dress with red bell</h2>
                                <div class="price-availability-block clearfix">
                                    <div class="price">
                                        <strong><span>$</span>47.00</strong>
                                        <em>$<span>62.00</span></em>
                                    </div>
                                    <div class="availability">
                                        Availability: <strong>In Stock</strong>
                                    </div>
                                </div>
                                <div class="description">
                                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat 
                                        Nostrud duis molestie at dolore.</p>
                                </div>
                                <div class="product-page-options">
                                    <div class="pull-left">
                                        <label class="control-label">Size:</label>
                                        <select class="form-control input-sm">
                                            <option>L</option>
                                            <option>M</option>
                                            <option>XL</option>
                                        </select>
                                    </div>
                                    <div class="pull-left">
                                        <label class="control-label">Color:</label>
                                        <select class="form-control input-sm">
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>Black</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-page-cart">
                                    <div class="product-quantity">
                                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Add to cart</button>
                                    <a href="shop-item.html" class="btn btn-default">More details</a>
                                </div>
                            </div>

                            <div class="sticker sticker-sale"></div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- END fast view of a product -->

            <!-- Load javascripts at bottom, this will reduce page load time -->
            <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
            <!--[if lt IE 9]>
            <script src="<?php echo base_url() ?>asset/front_end/plugins/respond.min.js"></script>  
            <![endif]-->
            <script src="<?php echo base_url() ?>asset/front_end/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url() ?>asset/front_end/plugins/jquery-migrate.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url() ?>asset/front_end/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
            <script src="<?php echo base_url() ?>asset/front_end/corporate/scripts/back-to-top.js" type="text/javascript"></script>
            <script src="<?php echo base_url() ?>asset/front_end/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->

            <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
            <script src="<?php echo base_url() ?>asset/front_end/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
            <script src="<?php echo base_url() ?>asset/front_end/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
            <script src='<?php echo base_url() ?>asset/front_end/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
            <script src="<?php echo base_url() ?>asset/front_end/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

            <script src="<?php echo base_url() ?>asset/front_end/corporate/scripts/layout.js" type="text/javascript"></script>
            <script src="<?php echo base_url() ?>asset/front_end/pages/scripts/bs-carousel.js" type="text/javascript"></script>
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    Layout.init();
                    Layout.initOWL();
                    Layout.initImageZoom();
                    Layout.initTouchspin();
                    Layout.initTwitter();

                    Layout.initFixHeaderWithPreHeader();
                    Layout.initNavScrolling();
                });
            </script>
            <!-- END PAGE LEVEL JAVASCRIPTS -->
        </section>
    </body>
    <!-- END BODY -->
</html>