<?php $this->load->view('Include/header'); ?>
<br>


<div class="container">
    <h2 class="sixStep"><center>100+ Hospitals Worldwide</center></h2>
    <div class="row">

        <?php
        foreach($hospitals as $hospital)
        {
        ?>
        <div class="col-md-6" style="margin-bottom: 5px;margin-top: 5px;">
            <div class="card" >
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="<?php echo $hospital->hospimg; ?>" alt="<?php echo $hospital->hname; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title docProfile"><?php echo $hospital->hname; ?></h5>
                            <h5     class="docSpecProfile"><?php echo $hospital->hospspec; ?></h5>
                            <h5 class="docSdProfile"><?php echo $hospital->hospsd; ?></h5>

                            <a href="<?php echo base_url().'Hospitals/profile/'.$hospital->hid.'/'.$hospital->hospurl; ?>" target="_blank">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
        ?>

    </div>
</div>
<br>
<br>
<br>


<?php $this->load->view('Include/footer'); ?>
