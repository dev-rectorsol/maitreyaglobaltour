<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#Homepage" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Homepage</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Homepage">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/homepage')?>">Add Title</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/contact'); ?>">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Contact</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Tour Packages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/Addtour')?>">Add New Tour</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/Addtour/tourList')?>">Tour List</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/addcategories')?>">Add Package Categories</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#session" aria-expanded="false" aria-controls="session">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Session</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="session">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/AddSession')?>">Add Session</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/Contactlist')?>">
        <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
        <span class="menu-title">Contact List</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link"  href="<?php echo base_url('admin/About')?>" >
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">About</span>
        <i class="menu-arrow"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/enquiry') ?>">
        <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
        <span class="menu-title">Booking & Enquiry</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/review')?>">
        <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
        <span class="menu-title">Reviews</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/gallery/addGallery') ?>">
        <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
        <span class="menu-title">Gallery</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="session">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Gallery</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="gallery">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/gallery')?>">Add Category</a></li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="session">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Home Slider</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="slider">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/slider')?>">Add Slider</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('admin/setting') ?>">
        <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
        <span class="menu-title">Setting</span>
      </a>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="<?php echo base_url('auth/logout');?>" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li>
  </ul>
</nav>