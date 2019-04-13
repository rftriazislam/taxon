       
<section>
    <div class="container">
        <div class="row">
            <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Checkout</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

              <!-- BEGIN CHECKOUT -->
              <div id="checkout" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#checkout-content" class="accordion-toggle">
                    Checkout 
                    </a>
                  </h2>
                </div>
                   <h5 class="text-center" style="color:red">
                                <?php 
                                echo $p=$this->session->userdata('mess');
                                   if($p){
                                       $this->session->unset_userdata('mess');
                                   }
                                       ?>
                   </h5>
                <div id="checkout-content" class="panel-collapse collapse in">
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <h3>New Customer</h3>
                      <p>Checkout Options:</p>
                      <div class="radio-list">
                        <label>
                          <input type="radio" name="account"  value="register"> Register Account
                        </label>
                        <label>
                          <input type="radio" name="account"  value="guest"> Guest Checkout
                        </label> 
                      </div>
                      <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                      <button class="btn btn-primary" type="submit" data-toggle="collapse" data-parent="#checkout-page" data-target="#payment-address-content">Continue</button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <h3>Returning Customer</h3>
                      <p>I am a returning customer.</p>
                      <form role="form" action="<?php echo base_url()?>Checkout/login_confirm" method="post">
                        <div class="form-group">
                            <label for="email-login" style="color:#cc66ff">E-Mail</label>
                          <input type="text" name="customer_email" id="email-login" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password-login" style="color:#ffff00" >Password</label>
                          <input type="password" id="password-login" name="customer_password" class="form-control">
                        </div>
                          <a style="color:#00ffcc" href="<?php echo base_url()?>Checkout/password_update">Forgotten Password?</a>
                          <a style="color:royalblue" href="<?php echo base_url()?>Checkout/create_account">Create Account</a>
                        <div class="padding-top-20">                  
                          <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <hr>
                        <div class="login-socio">
                          <p class="text-muted">or login using:</p>
                          <ul class="social-icons">
                            <li><a href="javascript:;" data-original-title="facebook" class="facebook" title="facebook"></a></li>
                            <li><a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a></li>
                            <li><a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a></li>
                            <li><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a></li>
                          </ul>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          </div>
          </div>
          </div>
    
    </section>
