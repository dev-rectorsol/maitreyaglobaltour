
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit About </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit About</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit About</h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/About/editAbout/').$aboutData['id'] ;?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">About Description</label>
                        <textarea id='tinyMceExample' class='editor' name="aboutDesc" placeholder="Edit your content here..."><?php echo $aboutData['aboutDesc']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Category Image</label>
                        <input type="file" name="image" value="<?php echo base_url('/uploads/aboutImg/')?><?php echo $aboutData['image'] ?>" class="form-control">
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Edit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>


 