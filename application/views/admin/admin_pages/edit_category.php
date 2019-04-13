                                                                                        
<div class="row-fluid sortable " >

    <div class="box span12" >
        <div class="box-header"  data-original-title>
            <h2 style="color:#a73ef0;"><i class="halflings-icon edit"></i><span class="break"></span><b>Form Category</b></h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content ">


            <h2 class="text-center" style="color:red;">
                <?php
                $msg = $this->session->userdata('message_category');

                if ($msg != NULL) {
                    echo $msg;
                    $this->session->unset_userdata('message_category');
                }
                ?>
            </h2>


            <form class="form-horizontal " action="<?php echo base_url() ?>Super_Admin/update_category" style="color:#980606" method="post">

                <fieldset >

                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Category Name </b></label>
                        <div class="controls">
                            <input type="text"  name="category_name" value="<?php echo $select_category->category_name?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <input type="hidden"  name="category_id" value="<?php echo $select_category->category_id?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>

          
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2"><b>Category Description</b></label>
                        <div class="controls">
                            <textarea class="cleditor" name="category_description" id="textarea2" rows="3"><?php echo $select_category->category_description?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Publication Status</b></label>
                        <div class="controls" >
                            <select id="selectError3"  name="publication_status" style="color:#00ffcc;">
                               <?php 
                               $t=$select_category->publication_status;
                               if($t==1){
                                    ?>
                                <option style="color:red;" value="1">Published</option>
                               <?php } else {?>
                                <option style="color:red;" value="0">Unpublished</option>
                                <?php }  ?> 
                                
                                <option style="color:#14de16;" value="1">Published</option>
                                <option style="color:#14de16;" value="0">Unpublished</option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>

            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->




