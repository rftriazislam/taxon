<section>
    <div class="container">
        <div class="row">      
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <h1> Create Account </h1>
                    <!-- BEGIN CHECKOUT PAGE -->
                    <div class="panel-group checkout-page accordion scrollable" id="checkout-page">


                        <!-- BEGIN PAYMENT ADDRESS -->
                        <div id="c" class="panel panel-default">

                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-address-content" class="accordion-toggle">
                                        Personal Information
                                    </a>
                                </h2>
                            </div>
                            <h4 class="text-center" style="color:red">
                                <?php 
                                echo $p=$this->session->userdata('mess');
                                   if($p){
                                       $this->session->unset_userdata('mess');
                                   }
                                       ?>
                            </h4>
                            <div id="payment-address-content" class="panel-collapse collapse in">
                                <div class="panel-body row">
                                    <form action="<?php echo base_url() ?>Checkout/save_checkout" method="post">
                                        <div class="col-md-6 col-sm-6">
                                            <h3>Your Personal Details</h3>
                                            <div class="form-group">
                                                <label for="firstname">First Name <span class="require">*</span></label>
                                                <input type="text" id="firstname" name="customer_frist_name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">Last Name <span class="require">*</span></label>
                                                <input type="text" id="lastname" name="customer_last_name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-Mail <span class="require">*</span></label>
                                                <input type="text" id="email" name="customer_email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone">Phone Number  <span class="require">*</span></label>
                                                <input type="text" id="telephone" name="customer_phone_number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="fax">Fax</label>
                                                <input type="text" id="fax" name="customer_fax" class="form-control">
                                            </div>

                                            <h3>Your Password</h3>
                                            <div class="form-group">
                                                <label for="password">Password <span class="require">*</span></label>
                                                <input type="password" id="password" name="customer_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-confirm">Password Confirm <span class="require">*</span></label>
                                                <input type="password" id="password-confirm"  name="customer_confirm_password"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h3>Your Address</h3>



                                            <div class="form-group">
                                                <label for="city">City <span class="require">*</span></label>
                                                <input type="text" id="city"  name="customer_city"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="post-code">Post Code Or Zip Code <span class="require">*</span></label>
                                                <input type="text" id="post-code"  name="customer_post_code"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="country">Country <span class="require">*</span></label>
                                                <select class="form-control input-sm" name="customer_country" id="country">
                                                    <option value=""> --- Please Select --- </option>
                                                    <option value="244">Aaland Islands</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="region-state">Region/State <span class="require">*</span></label>
                                                <select class="form-control input-sm"  name="customer_region" id="region-state">
                                                    <option >Please Select Region </option>
                                                    <option value="1">Islam</option>
                                                    <option value="2">Hindu</option>
                                                    <option value="3">Chistan</option>
                                                    <option value="4">Aberdeenshire</option>
                                                    <option value="5">Other</option>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="address1">Permanent Address Or Present Address</label>
                                                <input type="text" id="address1"  name="customer_address"  class="form-control">
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="col-md-12">                      
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I wish to subscribe to the OXY newsletter. 
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked="checked"> My delivery and billing addresses are the same.
                                                </label>
                                            </div>
                                            <button class="btn btn-primary  pull-right" type="submit" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-address-content" id="button-payment-address">Login</button>
                                            <div class="checkbox pull-right">
                                                <label>
                                                    <input type="checkbox"> I have read and agree to the <a title="Privacy Policy" href="javascript:;">Privacy Policy</a> &nbsp;&nbsp;&nbsp; 
                                                </label>
                                            </div>                        
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END PAYMENT ADDRESS -->

                    </div>
                    <!-- END CHECKOUT PAGE -->
                </div>
            </div>
        </div>
    </div>
</section