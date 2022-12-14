<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soulmates Marraige
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4/assets/font-awesome/css/font-awesome.css">
</head>
<style>
  .card {
    width: 100%;
    height: auto;
    margin-left: 0px;
  }

  /*.form-group label {
    color: #6b6b6b !important;
  }
*/
  .slider-text h1 {
    font-size: 40px;
    color: #fff;
    line-height: 1.1;
    font-weight: 200;
  }

  .slider-text {
    height: 410px;
  }

  .ftco-navbar-light {
    background: #2a2929ba !important;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 3;
    height: 110px;
  }

  .card-body {
    padding: 1rem !important;
  }

  .circle {
    width: 100%;
    margin: 0 auto;
    margin-top: 10px;
    display: inline-block;
    position: relative;
    text-align: center;
    top: -10px;
    left: 20px;
  }
</style>

<style>
  div {
    box-sizing: border-box;
    transition: all ease-in-out .5s;
    -moz-transition: all ease-in-out .5s;
    -webkit-transition: all ease-in-out .5s;
  }
</style>

<style>
  .slider-text h1 {
    font-size: 30px;
    color: #fff;
    line-height: 1.1;
    font-weight: 200;
  }

  .slider-text {
    height: 410px;
  }


  .ftco-navbar-light {
    background: #2a2929ba !important;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 3;
    height: 110px;
  }

  .msgg {
    border-bottom: 1px solid #ece1e1;
    text-align: center;
  }

  label.control-label.labell {
    font-size: 15px;
  }

  .dropdown-menu li {
    background: #ca5b61;
    margin-bottom: 0px;
    padding: 8px;
    color: #ffffff;
    border-bottom: 1px solid;
  }
</style>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

    <div class="container">
      <a href="<?php echo base_url() ?>" class="logotext">Soulmates</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <?php if ($this->session->userdata('username') != '') {  ?>
            <li class="nav-item active"><a href="<?php echo base_url('UserProfile') ?>" class="nav-link">My Home</a></li>
          <?php } else { ?>
            <li class="nav-item active"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
          <?php } ?>
          <!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li> -->
          <?php if ($this->session->userdata('username') != '') {  ?>
            <li class="nav-item"><a href="memberprofile.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Profile</a>
              <ul class="dropdown-menu">
                <li><a href="UpdateProfile">Edit Profile</a></li>
                <li><a href="ProfilePrivacy">Profile Privacy</a></li>
                <li><a href="MobilePrivacy">mobile Privacy</a></li>
                <!-- <li><a href="deleterequest.php">Delete Profile</a></li> -->
              </ul>
            </li>
          <?php } ?>

          <li class="nav-item"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Search</a>
            <ul class="dropdown-menu">
              <li><a href="Searching">Quick Search</a></li>
              <li><a href="Searching">Advance Search</a></li>
              <li><a href="Searching">Keyword Search</a></li>
              <li><a href="Searching">Search by ID</a></li>
            </ul>
          </li>

          <li class="nav-item"><a href="<?php echo base_url('Membership') ?>" class="nav-link">Soulmates Package</a></li>
          <li class="nav-item"><a href="<?php echo base_url('Contact') ?>" class="nav-link">Contact</a></li>
        </ul>
      </div>
      <div style="position: relative;">
        <?php if ($this->session->userdata('username') != '') {  ?>
          <a href="<?php echo base_url('Login/logout') ?>" id="registration" class="btn-primary btnCustom" style="margin-right: 10px;">Logout</a>
        <?php } else { ?>
          <a href="<?php echo base_url('Registration') ?>" id="registration" class="btn-primary btnCustom" style="margin-right: 10px;">Register</a>
          <a href="<?php echo base_url('Login') ?>" id="registration" class="btn-primary btnCustom">Login</a>
        <?php } ?>
      </div>

    </div>
  </nav> <!-- END nav -->