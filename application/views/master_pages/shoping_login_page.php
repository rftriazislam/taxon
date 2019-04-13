       
<section>
    <div class="container">
        <div class="row">

            <!-- BEGIN SHIPPING ADDRESS -->
            <div id="shipping-address" class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-address-content" class="accordion-toggle">
                            Delivery Details
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
                <div id="shipping-address-content" class="panel-collapse in">
                    <form action="<?php echo base_url()?>Checkout/save_shoping" method="post">
                    <div class="panel-body row">
                        <div class="col-md-6 col-sm-6">
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

                        </div>
                        <div class="col-md-6 col-sm-6">
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
                        <div class="col-md-12">
                            <button class="btn btn-primary  pull-right" type="submit" id="button-shipping-address" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-method-content">Continue Payment</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- END SHIPPING ADDRESS -->