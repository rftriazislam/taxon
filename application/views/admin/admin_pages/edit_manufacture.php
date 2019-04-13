<div class="row-fluid sortable " >

    <div class="box span12" >
        <div class="box-header"  data-original-title>
            <h2 style="color:#a73ef0;"><i class="halflings-icon edit"></i><span class="break"></span><b>Form Manufacture</b></h2>
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

            <form class="form-horizontal " action="<?php echo base_url() ?>Super_Admin/update_manufacture" style="color:#980606" method="post" enctype="multipart/form-data">


                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Manufacture Name </b></label>
                        <div class="controls">
                            <input type="text" name="manufacture_name" value="<?php echo $select_manufacture->manufacture_name ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <input type="hidden" name="manufacture_id" value="<?php echo $select_manufacture->manufacture_id ?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Category ID</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="category_id" style="color:#980606;">
                                <?php
                                $m=$select_manufacture->category_id;
                                foreach ($id_category as $v_category) {
                                 echo  $ci=$v_category->category_id; 
                               
                                if($ci==$m){
                                ?>
                                <option style="color:red;" value="<?php echo $m ?>" ><?php echo $v_category->category_name;?></option>
                                <?php }}?>
                                <?php
                                foreach ($id_category as $v_category) {
                                   
                                    ?>

                                    <option style="color:#14de16;" value="<?php echo $v_category->category_id ?>"><?php echo $v_category->category_name ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Manufacture Image</b></label>
                        <div class="controls">
                            <input type="file" name="manufacture_image"   class="span6 typeahead" id="typeahead" value="<?php echo $select_manufacture->manufacture_image ?>"  data-provide="typeahead" data-items="4" >
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2"><b>Manufacture Description</b></label>
                        <div class="controls">
                            <textarea class="cleditor" name="manufacture_description"  id="textarea2" rows="3"><?php echo $select_manufacture->manufacture_description ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Publication Status</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="publication_status"style="color:#980606;">
                                <?php if ($select_manufacture->publication_status == 1) { ?>
                                    <option style="color:#14de16;" value="1">Published</option>
                                <?php } else { ?>
                                    <option style="color:#14de16;" value="0">Unpublished</option>
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
