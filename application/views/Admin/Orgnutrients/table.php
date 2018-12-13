<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Organic Nutrients Records</h2>
        </div>
        <div class="col-md-6">
            <a href="<?php echo base_url().$controller; ?>/add/" class="btn btn-info" style="float: right;" >Add organic Nutrient</a>
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
            $count_orgnutrients =  count($orgnutrients);
            for($i=0; $i<$count_orgnutrients; $i++)
            {   
            ?>
            <tr>
                <td><?php echo $i; ?></td>  
                <td><?php echo $orgnutrients[$i]->onname; ?> </td>

                <td>
                    <a href="<?php echo base_url().$controller.'/edit/'.$orgnutrients[$i]->onid; ?>" class="btn btn-success">Edit
                    </a>
                    <a onclick="return confirm('Do You Really Delete?');" href="<?php echo base_url().$controller.'/delete/'.$orgnutrients[$i]->onid; ?>" class="btn btn-danger">Delete</a>
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