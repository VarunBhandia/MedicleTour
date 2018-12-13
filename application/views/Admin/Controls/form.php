<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action;?>" enctype="multipart/form-data">
        <h2>Control Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Name</span>
            </div>
            <input type="text" class="form-control" id="cname" name="cname" placeholder="Name of Control" value="<?php if($action == 'update'){echo $row[0]->cname;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Image</span>
            </div>
            <input type="file" class="form-control" id="cimg" name="cimg" placeholder="Name of Control" value="<?php if($action == 'update'){echo $row[0]->cimg; } ?>"  required> 
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Feedchart Link</span>
            </div>
            <input type="text" class="form-control" id="cfeedlink" name="cfeedlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->cfeedlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Services Link</span>
            </div>
            <input type="text" class="form-control" id="cserlink" name="cserlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->cserlink;} ?>" required>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Product Description</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="cdesc" required>
                <?php if($action == 'update'){echo $row[0]->cdesc;} ?>
            </textarea>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Keywords</span>
            </div>
            <input type="text" class="form-control" id="ckeywords" name="ckeywords" placeholder="Enter Keywords" value="<?php if($action == 'update'){echo $row[0]->ckeywords;} ?>" required>
        </div>
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->cid; ?>" name="cid" id="cid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
