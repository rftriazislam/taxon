<div class="row-fluid sortable " >

    <div class="box span12" >
        <div class="box-header"  data-original-title>
            <h2 style="color:#a73ef0;"><i class="halflings-icon edit"></i><span class="break"></span><b>Form Banner</b></h2>
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

            <form class="form-horizontal " action="<?php echo base_url() ?>Super_Admin/update_banner" style="color:#980606" method="post" enctype="multipart/form-data">


                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Banner Name </b></label>
                        <div class="controls">
                            <input type="text" name="banner_name" value="<?php echo $select_banner->banner_name?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <input type="hidden" name="banner_id" value="<?php echo $select_banner->banner_id?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Banner Image</b></label>
                        <div class="controls">
                            <input type="file" name="banner_image" value="<?php echo $select_banner->banner_image?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>New Banner</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="banner_type" style="color:#980606;">
                                <?php
                               $b= $select_banner->banner_type;
                                        if($b==1){
                                ?>
                              
                                <option style="color:red;" value="1">Top</option>
                                        <?php }else if($b==2){?>
                                <option style="color:red;" value="2">Middle</option>
                                        <?php }else if($b==3){?>
                                <option style="color:red;" value="3">Left Botom</option>
                                        <?php }else{?>
                                <option style="color:red;" value="4">Right Botom</option>
                               
                                        <?php }?>
                                <option style="color:#14de16;" value="1">Top</option>
                                <option style="color:#14de16;" value="2">Middle</option>
                                <option style="color:#14de16;" value="3">Left Botom</option>
                                <option style="color:#14de16;" value="4">Right Botom</option>

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>Publication Status</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="publication_status" style="color:#980606;">

                                <option style="color:#14de16;" value="1">Published</option>
                                <option style="color:#14de16;" value="0">Unpublished</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-actions" style="background-color:#b7eff2 ;">
                        <button type="submit" class="btn btn-primary" >Update</button>
                        <button type="<?php echo base_url()?>Super_Admin/manage_banner" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div>  

    <!--/span-->

</div>
<script type="text/javascript">
    document.forms['edit_banner'].elements['publication_status'].value='<?php echo $select_banner->publication_status?>';
    
    </script>