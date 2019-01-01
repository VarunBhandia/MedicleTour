<div class="container">
    <div class="row">

        <div class="col-md-3">
            <img alt="User Pic" src="<?php echo $row[0]->docimg; ?>" width="100%"> 
        </div>


        <div class=" col-md-9"> 
            <h2>Dr. <?php echo $row[0]->docname; ?></h2>
            <h6><?php echo $row[0]->docdesig; ?></h6>

            <h5>Specialty : <?php echo $row[0]->docspec; ?> </h5>


            <h5>Hospital: <?php echo $row[0]->dochosp; ?></h5>


            <h5>Country :<?php echo $row[0]->doccou; ?></h5>


            <b><?php echo $row[0]->docsd; ?></b>
            <?php echo $row[0]->docld; ?>

            <p>Link : <?php echo $row[0]->docurl; ?></p>

        </div>
    </div>
</div>

<?php $this->load->view('Include/footer'); ?>
