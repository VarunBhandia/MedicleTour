<?php $this->load->view('Include/header'); ?>
<br>
<br>
<div class="container">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>CONTACT US</h2>
            <br>

            <form method="post" action="<?php echo base_url().'/Home/insertEnquiry';?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1" >Name</span>
                    </div>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Whatsapp Number</span>
                    </div>
                    <input type="text" class="form-control" name="number">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                    </div>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Country</span>
                    </div>
                    <input type="text" class="form-control" name="country">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">State</span>
                    </div>
                    <input type="text" class="form-control" name="state">
                </div>
                <div class="input-group mb-3">
                    <textarea class="form-control" placeholder="Describe Your Medical Problem*" name="desc"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<br>
<br>
<div class="container">

    <div class="row text-center text-xs-center text-sm-left text-md-left padding">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <center>
                <h5>Watsapp</h5>
                <i class="fab fa-whatsapp fa-6x"></i>
                <br><br>
                <a href="tel:09769735888">+91 9769735888</a>
            </center>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <center>
                <h5>Email</h5>
                <i class="far fa-envelope fa-6x"></i>
                <br><br>
                <a href="mailto:indmedtravel@gmail.com">indmedtravel@gmail.com</a>
            </center>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <center>
                <h5>Mumbai Office</h5>
                <i class="fas fa-building fa-6x"></i>
                <br><br>
                <a href="https://goo.gl/maps/TBLy4rQa5SH2">76/9, Sai Smruti, Datar Colony, Bhandup (E), Mumbai 400042</a>
            </center>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <center>
                <h5>Siliguri Office</h5>
                <i class="fas fa-building fa-6x"></i>
                <br><br>
                <a href="">10 Sevoke Road, Siliguri-734001</a>
            </center>
        </div>
    </div>

</div>
<?php $this->load->view('Include/footer'); ?>

