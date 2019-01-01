<div class="container">
    <div class="row">

        <div class="col-md-3">
            <img alt="User Pic" src="<?php echo $row[0]->hospimg; ?>" width="100%"> 
        </div>


        <div class=" col-md-9"> 
            <h2><?php echo $row[0]->hname; ?></h2>

            <h5>Specialty : <?php echo $row[0]->hospspec; ?> </h5>

            <h5>Country :<?php echo $row[0]->hospcou; ?></h5>

            <b><?php echo $row[0]->hospsd; ?></b>
            <?php echo $row[0]->hospld; ?>

            <p>Link : <?php echo $row[0]->hospurl; ?></p>

        </div>
    </div>
</div>

<?php $this->load->view('Include/footer'); ?>
