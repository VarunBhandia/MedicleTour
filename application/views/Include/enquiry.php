<head>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo1.png" type="image/png">
    <link rel="icon" href="<?php echo base_url()?>assets/img/logo1.png" type="image/png">  
</head>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success fixed-button" data-toggle="modal" data-target="#exampleModalLong">
    Send Inquiry 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="<?php echo base_url().'/Home/insertEnquiry';?>">
                <div class="modal-header">
                    <h5 class="modal-title">Enquiry Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Name</span>
                        </div>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Whatsapp Number</span>
                        </div>
                        <input type="text" class="form-control" name="number">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Country</span>
                        </div>
                        <input type="text" class="form-control" name="country">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">State</span>
                        </div>
                        <input type="text" class="form-control" name="state">
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" placeholder="Describe Your Medical Problem*" name="desc"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>