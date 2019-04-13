 <section>
    <div class="container">
        <div class="row">

<!-- BEGIN PAYMENT METHOD -->
              <div id="payment-method" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-method-content" class="accordion-toggle">
                       Payment Method
                    </a>
                  </h2>
                </div>
                <div id="payment-method-content" class="panel-collapse in">
                  <div class="panel-body row">
                      <form action="<?php echo base_url()?>Checkout/save_payment" method="post">
                    <div class="col-md-12">
                      <p>Please select the preferred payment method to use on this order.</p>
                      <div class="radio-list">
                        <label>
                            <input type="radio" name="payment_method" value="cash_on_delivery"> Cash On Delivery
                        </label>
                      </div>
                      <div class="radio-list">
                        <label>
                          <input type="radio" name="payment_method" value="paypel"> Paypel
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="delivery-payment-method">Add Comments About Your Order</label>
                        <textarea id="delivery-payment-method" rows="8" class="form-control"></textarea>
                      </div>
                      <button class="btn btn-primary  pull-right" type="submit" id="button-payment-method" data-toggle="collapse" data-parent="#checkout-page" data-target="#confirm-content">Continue</button>
                      <div class="checkbox pull-right">
                        <label>
                          <input type="checkbox"> I have read and agree to the <a title="Terms & Conditions" href="javascript:;">Terms & Conditions </a> &nbsp;&nbsp;&nbsp; 
                        </label>
                      </div>  
                    </div>
                  </form>
                  </div>
                </div>
              </div>
    </div>
    </div>

</section>
              <!-- END PAYMENT METHOD -->