
<div class="row-fluid sortable" >		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2 style="color:black"><i class="halflings-icon user"></i><span class="break"></span><b>Manage Manufacture</b></h2>
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
                        <th><b>Manufacture Id</b></th>
                        <th><b>Manufacture Name</b></th>
                        <th><b>Manufacture Image</b></th>
                        <th><b>Manufacture Description</b></th>
                        <th><b>Publication Status</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($manage_manufacture as $view_manufacture) {
                        ?>

                        <tr>
                            <td><?php echo $view_manufacture->manufacture_id; ?></td>
                            <td class="center"><?php echo $view_manufacture->manufacture_name; ?></td>
                              <td class="center " style="width:10px;"><img width="80" src="<?php echo base_url().$view_manufacture->manufacture_image?>" /></td>
                            <td class="center" ><?php echo $view_manufacture->manufacture_description; ?></td>
                            <td class="center">
                                <?php
                                $pub = $view_manufacture->publication_status;
                                if ($pub ==0) {
                                    echo '<span style="color:red;"><b>' . ' Unpublished ' . '</b></span>';
                                } else {
                                    echo '<span style="color:#46e053;"><b>' . ' Published ' . '</b></span>';
                                }
                                ?>
                            </td>
                            <td class="center">
                                <?php
                                if ($view_manufacture->publication_status == 1) {
                                    ?>
                                    <a class="btn btn-danger" href="<?php echo base_url() ?>Super_Admin/published_manufacture/<?php echo $view_manufacture->manufacture_id ?>">
                                        <i class="halflings-icon white thumbs-down"></i>
                                    </a>
                                <?php } else { ?>
                                    <a class="btn btn-success" href="<?php echo base_url() ?>Super_Admin/unpublished_manufacture/<?php echo $view_manufacture->manufacture_id ?>">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>
                                <?php } ?>
                                <a class="btn btn-info" href="<?php echo base_url() ?>Super_Admin/edit_manufacture/<?php echo $view_manufacture->manufacture_id ?>">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url() ?>Super_Admin/delete_manufacture/<?php echo $view_manufacture->manufacture_id ?>" onclick=" return manufactureDelete()" >
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>            
        </div>
    </div>

</div>
