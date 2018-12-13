
<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">
        <?php
        foreach($orgnutrients as $orgnutrient)
        {
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $orgnutrient->onimg; ?>" alt="<?php echo $orgnutrient->onname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $orgnutrient->onname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url().$controller.'/product'.'?onid='.$orgnutrient->onid.'&onname='.$orgnutrient->onname.'&onkeywords='.$orgnutrient->onkeywords;?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
