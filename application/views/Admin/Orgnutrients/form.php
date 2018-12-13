<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action;?>" enctype="multipart/form-data">
        <h2>Nutrient Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Name</span>
            </div>
            <input type="text" class="form-control" id="onname" name="onname" placeholder="Name of Organic Nutrient" value="<?php if($action == 'update'){echo $row[0]->onname;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Image</span>
            </div>
            <input type="file" class="form-control" id="onimg" name="onimg" placeholder="Name of Organic Nutrient" value="<?php if($action == 'update'){echo $row[0]->onimg; } ?>"  required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Feedchart Link</span>
            </div>
            <input type="text" class="form-control" id="onfeedlink" name="onfeedlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->onfeedlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Services Link</span>
            </div>
            <input type="text" class="form-control" id="onserlink" name="onserlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->onserlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Description</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="ndesc" required>
                <?php if($action == 'update'){echo $row[0]->ondesc;} ?>
            </textarea>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Keywords</span>
            </div>
            <input type="text" class="form-control" id="onkeywords" name="onkeywords" placeholder="Enter Keywords" value="<?php if($action == 'update'){echo $row[0]->onkeywords;} ?>" required>
        </div>
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->onid; ?>" name="onid" id="onid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
