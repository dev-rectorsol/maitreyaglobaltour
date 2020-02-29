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
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Category</h4>
                    <?php 
                      if($this->session->tempdata('msg'))
                      {
                      ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <?php echo $this->session->tempdata('msg'); ?>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/Addcategories') ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" id="addCat" placeholder="Category_name" name="category_name" value="">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Parent</label>
                        <select class="form-control" id="selectCate" name="parent_id">
                          <option value="0">-- Select Parent --</option>
                          <?php foreach ($categoryData as $value): ?> 
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['category_name'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Category Image</label>
                        <input type="file" name="categoryImg" value="" class="form-control">
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Add New</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <?php 
                      if($this->session->tempdata('delete'))
                      {
                        ?>
                          <div class="alert alert-success alert-dismissible fade show" alert="alert">
                            <?php echo $this->session->tempdata('delete'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                      }
                      ?>
                      <?php 
                      if($this->session->tempdata('Not_delete'))
                      {
                        ?>
                          <div class="alert alert-danger alert-dismissible fade show" alert="alert">
                            <?php echo $this->session->tempdata('Not_delete'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                      }
                      ?>
                  <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Sr.no</th>
                          <th>CategoryName</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($categoryData>0){ $id = 1; ?>
                            <?php foreach ($categoryData as $value): ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $value['category_name'] ?></td>
                              <td>
                                <img src="<?php echo base_url('/uploads/categoryImg/')?><?php echo $value['category_img'] ?>" alt="image" style="height: 50px; width: 50px;">
                              </td>
                              <td>
                                <label class="badge badge-info">On hold</label>
                              </td>
                              <td>
                                <button href="javascript:void(0)" onclick="edit(<?php echo $value['id'];?>)" class="btn btn-outline-primary"><i class="fa fa-pencil-square"></i></button>
                                <button class="btn btn-outline-danger" href="javascript:void(0)" onclick="delete_detail(<?php echo $value['id'];?>)"><i class="fa fa-trash-o"></i></button>
                              </td>
                            </tr>
                          <?php $id = $id+1; endforeach;  } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
<script>
  function delete_detail(id)
  {
    var del = confirm("Do you want to Delete");
    if (del== true) 
    {
      window.location="<?php echo base_url()?>admin/Addcategories/delete/"+id;
    }

  }
  function edit(id)
  {
    window.location="<?php echo base_url()?>admin/Addcategories/edit/"+id;
  }

</script>
