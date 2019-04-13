<div class="row-fluid sortable " >

    <div class="box span12" >
        <div class="box-header"  data-original-title>
            <h2 style="color:#a73ef0;"><i class="halflings-icon edit"></i><span class="break"></span><b>Form Edit Product</b></h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content ">

            <h2 class="text-center" style="color:red;">
                <?php
                $msg = $this->session->userdata('msg');

                if ($msg != NULL) {
                echo $msg;
                $this->session->unset_userdata('msg');
                }
                ?>
            </h2>
            <h2 class="text-center" style="color:red;">
                <?php
                $message = $this->session->userdata('message');

                if ($message != NULL) {
                echo $message;
                $this->session->unset_userdata('message');
                }
                ?>
            </h2>

            <form class="form-horizontal " action="<?php echo base_url() ?>Super_Admin/update_product" style="color:#980606" method="post" enctype="multipart/form-data">


                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product Name </b></label>
                        <div class="controls">
                            <input type="text" name="product_name" value="<?php echo $select_product->product_name ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <input type="hidden" name="product_id" value="<?php echo $select_product->product_id ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Category Name</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="category_id" style="color:#980606;">
                                <?php echo $t=$select_product->category_id;
                                        
                                       foreach ($all_category as $vi_category) { 
                                         echo $p=$vi_category->category_id;
                                          if($p == $t){
                                        ?>
                                <option style="color:red;" value="<?php echo $t ?>"><?php echo $vi_category->category_name ?></option>
                                <?php
                                           }   }
                                foreach ($all_category as $view_category) {
                                ?>
                                <option style="color:#14de16;" value="<?php echo $view_category->category_id ?>" ><?php echo $view_category->category_name ?></option>


                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Manufacture Name</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="manufacture_id" style="color:#980606;">
                                <?php echo $m=$select_product->manufacture_id;
                                        
                                       foreach ($all_manufacture as $vi_manufacture) { 
                                         echo $p=$vi_manufacture->manufacture_id;
                                          if($p == $m){
                                        ?>
                                <option style="color:red;" value="<?php echo $m ?>"><?php echo $vi_manufacture->manufacture_name ?></option>
                                <?php
                                       }}
                                foreach ($all_manufacture as $view_manufacture) {
                                   ?>
                                    <option style="color:#14de16;" value="<?php echo $view_manufacture->manufacture_id ?>" ><?php echo $view_manufacture->manufacture_name ?></option>


                                    <?php } ?>
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product Image</b></label>
                        <div class="controls">
                            <input type="file" name="product_image"  value="<?php echo $select_product->product_image ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product New Price </b></label>
                        <div class="controls">
                            <input type="text" name="product_new_price"  value="<?php echo $select_product->product_new_price ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product Old Price </b></label>
                        <div class="controls">
                            <input type="text" name="product_old_price"  value="<?php echo $select_product->product_old_price ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product Quantity </b></label>
                        <div class="controls">
                            <input type="text"  name="product_quantity" value="<?php echo $select_product->product_quantity ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product Sku Code</b></label>
                        <div class="controls">
                            <input type="text"  name="product_sku_code" value="<?php echo $select_product->product_sku_code ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product Service</b></label>
                        <div class="controls">
                            <input type="text"  name="product_service" value="<?php echo $select_product->product_service ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2"><b>Product Description</b></label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_description" id="textarea2" rows="3"> <?php echo $select_product->product_description ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Product Discount </b></label>
                        <div class="controls">
                            <input type="number" name="product_discount" value="<?php echo $select_product->product_discount ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>New Product</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="new_product" style="color:#980606;">
                                <?php if ($select_product->new_product == 1) { ?>
                                    <option style="color:red;" value="1">New</option>
                                <?php } else if ($select_product->new_product == 2) { ?>
                                    <option style="color:red;" value="2">Latest</option>

                                <?php } else { ?>
                                    <option style="color:red;" value="3">Old</option>
                                <?php } ?>
                                <option style="color:#14de16;" value="1">New</option>
                                <option style="color:#14de16;" value="2">Latest</option>
                                <option style="color:#14de16;" value="3">Old</option>

                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Publication Status</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="publication_status" style="color:#980606;">
                                <?php if ($select_product->publication_status == 1) { ?>
                                    <option style="color:red;" value="1">Published</option>
                                <?php } else { ?>
                                    <option style="color:red;" value="0">Unpublished</option>
                                <?php } ?>
                                <option style="color:#14de16;" value="1">Published</option>
                                <option style="color:#14de16;" value="0">Unpublished</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-actions" style="background-color:#b7eff2 ;">
                        <button type="submit" class="btn btn-primary" >Update</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div>  

    <!--/span-->

</div>
