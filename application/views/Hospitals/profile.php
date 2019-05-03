<br>
<br>

<div class="container">
    <div class="row">

        <div class="col-md-3">
            <img alt="<?php echo $row[0]->hname; ?>" src="<?php echo $row[0]->hospimg; ?>" width="100%"> 
        </div>

        <div class=" col-md-9"> 
            <br>

            <h2 class="docProfile"><?php echo $row[0]->hname; ?></h2>
            <br>

            <h5 class="docDesgProfile"><?php echo $row[0]->hospspec; ?> </h5>

            <h5 class="docSdProfile"><?php echo $row[0]->hospcou; ?></h5>


            <b ><p class="docSdProfile"><?php echo $row[0]->hospsd; ?></p></b>
            <p class="docSdProfile"><?php echo $row[0]->hospld; ?></p>
        </div>
    </div>
</div>
<br>
<br>
<?php $this->load->view('Include/footer'); ?>
