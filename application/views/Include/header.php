<!DOCTYPE html>
<html lang="en">

    <head>
        <title>HydroGrow Wiki</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!--Custom CSS-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    </head>
    <body>
        <div class="container">
            <div class="languageBar" style="float: right;">
                <form class="form-inline my-2 my-lg-0">
                    <div id="google_translate_element"></div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                    </script>
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </form>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo base_url();?>">HydroGrow Wiki</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url();?>Nutrients">Nutrients</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>Orgnutrients">Organic Nutrients</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>Bionutrients">Biological Nutrients</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>Supplements">Supplements</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>Control">Control</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>Maintenance">Maintenance</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Turn Key Projects</a>
                                <a class="dropdown-item" href="#">Commercial Farming</a>
                                <a class="dropdown-item" href="#">Home Garden</a>
                                <a class="dropdown-item" href="#">Exotic Plants</a>
                                <a class="dropdown-item" href="#">Medicinal Hubs</a>
                                <a class="dropdown-item" href="#">Ayurvedic Hubs</a>
                                <a class="dropdown-item" href="#">Marijuanas</a>
                                <a class="dropdown-item" href="#">Saffron</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo base_url();?>Search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        
        <br>
        <br>
        