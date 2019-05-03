<br>

<div class="container">
    <div class="row">

        <div class="col-md-3">
            <img alt="<?php echo $row[0]->docname; ?>" src="<?php echo $row[0]->docimg; ?>" width="100%"> 
        </div>


        <div class=" col-md-9"> 
            <br>
            <br>
            <h2 class="docProfile"><?php echo $row[0]->docname; ?></h2>
                        <br>

            <h6 class="docSpecProfile"><?php echo $row[0]->docdesig; ?></h6>

            <h5 class="docDesgProfile"><?php echo $row[0]->docspec; ?> </h5>


            <h5 class="docHospProfile"><?php echo $row[0]->dochosp; ?></h5>


            <h5 class="docSdProfile"><?php echo $row[0]->doccou; ?></h5>


            <b ><p class="docSdProfile"><?php echo $row[0]->docsd; ?></p></b>
            <p class="docSdProfile"><?php echo $row[0]->docld; ?></p>
        </div>
    </div>
</div>
<br>
<br>
<br>


<?php $this->load->view('Include/footer'); ?>
