<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Bionutrients Records</h2>
        </div>
        <div class="col-md-6">
            <a href="<?php echo base_url().$controller; ?>/add/" class="btn btn-info" style="float: right;" >Add Bionutrient</a>
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
            $count_bionutrients =  count($bionutrients);
            for($i=0; $i<$count_bionutrients; $i++)
            {   
            ?>
            <tr>
                <td><?php echo $i; ?></td>  
                <td><?php echo $bionutrients[$i]->bnname; ?> </td>

                <td>
                    <a href="<?php echo base_url().$controller.'/edit/'.$bionutrients[$i]->bnid; ?>" class="btn btn-success">Edit
                    </a>
                    <a onclick="return confirm('Do You Really Delete?');" href="<?php echo base_url().$controller.'/delete/'.$bionutrients[$i]->bnid; ?>" class="btn btn-danger">Delete</a>
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