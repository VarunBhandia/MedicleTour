
<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">
        <?php
        foreach($bionutrients as $bionutrient)
        {
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $bionutrient->bnimg; ?>" alt="<?php echo $bionutrient->bnname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $bionutrient->bnname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url().$controller.'/product'.'?bnid='.$bionutrient->bnid.'&bnname='.$bionutrient->bnname.'&bnkeywords='.$bionutrient->bnkeywords;?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
