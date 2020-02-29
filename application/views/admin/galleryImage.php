<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Gallery Image </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gallery Image</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Gallery</h4>
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
          <?php
          if($this->session->tempdata('change'))
          {
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">Add Image</button>
          <div id="lightgallery" class="row lightGallery">
            <?php foreach ($galleryImg as $value): ?>
              <div>
                <a href="<?php echo base_url('/uploads/galleryImg/')?><?php echo $value['image'] ?>" class="image-tile"><img src="<?php echo base_url('/uploads/galleryImg/')?><?php echo $value['image'] ?>" alt="<?php echo $value['imgTitle'] ?>"></a>

                <button href="javascript:void(0)" onclick="edit(<?php echo $value['id'];?>)" class="btn btn-outline-primary"><i class="fa fa-pencil-square"></i></button>
                <button class="btn btn-outline-danger" href="javascript:void(0)" onclick="delete_detail(<?php echo $value['id'];?>)"><i class="fa fa-trash-o"></i></button>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Add Gallery -->
<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/gallery/addGallery');?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          
            <div class="form-group">
              <label for="imgTitle">Image Title</label>
              <input type="text" name="imgTitle" id="imgTitle" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="image">Select Image</label>
              <input type="file" name="image" id="image" class="form-control" value="">
            </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Save" name="Save" class="btn btn-secondary">
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  function delete_detail(id)
  {
    // alert(id); stop(); 
    var del = confirm("Do you want to Delete");
    if (del== true) 
    {
      window.location="<?php echo base_url()?>admin/gallery/deleteGalleryImage/"+id;
    }

  }
  function edit(id)
  {
    window.location="<?php echo base_url()?>admin/gallery/editGalleryImage/"+id;
  }
</script>