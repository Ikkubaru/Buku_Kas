<?php 
$menu = $this->uri->segment(1); 
?>
<!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <h5 class="logo-text">BUKU KAS</h5>
      </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MENU</li>
      <li class="<?php if($menu=='home'){ echo 'active';} ?>">
        <a href="<?= base_url('home') ?>">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <?php if($this->session->userdata('logged_in')){?>
      <li class="<?php if($menu=='pemasukan'){ echo 'active';} ?>">
        <a href="<?= base_url('pemasukan') ?>">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Pemasukan</span>
        </a>
      </li>
      <li class="<?php if($menu=='pengeluaran]'){ echo 'active';} ?>">
        <a href="<?= base_url('pengeluaran') ?>">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Pengeluaran</span>
        </a>
      </li>  
      <?php if($this->session->userdata('level')=='Admin'){?>
        <li class="<?php if($menu=='user'){ echo 'active';} ?>">
          <a href="<?= base_url('user/index')?>">
            <i class="zmdi zmdi-face"></i> <span>User</span>
          </a>
        </li>
      </ul>
      <?php
      } ?>
<?php }?>
   </div>
   <!--End sidebar-wrapper-->
   