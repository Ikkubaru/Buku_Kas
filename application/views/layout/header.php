  <!--favicon-->
  <!-- <link rel="icon" href="<?= base_url('assets/') ?>assets/images/favicon.ico" type="image/x-icon"> -->
  <!-- Vector CSS -->
  <link href="<?= base_url('assets/') ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?= base_url('assets/') ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url('assets/') ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?= base_url('assets/') ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?= base_url('assets/') ?>assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?= base_url('assets/') ?>assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?= base_url('assets/') ?>assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <?= $this->session->userdata('level') ?> 
    <?php if($this->session->userdata('logged_in')==TRUE){?>
      <a href="<?= base_url('auth/logout') ?>">
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-user mr-2"></i>Logout</li></a>
        <?php }else{?>
          <a href="<?= base_url('auth/') ?>">
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-user mr-2"></i>Login</li></a>
        <?php }?>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
<body class="bg-theme bg-theme9">
<!-- Start wrapper-->
 <div id="wrapper">

 <div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">