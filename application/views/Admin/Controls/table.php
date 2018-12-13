<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Controls Records</h2>
        </div>
        <div class="col-md-6">
            <a href="<?php echo base_url().$controller; ?>/add/" class="btn btn-info" style="float: right;" >Add Nutrient</a>
        </div>
    </div> 
    <br>
    <table id="datatable" class="main-table table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count_controls =  count($controls);
            for($i=0; $i<$count_controls; $i++)
            {   
            ?>
            <tr>
                <td><?php echo $i; ?></td>  
                <td><?php echo $controls[$i]->cname; ?> </td>

                <td>
                    <a href="<?php echo base_url().$controller.'/edit/'.$controls[$i]->cid; ?>" class="btn btn-success">Edit
                    </a>
                    <a onclick="return confirm('Do You Really Delete?');" href="<?php echo base_url().$controller.'/delete/'.$controls[$i]->cid; ?>" class="btn btn-danger">Delete</a>
                </td>   
            </tr>     
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );

</script>