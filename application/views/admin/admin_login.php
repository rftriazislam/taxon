<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo base_url() ?>asset/back_end/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/back_end/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo base_url() ?>asset/back_end/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo base_url() ?>asset/back_end/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="<?php echo base_url() ?>asset/back_end/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="<?php echo base_url() ?>asset/back_end/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>asset/back_end/img/favicon.ico">
        <!-- end: Favicon -->

        <style type="text/css">
            body { background: url(<?php echo base_url() ?>asset/back_end/img/login.jpg) !important; }
        </style>



    </head>

    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">

                <div class="row-fluid" >
                    <div class="login-box"  >
                        <div class="icons">
                            <a href="index.html"><i class="halflings-icon home"></i></a>
                            <a href="#"><i class="halflings-icon cog"></i></a>
                        </div>
                        <h2 class="text-center" style="color:#2100ff;"><b>Please Login</b> </h2>

                        <hr>
                        <p style="color:red;">
                            <?php
                            $msg = $this->session->userdata('message');
                            if ($msg) {
                                echo $msg;

                                $this->session->unset_userdata('message');
                            }
                            ?>

                        </p>
                        <form class="form-horizontal" action="<?php echo base_url() ?>Admin/admin_login_cheek" method="post">
                            <fieldset>

                                <div class="input-prepend" title="Username">
                                    <span class="add-on"><i class="halflings-icon user"></i></span>
                                    <input class="input-large span10" name="admin_email" id="username" type="text" placeholder="type username"/>
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend" title="Password">
                                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                                    <input class="input-large span10" name="admin_password" id="password" type="password" placeholder="type password"/>
                                </div>
                                <div class="clearfix"></div>

                                <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                                <div class="button-login">	
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="clearfix"></div>
                        </form>
                        <hr>
                        <h3 style="color: #b240ed;">Forgot Password?</h3>
                        <p>
                            No problem, <a href="#" style="color:#75c61e;">click here</a> to get a new password.
                        </p>	
                    </div><!--/span-->
                </div><!--/row-->

            </div><!--/.fluid-container-->

        </div><!--/fluid-row-->

        <!-- start: JavaScript-->

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url() ?>asset/back_end/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.ui.touch-punch.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/modernizr.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.cookie.js"></script>

        <script src='<?php echo base_url() ?>asset/back_end/js/fullcalendar.min.js'></script>

        <script src='<?php echo base_url() ?>asset/back_end/js/jquery.dataTables.min.js'></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/excanvas.js"></script>
        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.flot.js"></script>
        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.flot.resize.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.chosen.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.uniform.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.cleditor.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.noty.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.elfinder.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.raty.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.iphone.toggle.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.uploadify-3.1.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.gritter.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.imagesloaded.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.masonry.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.knob.modified.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/counter.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/retina.js"></script>

        <script src="<?php echo base_url() ?>asset/back_end/js/custom.js"></script>
        <!-- end: JavaScript-->

    </body>
</html>


