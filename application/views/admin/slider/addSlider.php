          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Home Slider </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Home Slider</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Slider</h4>
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
                      
                    <form class="forms-sample" action="<?php echo base_url('admin/slider/addSlider') ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Slider Title" name="title" value="">
                      </div>
                      <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" id="desc" placeholder="Slider Description" name="description" value="">
                      </div>
                      <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" placeholder="Slider Description" name="link" value="">
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
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <?php 
                      if($this->session->tempdata('update'))
                      {
                      ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <?php echo $this->session->tempdata('update'); ?>
                          <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
                            <span aria-hidden="true">&times;</span>           
                          </button>
                        </div>
                      <?php
                      }
                     ?>

                     <?php 
                      if($this->session->tempdata('notUpdate'))
                      {
                        ?>
                          <div class="alert alert-danger alert-dismissible fade show" alert="alert">
                            <?php echo $this->session->tempdata('notUpdate'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                      }
                      ?>
                      <?php 
                      if($this->session->tempdata('delete'))
                      {
                      ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                          <th>Title</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($allSlider>0){ $id = 1; ?>
                            <?php foreach ($allSlider as $value): ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $value['title'] ?></td>
                              <td><?php echo substr($value['description'],0,5) ?></td>
                              <td>
                                <img src="<?php echo base_url('/uploads/sliderImg/')?><?php echo $value['image'] ?>" alt="image" style="height: 50px; width: 50px;">
                              </td>
                              <td>
                                <a href="<?php echo base_url('admin/slider/hide/').$value['id'] ?>" class="btn btn-outline-danger">Hide</a>
                                <a href="<?php echo base_url('admin/slider/show/').$value['id'] ?>" class="btn btn-outline-primary">Show</a>
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
      window.location="<?php echo base_url()?>admin/slider/delete/"+id;
    }

  }
  function edit(id)
  {
    window.location="<?php echo base_url()?>admin/slider/edit/"+id;
  }

</script>
