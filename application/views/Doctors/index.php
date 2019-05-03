<?php $this->load->view('Include/header'); ?>
<br>


<div class="container">
    <h2 class="sixStep"><center>500+ Doctors Worldwide</center></h2>
    <div class="row">

        <?php
        foreach($doctors as $doctor)
        {
        ?>
        <div class="col-md-6" style="margin-bottom: 5px;margin-top: 5px;">
            <div class="card" >
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="<?php echo $doctor->docimg; ?>" alt="<?php echo $doctor->docname; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title docProfile"><?php echo $doctor->docname; ?></h5>
                            <h5     class="docSpecProfile"><?php echo $doctor->docspec; ?></h5>
                            <h5     class="docDesgProfile"><?php echo $doctor->docdesig; ?></h5>
                            <h5 class="docHospProfile"><?php echo $doctor->dochosp; ?></h5>
                            <h5 class="docSdProfile"><?php echo $doctor->docsd; ?></h5>
                            
                            <a href="<?php echo base_url().'Doctors/profile/'.$doctor->docid.'/'.$doctor->docurl; ?>" target="_blank">Read More...</a>
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
