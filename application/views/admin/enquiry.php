          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Enquiry</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Enquiry</li>
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
                          <td>Tour Name</td>
                          <th>Name</th>
                          <th>email</th>
                          <th>phone</th>
                          <th>message</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($enquiry>0){ $id = 1; ?>
                            <?php foreach ($enquiry as $value): ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $value['tourName'] ?></td>
                              <td><?php echo $value['firstName'].' '.$value['lastName']?></td>
                              <td><?php echo $value['email'] ?></td>
                              <td><?php echo $value['phone'] ?></td>
                              <td><?php echo $value['message'] ?></td>                              
                              <td><?php echo date("d-m-Y", strtotime($value['createdDate'])) ?></td>
                              <td>
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
      window.location="<?php echo base_url()?>admin/enquiry/delete/"+id;
    }

  }

</script>

