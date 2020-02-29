
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
              <div class="col-md-8 grid-margin stretch-card">
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
                    <form class="forms-sample" action="<?php echo base_url('admin/slider/edit/').$sliderData['id'] ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Slider Title" name="title" value="<?php echo $sliderData['title'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" id="desc" placeholder="Slider Description" name="description" value="<?php echo $sliderData['description'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" placeholder="Slider Description" name="link" value="<?php echo $sliderData['link'] ?>">
                      </div>
                
                      <div class="form-group">
                        <label for="image">Slider Image</label>
                        <input type="file" id="image" name="image" value="" class="form-control">
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Add New</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>


 