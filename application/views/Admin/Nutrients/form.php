<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action;?>" enctype="multipart/form-data">
        <h2>Nutrient Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Name</span>
            </div>
            <input type="text" class="form-control" id="nname" name="nname" placeholder="Name of Nutrient" value="<?php if($action == 'update'){echo $row[0]->nname;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Image</span>
            </div>
            <input type="file" class="form-control" id="nimg" name="nimg" placeholder="Name of Nutrient" value="<?php if($action == 'update'){echo $row[0]->nimg; } ?>"  required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Feedchart Link</span>
            </div>
            <input type="text" class="form-control" id="nfeedlink" name="nfeedlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->nfeedlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Services Link</span>
            </div>
            <input type="text" class="form-control" id="nserlink" name="nserlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->nserlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Description</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="ndesc" required>
                <?php if($action == 'update'){echo $row[0]->ndesc;} ?>
            </textarea>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Keywords</span>
            </div>
            <input type="text" class="form-control" id="nkeywords" name="nkeywords" placeholder="Enter Keywords" value="<?php if($action == 'update'){echo $row[0]->nkeywords;} ?>" required>
        </div>
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->nid; ?>" name="nid" id="nid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
