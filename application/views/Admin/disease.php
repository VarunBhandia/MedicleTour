<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Disease Records</h2>
        </div>
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>Admin/addDisease/" class="btn btn-info" style="float: right;" >Add Disease</a>
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
            $count_d =  count($diseases);
            for($i=0; $i<$count_d; $i++)
            {   
            ?>
            <tr>
                <td><?php echo $i; ?></td>  
                <td><?php echo $diseases[$i]->dname; ?> </td>

                <td>
                    <a href="<?php echo base_url(); ?>Admin/editDisease/<?php echo $diseases[$i]->did; ?>" class="btn btn-success">Edit
                    </a>
                    <a onclick="return confirm('Do You Really Delete?');" href="<?php echo base_url(); ?>Admin/deleteDisease/<?php echo $diseases[$i]->did; ?>" class="btn btn-danger">Delete</a>
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