<?php $this->load->view('Include/header'); ?>
<br>
<br>

<div class="container">
    <h2>
        <center><?php echo $row[0]->dname; ?> treatment in 
            
        <?php 
            foreach ($countries as $country)
                if($country->couid == $row[0]->dcouid)
                {
                    echo $country->couname; 
                }
            
            ?>
        </center>
    </h2>
    <p><?php echo $row[0]->disdesc; ?></p>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">  
            <center><b><p>Top Doctors for <?php echo $row[0]->dname; ?></p></b></center>
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
                <div class="col-md-12" style="margin-bottom: 5px;margin-top: 5px;">
                    <div class="card" >
                        <div class="row">
                            <div class="col-md-4">
                                <img class="card-img-top" src="<?php echo $doctor->docimg; ?>" alt="<?php echo $doctor->docname; ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title docProfile"><?php echo $doctor->docname; ?></h5>
                                    <h5 class="docSpecProfile"><?php echo $doctor->docspec; ?></h5>
                                    <h5 class="docDesgProfile"><?php echo $doctor->docdesig; ?></h5>
                                    <!--                                    <h5 class="docHospProfile"><?php echo $doctor->dochosp; ?></h5>-->
                                    <!--                                    <h5 class="docSdProfile"><?php echo $doctor->docsd; ?></h5>-->

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                        Send Inquiry 
                                    </button>
                                </div>
                            </div>
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
        <!-- Modal -->
        <div class="col-md-6">
            <center><b><p>Top Hospitals for <?php echo $row[0]->dname; ?></p></b></center>
            <div class="row">
                <?php
                foreach($hospitals as $hospital)
                {
                    for($i=0; $i<$count_hosp; $i++)
                    {
                        if($row_hosps[$i]== $hospital->hid )
                        {
                ?>
                <div class="col-md-12" style="margin-bottom: 5px;margin-top: 5px;">
                    <div class="card" >
                        <div class="row">
                            <div class="col-md-4">
                                <img class="card-img-top" src="<?php echo $hospital->hospimg; ?>" alt="<?php echo $hospital->hname; ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title docProfile"><?php echo $hospital->hname; ?></h5>
                                    <h5     class="docSpecProfile"><?php echo $hospital->hospspec; ?></h5>
                                    <!--                                    <h5 class="docSdProfile"><?php echo $hospital->hospsd; ?></h5>-->

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                        Send Inquiry 
                                    </button>
                                </div>
                            </div>
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
    </div>
    <br>
</div>

<?php $this->load->view('Include/footer'); ?>
