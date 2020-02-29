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
              <div class="col-md-12 grid-margin stretch-card">
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
                          <th>Sr.No</th>
                          <th>Title Name</th>
                          <th>Session</th>
                          <th>Category</th>
                          <th>Feature Image</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($allTourData>0){ $id = 1; ?>
                            <?php foreach ($allTourData as $value): ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $value['title'] ?></td>
                              <td><?php echo $value['startingDate'].' to '.$value['endingDate']?></td>
                              <td><?php echo $value['category'] ?></td>
                              <td>
                                <img src="<?php echo base_url('/uploads/tourImg/')?><?php echo $value['image'] ?>" alt="image" style="height: 50px; width: 50px;">
                              </td>
                              
                              <td><?php echo date("d-m-Y", strtotime($value['created_date'])) ?></td>
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
      window.location="<?php echo base_url()?>admin/Addtour/delete/"+id;
    }

  }
  function edit(id)
  {
    window.location="<?php echo base_url()?>admin/Addtour/tourEdit/"+id;
  }

</script>

