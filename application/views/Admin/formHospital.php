<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action.'Doctor';?>">
        <h2>Doctor Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Doctor Name</span>
            </div>
            <input type="text" class="form-control" id="docname" name="docname" placeholder="Varun Bhandia" value="<?php if($action == 'update'){echo $row[0]->docname;} ?>">
        </div>
        
        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->docid; ?>" name="docid" id="docid">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
