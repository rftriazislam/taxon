
<div class="row-fluid sortable" >		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2 style="color:black"><i class="halflings-icon user"></i><span class="break"></span><b>Manage Banner</b></h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>

                    <tr>
                        <th><b>Banner Id</b></th>
                        <th><b>Banner Name</b></th>
                        <th><b>Banner Image</b></th>
                        <th><b>Banner Type</b></th>
                     
                        <th><b>Publication Status</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($manage_banner as $view_banner) {
                        ?>

                        <tr>
                            <td><?php echo $view_banner->banner_id; ?></td>
                            <td class="center"><?php echo $view_banner->banner_name; ?></td>
                             <td class="center " style="width:10px;"><img width="80" src="<?php echo base_url().$view_banner->banner_image?>" /></td>
                            <td class="center">
                                <?php
                                $pub = $view_banner->banner_type;
                                if ($pub==1) {
                                    echo '<span style="color:#00ffcc;"><b>' . ' Top ' . '</b></span>';
                                } else if($pub==2) {
                                    echo '<span style="color:blue;"><b>' . ' Middle ' . '</b></span>';
                                
                                } else if($pub==3) {
                                    echo '<span style="color:yellow;"><b>' . ' Left Botom ' . '</b></span>';
                                
                               
                                } else {
                                    echo '<span style="color:green;"><b>' . ' Right Botom' . '</b></span>';
                                }
                                ?>
                            </td>
                            <td class="center" style="width:10px">
                                <?php
                                $pub = $view_banner->publication_status;
                                if ($pub==0) {
                                    echo '<span style="color:red;"><b>' . ' Unpublished ' . '</b></span>';
                                } else {
                                    echo '<span style="color:#46e053;"><b>' . ' Published ' . '</b></span>';
                                }
                                ?>
                            </td>
                            <td class="center">
                               
                                <a class="btn btn-success" href="<?php echo base_url()?>Super_Admin/top_banner/<?php echo $view_banner->banner_id?>">
                                    <p>Top</p>
                                </a>
                                <a class="btn btn-dark" href="<?php echo base_url()?>Super_Admin/middle_banner/<?php echo $view_banner->banner_id?>">
                                    <p>Middle</p>
                                </a>
                                <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/left_botom_banner/<?php echo $view_banner->banner_id?>">
                                    <p> L Botom</p> 
                                </a>
                                <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/right_botom_banner/<?php echo $view_banner->banner_id?>">
                                    <p> R Botom</p>
                                </a>
                              
                                 <?php 
                                if($view_banner->publication_status==1){
                                    ?>
                                <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/published_banner/<?php echo $view_banner->banner_id?>">
                               <i class="halflings-icon white thumbs-down"></i>
                                </a>
                                <?php }else {?>
                                <a class="btn btn-success" href="<?php echo base_url()?>Super_Admin/unpublished_banner/<?php echo $view_banner->banner_id?>">
                                 <i class="halflings-icon white thumbs-up"></i>
                                </a>
                                <?php }?>
                                <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/edit_banner/<?php echo $view_banner->banner_id?>">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/delete_banner/<?php echo $view_banner->banner_id?>" onclick=" return bannerDelete()" >
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->
