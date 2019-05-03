<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Enquiry Records</h2>
        </div>
    </div> 
    <br>
    <table id="datatable" class="main-table table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Whatsapp Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count_enquiries =  count($enquiries);
            for($i=0; $i<$count_enquiries; $i++)
            {   
            ?>
            <tr data-toggle="modal" data-target="#exampleModal_<?php echo $enquiries[$i]->uid; ?>">
                <td><?php echo $i+1; ?></td>  
                <td><?php echo $enquiries[$i]->username; ?> </td>
                <td><?php echo $enquiries[$i]->number; ?> </td>
            </tr>  
            <div class="modal fade" id="exampleModal_<?php echo $enquiries[$i]->uid; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <b>Name :</b>  <?php echo $enquiries[$i]->username; ?>
                            <br>
                            <br>
                            <b>Whatsapp Number :</b> <?php echo $enquiries[$i]->number; ?>
                            <br>
                            <br>
                            <b>Email :</b> <?php echo $enquiries[$i]->email; ?>
                            <br>
                            <br>
                            <b>Country :</b> <?php echo $enquiries[$i]->country; ?>
                            <br>
                            <br>
                            <b>State :</b> <?php echo $enquiries[$i]->state; ?>
                            <br>
                            <br>
                            <b>Description :</b> <?php echo $enquiries[$i]->desc_enquiry; ?>
                        </div>
                    </div>
                </div>
            </div>
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