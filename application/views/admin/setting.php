<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Setting </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Setting</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Setting</h4>
          <?php
          if($this->session->tempdata('success'))
          {
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $this->session->tempdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
          }
          ?>
          <?php
          if($this->session->tempdata('error'))
          {
          ?>
          <div class="alert alert-danger alert-dismissible fade show" alert="alert">
            <?php echo $this->session->tempdata('error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
          }
          ?>
          <form class="forms-sample" action="<?php echo base_url('admin/setting') ;?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="startEndTime">Start & End Time</label>
              <input type="text" class="form-control" id="startEndTime" placeholder="" name="startEndTime" value="<?php echo $setting['startEndTime'] ?>">
            </div>
            <div class="form-group">
              <label for="phone">Phone No.</label>
              <input type="number" class="form-control" id="phone" placeholder="" name="phone" value="<?php echo $setting['phone'] ?>">
            </div>
            <div class="form-group">
              <label for="email">E-Mail</label>
              <input type="Email" class="form-control" id="email" placeholder="" name="email" value="<?php echo $setting['email'] ?>">
            </div>
            <div class="form-group">
              <label for="logo">Logo</label>
              <input type="file" name="logo" value="" id="logo" class="form-control">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="" name="address" value="<?php echo $setting['address'] ?>">
            </div>
            <div class="form-group">
              <label for="copyrite">Copyrite</label>
              <input type="text" class="form-control" id="copyrite" placeholder="" name="copyrite" value="<?php echo $setting['copyrite'] ?>">
            </div>
            <div class="form-group">
              <label for="userid">User ID</label>
              <input type="text" class="form-control" id="userid" placeholder="" name="userid" value="<?php echo $_SESSION['email'] ?>">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="" name="password" >
            </div>
            <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <button type="submit" class="btn btn-primary mr-2">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <?php echo base_url('/uploads/aboutImg/')?><?php echo $aboutData['image'] ?> -->