<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Add Heading </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Heading</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Heading 1</h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/homepage/updateHeading');?>" method="POST">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $heading[0]['title']?>" >
                        </div>
                        
                            <div class="form-group ">
                                <label for="subtitle">Sub Title</label>
                                <input type="text" class="form-control" name="subtitle" value="<?php echo $heading[0]['subtitle']?>" >
                                 <input type="hidden" class="form-control" name="id" value="1">
                            </div>

                       
                        <input type="hidden" id="get_csrf_hash"
                            name="<?php echo $this->security->get_csrf_token_name();?>"
                            value="<?php echo $this->security->get_csrf_hash();?>">
                        <button type="submit" class="btn btn-primary mr-2">Update now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Heading 2</h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/homepage/updateHeading');?>" method="POST">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $heading[1]['title']?>" >
                            <input type="hidden" class="form-control" name="id" value="2">
                        </div>
                     
                            <div class="form-group ">
                                <label for="subtitle">Sub Title</label>
                                <input type="text" class="form-control" name="subtitle" value="<?php echo $heading[1]['subtitle']?>" >
                            </div>

                        <input type="hidden" id="get_csrf_hash"
                            name="<?php echo $this->security->get_csrf_token_name();?>"
                            value="<?php echo $this->security->get_csrf_hash();?>">
                        <button type="submit" class="btn btn-primary mr-2">Update now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">News Flash  </h4>
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
                    <form class="forms-sample" action="<?php echo base_url('admin/homepage/updateFlash');?>" method="POST">
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea type="text" class="form-control" name="message" value="This is flash messsge"></textarea>
                        </div>
                        
                        <input type="hidden" id="get_csrf_hash"
                            name="<?php echo $this->security->get_csrf_token_name();?>"
                            value="<?php echo $this->security->get_csrf_hash();?>">
                        <button type="submit" class="btn btn-primary mr-2">Update now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
