<?php $this->load->view('Include/header'); ?>

<div class="container">
    <div class="row">

        <?php
        foreach($doctors as $doctor)
        {
        ?>
        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="<?php echo $doctor->docimg; ?>" alt="<?php echo $doctor->docname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $doctor->docname; ?></h5>
                    <a href="<?php echo base_url().'Doctors/profile/'.$doctor->docid; ?>" class="btn btn-primary" target="_blank">Visit Profile</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>

    </div>
</div>
<?php $this->load->view('Include/footer'); ?>
