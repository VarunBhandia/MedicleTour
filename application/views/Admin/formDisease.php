<?php $this->load->view('Admin/header'); ?>
<div class="container">
    <form method="post" action="<?php echo base_url().$controller.'/'.$action.'Disease';?>">
        <h2>Diseases Form</h2>
        <br>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Diseases Name</span>
            </div>
            <input type="text" class="form-control" id="dname" name="dname" placeholder="Ashtama" value="<?php if($action == 'update'){echo $row[0]->dname;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Diseases Link</span>
            </div>
            <input type="text" class="form-control" id="dlink" name="dlink" placeholder="www.example.com" value="<?php if($action == 'update'){echo $row[0]->dlink;} ?>">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Diseases Country</span>
            </div>
            <select name="dcouid" id="dcouid" class="form-control">
                <?php
                foreach ($countries as $country)
                {
                ?>

                <option <?php if($action == 'update'){  echo $country->couid == $row[0]->dcouid ? 'selected' : '' ; }?> value="<?php echo $country->couid; ?>"><?php echo $country->couname; ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->did; ?>" name="did" id="did">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
