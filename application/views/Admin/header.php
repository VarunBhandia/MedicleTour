<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Hydro Grow Wiki Admin Panel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!--Custom CSS-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

        <!-- Datatable -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.js" type='text/javascript'></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type='text/javascript'></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type='text/javascript'></script>

        <!--FaFa Icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url();?>Nutadmin">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url();?>Nutadmin">Nutrients</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>Orgnutadmin">Organic Nutrients</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>Bionutadmin">Biological Nutrients</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>Supadmin">Supplements</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>Contadmin">Control</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>Mainadmin">Maintenance</a>
                        </div>
                    </li>
                </ul>

                <a href="<?php echo base_url(); ?>Admin/logout/" class="btn btn-info" >Logout</a>

            </div>
        </nav>
        <br>
