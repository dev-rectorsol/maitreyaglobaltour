          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> About Us </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add About Us</h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/About') ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">About Description</label>
                        <textarea name="aboutDesc" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
        
                      <div class="form-group">
                        <label for="">About Image</label>
                        <input type="file" name="image" value="" class="form-control">
                      </div>
                      <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                      <button type="submit" class="btn btn-primary mr-2">Add New</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-7 grid-margin stretch-card">
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
                  <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Sr.no</th>
                          <th>About Description</th>
                          <th>Image</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($allAbout>0){ $id = 1; ?>
                            <?php foreach ($allAbout as $value): ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo substr($value['aboutDesc'], 0,30) ?></td>
                              <td>
                                <img src="<?php echo base_url('/uploads/aboutImg/')?><?php echo $value['image'] ?>" alt="image" style="height: 50px; width: 50px;">
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
      window.location="<?php echo base_url()?>admin/About/delete/"+id;
    }

  }
  function edit(id)
  {
    window.location="<?php echo base_url()?>admin/About/edit/"+id;
  }

</script>
