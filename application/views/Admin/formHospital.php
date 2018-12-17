<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action.'Hospital';?>" enctype="multipart/form-data">
        <h2>Hospital Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Hospital Name</span>
            </div>
            <input type="text" class="form-control" id="hname" name="hname" placeholder="" value="<?php if($action == 'update'){echo $row[0]->hname;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Treatments Available</span>
            </div>
            <input type="text" class="form-control" id="hospspec" name="hospspec" value="<?php if($action == 'update'){echo $row[0]->hospspec; } ?>"  required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Image</span>
            </div>
            <input type="file" class="form-control" id="hospimg" name="hospimg" required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Country</span>
            </div>
            <input type="text" class="form-control" id="hospcou" name="hospcou" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->hospcou;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Short Description</span>
            </div>
            <input type="text" class="form-control" id="hospsd" name="hospsd" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->hospsd;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Long Description</span>
            </div>
            <input type="text" class="form-control" id="hospld" name="hospld" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->hospld;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">URL</span>
            </div>
            <input type="text" class="form-control" id="hospurl" name="hospurl" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->hospurl;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Meta Title</span>
            </div>
            <input type="text" class="form-control" id="hospmetatitle" name="hospmetatitle" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->hospmetatitle;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Meta Description</span>
            </div>
            <input type="text" class="form-control" id="hospmetadesc" name="hospmetadesc" placeholder=" " value="<?php if($action == 'update'){echo $row[0]->hospmetadesc;} ?>">
        </div>
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->hid; ?>" name="hid" id="hid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
