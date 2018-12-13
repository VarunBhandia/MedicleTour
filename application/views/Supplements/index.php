
<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">
        <?php
        foreach($supplements as $supplement)
        {
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php echo $supplement->simg; ?>" alt="<?php echo $supplement->sname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $supplement->sname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url().$controller.'/product'.'?sid='.$supplement->sid.'&sname='.$supplement->sname.'&skeywords='.$supplement->skeywords;?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
