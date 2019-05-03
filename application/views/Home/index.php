<?php $this->load->view('Include/header'); ?>
<!--<img class="banner" src="<?php echo base_url(); ?>assets/img/banner.jpg">-->
<div class="fluid-container banner">

    <div class="container">
        <center>
            <h1 class="mainHeading" >Search for Medical Tourism Packages</h1>
            <p class="mainSubHeading">Best Treatment at Affordable cost!   </p>
            <form method="get" action="<?php echo base_url();?>Search">

                <div class="row searchBar">
                    <div class="col-md-2 col-xs-1"></div>
                    <div class="col-md-3 col-xs-10">
                        <div class="form-group">
                            <select class="form-control" id="dname" name="dname">
                                <?php
                                foreach ($diseases as $disease)
                                {
                                ?>

                                <option value=""></option>
                                <option value="<?php echo $disease->dname; ?>"><?php echo $disease->dname; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <script type="text/javascript">
                                $('#dname').select2({
                                    placeholder: '--- Select Disease ---',
                                });
                            </script>
                        </div>               

                    </div>
                    <div class="col-xs-1"></div>
                    <div class="col-xs-1"></div>
                    <div class="col-md-3  col-xs-10">
                        <div class="form-group">
                            <select name="couid" id="couid" class="form-control">
                                <option value=""></option>
                                <?php
                                foreach ($countries as $country)
                                {
                                ?>

                                <option value="<?php echo $country->couid; ?>"><?php echo $country->couname; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <script type="text/javascript">
                                $('#couid').select2({
                                    placeholder: '--- Select Country ---',
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-xs-1"></div><div class="col-xs-1"></div>
                    <div class="col-md-1 col-xs-10">
                        <button type="submit" class="btn searchButton">Search</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form></center>  
    </div>
    <div class="container">
        <div class="row" id="counter">
            <div class="col-md-3 col-xs-3 col-sm-3">
                <center>
                    <div class="counter-value" data-count="2">0</div>
                    <div class="counter-value-text" >Years in Medical Tourism</div>
                </center>
            </div>
            <div class="col-md-3 col-xs-3 col-sm-3">
                <center>
                    <div class="counter-value" data-count="100">0</div>
                    <div class="counter-value-text" >Hospitals Worldwide</div>
                </center>
            </div>
            <div class="col-md-3 col-xs-3 col-sm-3">
                <center>
                    <div class="counter-value" data-count="500">0</div>
                    <div class="counter-value-text" >Doctors Worldwide</div>
                </center>
            </div>
            <div class="col-md-3 col-xs-3 col-sm-3">
                <center>
                    <div class="counter-value" data-count="50">0</div>
                    <div class="counter-value-text" >Patients Treated Successfully</div>
                </center>
            </div>

        </div>
    </div>
</div>
<br>


<script>
    var a = 0;
    $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },

                           {

                    duration: 1000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum+'+');
                        //alert('finished');
                    }

                });
            });
            a = 1;
        }

    });

</script>

<!--
<div class="container">
<center><h1 style="padding-top: 50px;">500+ Doctors in 1 Platform</h1>    </center>
<center><p class="counter-value-text" >From 100+ Hospitals Worldwide</p>    </center>
<table class="table">

<tr>
<center><td class="counter-value-text" >Cardiology</td></center>
<center><td class="counter-value-text" >Cancer</td></center>
<center><td class="counter-value-text" >Fertility</td></center>
</tr>
<tr>
<center><td class="counter-value-text" >Orthopaedic</td></center>
<center><td class="counter-value-text" >Neuro and Brain</td></center>
<center><td class="counter-value-text" >Spine</td></center>
</tr>
<tr>
<center><td class="counter-value-text" >Weight Loss</td></center>
<center><td class="counter-value-text" >Urology</td></center>
<center><td class="counter-value-text" >Gastroenterology</td></center>
</tr>

</table>
</div>
-->
<div class="fluid-container">
    <center><h2 class="sixStep">Frequently Searched Treatments</h2>    </center>
    <div class="container">
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-md-4  col-xs-10 hover">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/cancer.png" class="freqImg">
                    <h3>CANCER</h3>
                    <p class="treatNames" >Chemotherapy
                        <br>
                        PET Scan
                        <br>
                        Oral Cancer
                        <br>
                        Breast Cancer
                        <br>
                        Cervical Cancer
                        <br>
                        Prostate Cancer</p>
                </center>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-1"></div>

            <div class="col-md-4 col-xs-10 hover">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/kidneys-min.png" class="freqImg">
                    <h3>TRANSPLANT</h3>
                    <p class="treatNames" >
                        <br>
                        Kidney Transplant
                        <br>
                        Liver Transplant
                </center>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-1"></div>

            <div class="col-md-4 col-xs-10 hover">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/cardiology.png" class="freqImg">
                    <h3>HEART SURGERY</h3>
                    <p class="treatNames" >
                        <br>
                        Angioplasty
                        <br>
                        Heart Bypass (CABG)
                        <br>
                        Angiography
                        <br>
                        Aortic Valve Replacement
                        <br>
                        Mitral Valve Replacement
                        <br>
                        Hole in the Heart
                    </p>
                </center>
            </div>
            <div class="col-xs-1"></div>

        </div>
        <div class="row">
            <div class="col-xs-1"></div>

            <div class="col-md-6 col-xs-10 hover2">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/cosmetic.png" class="freqImg">
                    <h3>COSMETIC</h3>
                    <p class="treatNames" >
                        Brazilian Butt Lift
                        <br>
                        Face Lift
                        <br>
                        Tummy Tuck
                    </p>
                </center>
            </div>            <div class="col-xs-1"></div>
            <div class="col-xs-1"></div>

            <div class="col-md-6 col-xs-10 hover2">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/bariatric.png" class="freqImg">
                    <h3>WEIGHT LOSS</h3>
                    <p class="treatNames" >
                        Gastric Bypass
                        <br>
                        Gastric Sleeve Surgery
                    </p>
                </center>
            </div>
            <div class="col-xs-1"></div>

        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
    <a href="#"><div class="connTo" data-toggle="modal" data-target="#exampleModalLong"><center>Connect to a Specialist</center></div> </a>
</div>
<br>
<br>
<div class="fluid-container gray">
    <center><h2 class="sixStep">6 - Step Process</h2>    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-4">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/patient.png" class="processImage">
                    <p class="counter-value-text" >1. You Contact Us</p>
                </center>
            </div>
            <div class="col-md-2 col-xs-4">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/quote.png" class="processImage">
                    <p class="counter-value-text" >2. You Receive Quote within 48 hrs</p>
                </center>
            </div>
            <div class="col-md-2 col-xs-4">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/appointment-with-doctor.png" class="processImage">
                    <p class="counter-value-text" >3. We Book Appointment with Doctor</p>
                </center>
            </div>
            <div class="col-md-2 col-xs-4">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/medical-visa.png" class="processImage">
                    <p class="counter-value-text" >4. We help in obtaining Medical Visa</p>
                </center>
            </div>
            <div class="col-md-2 col-xs-4">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/airport-pickup.png" class="processImage">
                    <p class="counter-value-text">5. You visit for medical treatment/Airport Pickup</p>
                </center>
            </div>
            <div class="col-md-2 col-xs-4">
                <center>
                    <img src="<?php echo base_url(); ?>assets/img/treatment-in-hospital-in-india.png" class="processImage">
                    <p class="counter-value-text" >6. You get Treatment in Hospital and Fly Back</p>
                </center>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <center><h2 class="sixStep">Featured Medical Tourism Destinations</h2>    </center>
    <div class="row">

        <div class="col-md-6 col-xs-6 desti india">
            <a href="https://www.medicaltourism.company/india/"><center><h2 class="sixStep" style="color: white;">India</h2></center></a>
        </div>


        <div class="col-md-6 col-xs-6 desti thailand">
            <a href="https://www.medicaltourism.company/thailand/"><center><h2 class="sixStep" style="color: white;">Thailand</h2></center></a>
        </div>


        <div class="col-md-6 col-xs-6 desti malaysia">
            <a href="https://www.medicaltourism.company/malaysia/">
                <center><h2 class="sixStep" style="color: white;">Malaysia</h2></center>
            </a>
        </div>


        <div class="col-md-6 col-xs-6 desti brazil">
            <a href="https://www.medicaltourism.company/brazil/">
                <center><h2 class="sixStep" style="color: white;">Brazil</h2></center>
            </a>
        </div>
    </div>
</div>

<!--
<div class="container">
<center><h2 class="sixStep">Featured Hospitals</h2>    </center>
<div class="row">

<div class="col-md-3 col-xs-6">
<center>
<img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/fortis-hospital-India.jpg" class="processImage">
<p class="counter-value-text" >Fortis Hospital India</p>
</center>
</div>
<div class="col-md-3 col-xs-6">
<center>
<img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/BLK-Superspeciality-Hospital-India.jpg" class="processImage">
<p class="counter-value-text" >BLK Superspeciality Hospital India</p>
</center>
</div>
<div class="col-md-3 col-xs-6">
<center>
<img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/Artemis-Hospital-india.jpg" class="processImage">
<p class="counter-value-text" >Artemis Hospital India</p>
</center>
</div>
<div class="col-md-3 col-xs-6">
<center>
<img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/apollo-hospital-india.jpg" class="processImage">
<p class="counter-value-text" >Apollo Hospital India</p>
</center>
</div>
</div>
<br>
</div>
-->


<div class="container blue">
    <form method="post" action="<?php echo base_url().'/Home/insertEnquiry';?>">
        <center><h2 class="sixStep">Request Free Quote from 20+ Hospitals</h2></center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form>
                    <label>Name*</label><br>
                    <input type="text" class="form-control" name="username">
                    <br>
                    <br>
                    <label>Whatsapp Number*</label><br>
                    <input type="text" class="form-control" name="number">
                    <br>
                    <br>
                    <label>Email*</label><br>
                    <input type="email" class="form-control" name="email">
                    <br>
                    <label>Country*</label><br>
                    <input type="text" class="form-control" name="country">
                    <br>
                    <label>State*</label><br>
                    <input type="text" class="form-control" name="state">
                    <br>
                    <label>Describe Your Medical Problem*</label><br>

                    <textarea class="form-control" placeholder="Describe Your Medical Problem*" name="desc"></textarea>
                    <br>
                    <br>

                    <input type="submit" class="queryButton">
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>

<div class="fluid-container">
    <div class="container">
        <center><h2 class="sixStep">Stories of Patients who Visited....</h2>    </center>
        <div class="row">

            <div class="col-md-3 col-xs-3  ">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/in.svg" class="processImage">
                    <p class="counter-value-text" >India</p>
                </center>
            </div>
            <div class="col-md-3 col-xs-3 ">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/th.svg" class="processImage">
                    <p class="counter-value-text" >Thailand</p>
                </center>
            </div>
            <div class="col-md-3 col-xs-3 ">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/my.svg" class="processImage">
                    <p class="counter-value-text" >Malasiya</p>
                </center>
            </div>
            <div class="col-md-3 col-xs-3 ">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/sg.svg" class="processImage">
                    <p class="counter-value-text" >Singapore</p>
                </center>
            </div>
        </div>

    </div>
</div>
<br>
<br>
<?php $this->load->view('Include/footer'); ?>
</body>
</html>
