<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Gallery Categories </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gallery Categories</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Gallery Category</h4>
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
          <form class="forms-sample" action="<?php echo base_url('admin/Gallery') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputUsername1">Category Name</label>
              <input type="text" class="form-control" placeholder="Category Name" name="categoryName" value="">
            </div>
            <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <button type="submit" class="btn btn-primary mr-2">Add</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <?php
          if($this->session->tempdata('change'))
          {
          ?>
          <div class="alert alert-success alert-dismissible fade show" alert="alert">
            <?php echo $this->session->tempdata('change'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
          }
          ?>
          <?php
          if($this->session->tempdata('notChange'))
          {
          ?>
          <div class="alert alert-danger alert-dismissible fade show" alert="alert">
            <?php echo $this->session->tempdata('notChange'); ?>
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
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($allCategoryData>0){ $id = 1; ?>
              <?php foreach ($allCategoryData as $value): ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $value['categoryName'] ?></td>
                <td>
                  <label class="badge badge-info">On hold</label>
                </td>
                <td>
                  <a class="btn btn-outline-primary" href="<?php echo base_url('admin/Gallery/addGallery/').$value['id'] ?>">Add Image</a>
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
  window.location="<?php echo base_url()?>admin/Gallery/delete/"+id;
  }
}
function edit(id)
  {
  window.location="<?php echo base_url()?>admin/Gallery/edit/"+id;
  }
</script>