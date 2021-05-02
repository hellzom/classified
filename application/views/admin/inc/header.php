
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Panel | U & I | Purnea Business Directory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">

  <!--<link rel="stylesheet" href="<?= base_url();?>/assets/css/font-awesome.min.css">
  <link href="<?= base_url();?>/assets/css/materialize.css" rel="stylesheet">
  <link href="<?= base_url();?>/assets/css/responsive.css" rel="stylesheet"> -->
  <link href="<?= base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url();?>/assets/css/istyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
  <link rel="stylesheet" href="<?= base_url();?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/owl.theme.default.min.css">
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

  <link rel="stylesheet" href="bower_components/sweetalert/lib/sweet-alert.css">
  <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

</head>

<body class="bg-light">
  
<nav class="navbar bg-dark navbar-expand-xl navbar-dark">
  <div class="navbar-header d-flex col">
    <a class="navbar-brand" href="<?= base_url('A');?>"><i class="fas fa-cube"></i> Admin | U & I</a>     
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="navbar-toggler-icon"></span>
    
    </button>
  </div>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">    
    
    <ul class="nav navbar-nav navbar-right ml-auto">
      <li class="nav-item">
        <a href="<?= base_url('A/all_cat');?>" class="nav-link user-action"><img src="<?= base_url();?>/assets/file/cat.png" class="avatar" alt="Avatar">Category <b class="caret"></b></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="<?= base_url();?>/assets/file/business.png" class="avatar" alt="Avatar">Business <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url('A/add_biz');?>" class="dropdown-item"><i class="fas fa-plus"></i> Add Business</a></li>
          <li><a href="<?= base_url('A/all_biz');?>" class="dropdown-item"><i class="fas fa-asterisk"></i> All Business</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="<?= base_url();?>/assets/file/admin.png" class="avatar" alt="Avatar"> Admin Jee <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url('A/send_sms');?>" class="dropdown-item"><i class="fas fa-envelope"></i> SMS</a></li>
          <li><a href="#" class="dropdown-item"><i class="fas fa-ad"></i> Ad Campaigns</a></li>
          <li><a href="#" class="dropdown-item"><i class="fas fa-cogs"></i> Settings</a></li>
          <li class="divider dropdown-divider"></li>
          <li><a href="<?= base_url('A/user_session_out');?>" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- sidebar -->
<div class="row m-1 mt-2">

<div class="col-12">
