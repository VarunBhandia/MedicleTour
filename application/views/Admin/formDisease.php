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
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <textarea name="disdesc" id="editor1">
                <?php if($action == 'update'){echo $row[0]->disdesc;} ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </div>
        <br>
        <label>Doctors</label> 

        <?php 
        if($action == 'update')
        {
            $row_doctors = explode(",",$row[0]->doctors);
            $count_doc = count($row_doctors);
            $row_hosps = explode(",",$row[0]->hosps);

            $count_hosp = count($row_hosps);
        }
        ?>
        <div class="row">
            <?php foreach($doctors as $doctor){ ?>

            <div class="col-md-1">
                <input type="checkbox" 
                       <?php if($action == 'update')
{ 
    for( $i=0;$i < $count_doc;$i++) 
    {
        if( $doctor->docid == $row_doctors[$i])
        {echo 'checked'; 
        } 
    }
} 
                       ?>  
                       value="<?php echo $doctor->docid; ?>" name="doctors[]"><p><?php echo $doctor->docname; ?></p>
            </div>
            <?php } ?>
        </div>

        <label>Hospitals</label> 

        <div class="row">
            <?php foreach($hosps as $hosp){ ?>

            <div class="col-md-1">
                <input type="checkbox" 
                       <?php if($action == 'update')
{ 
    for( $i=0;$i < $count_hosp;$i++) 
    {
        if( $hosp->hid == $row_hosps[$i])
        {echo 'checked'; 
        } 
    }
} 
                       ?>  
                       value="<?php echo $hosp->hid; ?>" name="hosps[]"><p><?php echo $hosp->hname; ?></p>
            </div>
            <?php } ?>
        </div>


        <?php if($action == 'update'){ ?> 
        <input type="hidden" value="<?php echo $row[0]->did; ?>" name="did" id="did">
        <?php } ?>
        <br>
        <input type="submit" class="btn btn-primary mb-2" value="<?php if($action == 'update'){echo 'Update'; } else { echo 'Add';} ?>">
    </form>
</div>
