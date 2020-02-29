
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Gallery Image </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Gallery Image</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Gallery Image</h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/gallery/editGalleryImage/').$editGalleryImage['id']; ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="imgTitle">Image Title</label>
                        <input type="text" name="imgTitle" id="imgTitle" value="<?php echo $editGalleryImage['imgTitle'] ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="image">Select Image</label>
                        <input type="file" name="image" id="image" class="form-control" value="">
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
