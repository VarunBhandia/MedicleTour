<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">

        <?php
        foreach($doctors as $doctor)
        {
        ?>
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="..." alt="<?php echo $doctor->docname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $doctor->docname; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!--    <a href="#" class="btn btn-primary">Go somewhere</a>-->
                </div>
            </div>
        </div>
        <?php
        }
        ?>

    </div>
</div>