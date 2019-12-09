       
<section>
    <div class="container">
        <div class="row">

            <!-- BEGIN SHIPPING ADDRESS -->
            <div id="shipping-address" class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-address-content" class="accordion-toggle">
                            Email Details
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
                    <form action="<?php echo base_url()?>Welcome/email_send" method="post" enctype="multipart/form-data">
                    <div class="panel-body row col-md-8">
                        
                            <div class="form-group">
                                <label for="firstname">To<span class="require">*</span></label>
                                <input type="email" id="firstname" name="to" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname">From<span class="require">*</span></label>
                                <input type="email" id="lastname" name="from" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Subject<span class="require">*</span></label>
                                <input type="text" id="lastname" name="subject" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="telephone">Message  <span class="require">*</span></label>
                                <textarea type="text" id="telephone" name="message" class="form-control"></textarea>
                            </div>

                        
                        
                         <div class="col-md-12">
                            <button class="btn btn-primary  pull-right" type="submit" id="button-shipping-address" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-method-content">Send</button>
                        </div>
                    </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- END SHIPPING ADDRESS -->