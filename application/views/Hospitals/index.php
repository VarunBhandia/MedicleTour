<?php $this->load->view('Include/header'); ?>
<div class="container">
    <div class="row">

        <?php
        foreach($hospitals as $hospital)
        {
        ?>
        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="<?php echo $hospital->hospimg; ?>" alt="<?php echo $hospital->hname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $hospital->hname; ?></h5>
                    <a href="<?php echo base_url().'Hospitals/profile/'.$hospital->hid; ?>" class="btn btn-primary" target="_blank">Visit Profile</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>

    </div>
</div>
