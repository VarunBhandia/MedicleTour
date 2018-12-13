
<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">
        <?php
        foreach($maintenances as $maintenance)
        {
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $maintenance->mimg; ?>" alt="<?php echo $maintenance->mname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $maintenance->mname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url().$controller.'/product'.'?mid='.$maintenance->mid.'&nname='.$maintenance->mname.'&mkeywords='.$maintenance->mkeywords;?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
