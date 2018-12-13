<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action;?>" enctype="multipart/form-data">
        <h2>Maintenance Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Name</span>
            </div>
            <input type="text" class="form-control" id="mname" name="mname" placeholder="Name of Maintenance" value="<?php if($action == 'update'){echo $row[0]->mname;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Image</span>
            </div>
            <input type="file" class="form-control" id="mimg" name="mimg" placeholder="Name of Maintenance" value="<?php if($action == 'update'){echo $row[0]->nimg; } ?>"  required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Feedchart Link</span>
            </div>
            <input type="text" class="form-control" id="mfeedlink" name="nfeedlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->mfeedlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Services Link</span>
            </div>
            <input type="text" class="form-control" id="mserlink" name="mserlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->mserlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Description</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="mdesc" required>
                <?php if($action == 'update'){echo $row[0]->mdesc;} ?>
            </textarea>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Keywords</span>
            </div>
            <input type="text" class="form-control" id="mkeywords" name="mkeywords" placeholder="Enter Keywords" value="<?php if($action == 'update'){echo $row[0]->mkeywords;} ?>" required>
        </div>
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->nid; ?>" name="mid" id="mid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
