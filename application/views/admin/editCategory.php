
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Tour Categories </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tour Categories</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Category</h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/Addcategories/edit/').$category['id'] ;?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" id="addCat" placeholder="Category_name" name="category_name" value="<?php echo $category['category_name'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Category Image</label>
                        <input class="form-control" required="" type="file" name="categoryImg" value="<?php echo $category['category_img']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Parent</label>
                        <select class="form-control" id="selectCate" name="parent_id">
                          <option value="0">-- Select Parent --</option>
                          <?php foreach ($categoryData as $value): ?> 
                            <option <?php if ($category['parent_id']==$value['id']) {
                                    ?>selected<?php } ?> value="<?php echo $value['id'] ?>"><?php echo $value['category_name'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Edit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
