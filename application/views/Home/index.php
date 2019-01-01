<?php $this->load->view('Include/header'); ?>
<!--<img class="banner" src="<?php echo base_url(); ?>assets/img/banner.jpg">-->
<div class="fluid-container banner" style="height: 400px;">
    
    <div class="container">
        <form method="get" action="<?php echo base_url();?>Search">

            <div class="row searchBar">
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control" id="dname" name="dname">
                            <?php
                            foreach ($diseases as $disease)
                            {
                            ?>

                            <option value="<?php echo $disease->dname; ?>"><?php echo $disease->dname; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <script type="text/javascript">
                            $('#dname').select2({
                                placeholder: '--- Select Diseases ---',
                            });
                        </script>
                    </div>               

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="couid" id="couid" class="form-control">
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
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<div class="container">
    <div class="row" id="counter">
        <div class="col-md-3">
            <center>
                <div class="counter-value" data-count="1">0</div>
                <div class="counter-value-text" >Years in Medical Tourism</div>
            </center>
        </div>
        <div class="col-md-3">
            <center>
                <div class="counter-value" data-count="100">0</div>
                <div class="counter-value-text" >Hospitals Worldwide</div>
            </center>
        </div>
        <div class="col-md-3">
            <center>
                <div class="counter-value" data-count="500">0</div>
                <div class="counter-value-text" >Doctors Worldwide</div>
            </center>
        </div>
        <div class="col-md-3">
            <center>
                <div class="counter-value" data-count="50">0</div>
                <div class="counter-value-text" >Patients Treated Successfully</div>
            </center>
        </div>

    </div>
</div>

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
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
            });
            a = 1;
        }

    });
</script>

<div class="fluid-container gray">
    <center><h1 class="sixStep">6 - Step Process</h1>    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/patient.png" class="processImage">
                    <p class="counter-value-text" >1. You Contact Us</p>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/quote.png" class="processImage">
                    <p class="counter-value-text" >2. You Receive Quote within 48 hrs</p>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/appointment-with-doctor.png" class="processImage">
                    <p class="counter-value-text" >3. We Book Appointment with Doctor</p>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/medical-visa.png" class="processImage">
                    <p class="counter-value-text" >4. We help in obtaining Medical Visa</p>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/airport-pickup.png" class="processImage">
                    <p class="counter-value-text">5. You Visit India/Airport Pickup</p>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/treatment-in-hospital-in-india.png" class="processImage">
                    <p class="counter-value-text" >6. Get Treatment in India</p>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <center><h1 style="text-transform: uppercase;padding-top: 50px;">500+ Doctors in 1 Platform</h1>    </center>
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

<div class="fluid-container gray">
    <div class="container">
        <center><h1 class="sixStep">Featured Treatment</h1>    </center>
        <div class="row">

            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/cancer-treatment.jpg" class="processImage">
                    <p class="counter-value-text" >Cancer Treatment</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/Kidney-Transplant.jpg" class="processImage">
                    <p class="counter-value-text" >Kidney Transplant</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/Bariatric-Surgery.jpg" class="processImage">
                    <p class="counter-value-text" >Bariatric Surgery</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/cosmetic-surgery.jpg" class="processImage">
                    <p class="counter-value-text" >Cosmetic Surgery</p>
                </center>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/dental-care.jpg" class="processImage">
                    <p class="counter-value-text" >Dental Care</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/Ivf-infertility-treatment.jpg" class="processImage">
                    <p class="counter-value-text" >IVF Infertility Treatment</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/knee-replacement.jpg" class="processImage">
                    <p class="counter-value-text" >Knee Replacement</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/brain-tumor.jpg" class="processImage">
                    <p class="counter-value-text" >Brain Tumor</p>
                </center>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <center><h1 class="sixStep">Featured Hospitals</h1>    </center>
    <div class="row">

        <div class="col-md-3">
            <center>
                <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/fortis-hospital-India.jpg" class="processImage">
                <p class="counter-value-text" >Fortis Hospital India</p>
            </center>
        </div>
        <div class="col-md-3">
            <center>
                <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/BLK-Superspeciality-Hospital-India.jpg" class="processImage">
                <p class="counter-value-text" >BLK Superspeciality Hospital India</p>
            </center>
        </div>
        <div class="col-md-3">
            <center>
                <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/Artemis-Hospital-india.jpg" class="processImage">
                <p class="counter-value-text" >Artemis Hospital India</p>
            </center>
        </div>
        <div class="col-md-3">
            <center>
                <img src="http://www.medicaltourism.company/india/wp-content/uploads/2018/12/apollo-hospital-india.jpg" class="processImage">
                <p class="counter-value-text" >Apollo Hospital India</p>
            </center>
        </div>
    </div>
    <br>
</div>

<div class="fluid-container gray">
    <div class="container">
        <center><h1 class="sixStep">Patient Stories</h1>    </center>
        <div class="row">

            <div class="col-md-3">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/in.svg" class="processImage">
                    <p class="counter-value-text" >India</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/th.svg" class="processImage">
                    <p class="counter-value-text" >Thailand</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/my.svg" class="processImage">
                    <p class="counter-value-text" >Malasiya</p>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="<?php echo base_url()?>assets/img/flags/sg.svg" class="processImage">
                    <p class="counter-value-text" >Singapore</p>
                </center>
            </div>
        </div>

    </div>
</div>


<?php $this->load->view('Include/footer'); ?>
</body>
</html>
