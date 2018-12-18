<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action.'Doctor';?>" enctype="multipart/form-data">
        <h2>Doctor Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Doctor Name</span>
            </div>
            <input type="text" class="form-control" id="docname" name="docname" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->docname;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Specialty</span>
            </div>
            <input type="text" class="form-control" id="docspec" name="docspec" placeholder="" value="<?php if($action == 'update'){echo $row[0]->docspec;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Image</span>
            </div>
            <input type="file" class="form-control" id="docimg" name="docimg" required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Designation</span>
            </div>
            <input type="text" class="form-control" id="docdesig" name="docdesig" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->docdesig;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Hospital</span>
            </div>
            <input type="text" class="form-control" id="dochosp" name="dochosp" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->dochosp;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Country</span>
            </div>
            <input type="text" class="form-control" id="doccou" name="doccou" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->doccou;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Short Description</span>
            </div>
            <input type="text" class="form-control" id="docsd" name="docsd" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->docsd;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Long Description</span>
            </div>
            <input type="text" class="form-control" id="docld" name="docld" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->docld;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">URL</span>
            </div>
            <input type="text" class="form-control" id="docurl" name="docurl" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->docurl;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Meta Title</span>
            </div>
            <input type="text" class="form-control" id="docmetatitle" name="docmetatitle" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->docmetatitle;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Meta Description</span>
            </div>
            <input type="text" class="form-control" id="docmetadesc" name="docmetadesc" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->docmetadesc;} ?>">
        </div>
        <br>
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->docid; ?>" name="docid" id="docid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
