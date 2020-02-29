          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Contact </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Contact</h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/contact') ?>" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="address">Address</label>
                          <input type="text" name="address" value="<?php echo $contact['address'] ?>" id="address" class="form-control">
                        </div>
          
                        <div class="form-group col-md-6">
                          <label for="phone">Phone No</label>
                          <input type="number" name="phone" value="<?php echo $contact['phone'] ?>" id="phone" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="email">Email</label>
                          <input type="Email" name="email" value="<?php echo $contact['email'] ?>" id="email" class="form-control">
                        </div>
          
                        <div class="form-group col-md-6">
                          <label for="workingHours">Working Hours</label>
                          <textarea name="workingHours" id="workingHours" cols="30" rows="3" class="form-control"><?php echo $contact['workingHours'] ?></textarea>
                        </div>
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
