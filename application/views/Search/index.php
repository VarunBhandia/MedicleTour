<?php $this->load->view('Include/header'); ?>

<div class="container">
    <h2><?php echo $row[0]->dname; ?></h2>
    <p><?php echo $row[0]->disdesc; ?></p>
    <p>For more information visit <a href="<?php echo $row[0]->dlink; ?>" ><?php echo $row[0]->dlink; ?></a></p>
    <br>
    <h2>Top Doctors</h2>
    <div class="row">

        <?php

        $row_doctors = explode(",",$row[0]->doctors);
        $count_doc = count($row_doctors);
        $row_hosps = explode(",",$row[0]->hosps);
        $count_hosp = count($row_hosps);

        foreach($doctors as $doctor)
        {
            for($i=0; $i<$count_doc; $i++)
            {
                if($row_doctors[$i]== $doctor->docid )
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
            }
        }
        ?>
    </div>
    <br>
    <h2>Top Hospitals</h2>
    <div class="row">
        <?php
        foreach($hospitals as $hospital)
        {
            for($i=0; $i<$count_hosp; $i++)
            {
                if($row_hosps[$i]== $hospital->hid )
                {
        ?>
        <div class="col-md-3">
            <div class="card" >
                <img class="card-img-top" src="<?php echo $hospital->hospimg; ?>" alt="<?php echo $hospital->hname; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $hospital->hname; ?></h5>
                    <a href="<?php echo base_url().'Hospitals/profile/'.$hospital->hid; ?>" class="btn btn-primary" target="_blank">Visit Profile</a>
                </div>
            </div>
        </div>
        <?php
                }
            }
        }
        ?>
    </div>
</div>

<?php $this->load->view('Include/footer'); ?>
