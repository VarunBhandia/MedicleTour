<?php $this->load->view('Include/header'); ?>
<div class="container">
    <div class="row">

        <?php
        foreach($hospitals as $hospital)
        {
        ?>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="..." alt="<?php echo $hospital->hname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $hospital->hname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>

    </div>
</div>
