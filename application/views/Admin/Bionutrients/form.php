<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action;?>" enctype="multipart/form-data">
        <h2>Bionutrient Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Name</span>
            </div>
            <input type="text" class="form-control" id="bnname" name="bnname" placeholder="Name of Bionutrient" value="<?php if($action == 'update'){echo $row[0]->bnname;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Image</span>
            </div>
            <input type="file" class="form-control" id="bnimg" name="bnimg" placeholder="Name of Bionutrient" value="<?php if($action == 'update'){echo $row[0]->bnimg; } ?>"  required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Feedchart Link</span>
            </div>
            <input type="text" class="form-control" id="bnfeedlink" name="bnfeedlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->bnfeedlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Services Link</span>
            </div>
            <input type="text" class="form-control" id="bnserlink" name="bnserlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->bnserlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Description</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="bndesc" required>
                <?php if($action == 'update'){echo $row[0]->bndesc;} ?>
            </textarea>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Keywords</span>
            </div>
            <input type="text" class="form-control" id="bnkeywords" name="bnkeywords" placeholder="Enter Keywords" value="<?php if($action == 'update'){echo $row[0]->bnkeywords;} ?>" required>
        </div>
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->bnid; ?>" name="bnid" id="bnid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
