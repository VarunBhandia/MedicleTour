<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">
        <?php
        foreach($result_nutrients as $nutrient)
        {
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $nutrient->nimg; ?>" alt="<?php echo $nutrient->nname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nutrient->nname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url().$controller_n.'/product'.'?nid='.$nutrient->nid.'&nname='.$nutrient->nname.'&nkeywords='.$nutrient->nkeywords;?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
