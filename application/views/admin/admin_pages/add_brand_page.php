<div class="row-fluid sortable " >

    <div class="box span12" >
        <div class="box-header"  data-original-title>
            <h2 style="color:#a73ef0;"><i class="halflings-icon edit"></i><span class="break"></span><b>Form Brand</b></h2>
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

            <form class="form-horizontal " action="<?php echo base_url() ?>Super_Admin/save_brand" style="color:#980606" method="post" enctype="multipart/form-data">


                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Brand Name </b></label>
                        <div class="controls">
                            <input type="text" name="brand_name" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>

                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="typeahead"><b>Brand Image</b></label>
                        <div class="controls">
                            <input type="file" name="brand_image" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="selectError3"><b>New Brand</b></label>
                        <div class="controls" >
                            <select id="selectError3" name="brand_type" style="color:#980606;">
                                <option style="color:#14de16;" >Select Brand Type</option>
                                <option style="color:#14de16;" value="1">New</option>
                                <option style="color:#14de16;" value="2">Old</option>
                         

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
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div>  

    <!--/span-->

</div>
