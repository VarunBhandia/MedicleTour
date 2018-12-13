
<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">
        <?php
        foreach($controls as $control)
        {
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $control->cimg; ?>" alt="<?php echo $control->cname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $control->cname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url().$controller.'/product'.'?cid='.$control->cid.'&nname='.$control->cname.'&ckeywords='.$control->ckeywords;?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
