<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Review List </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Review List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Sr.no</th>
                          <th>Name</th>
                          <th>email</th>
                          <th>Tour Name</th>
                          <th>Rating</th>
                          <th>Review</th>
                          <th>Status</th>
                          <th>Create Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if ($reviewlist>0){ $id = 1; ?>
                            <?php foreach ($reviewlist as $value): ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $value['name'] ?></td>
                              <td><?php echo $value['remail'] ?></td>
                              <td>
                              <?php echo $value['tour_id'] ?>
                              </td>
                              <td>
                              <?php echo $value['rating'] ?>
                              </td>
                              <td>
                              <?php echo $value['reviewmsg'] ?>
                              </td>
                              <td>
                              <?php if ($value['status']==0){ ?>
                                <span class="btn btn-danger">Decline</span>
                              <?php }else{?>
                                <span class="btn btn-success">Accept</span>
                              <?php } ?>
                              </td>
                              <td>
                              <?php echo $value['create_date'] ?>
                              </td>
                              <td>
                              <a href="<?php echo base_url('admin/review/accept/').$value['id'] ?>" class="btn btn-outline-primary">Accept</a>
                              <a href="<?php echo base_url('admin/review/Decline/').$value['id'] ?>" class="btn btn-outline-danger">Decline</a>
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
      window.location="<?php echo base_url()?>admin/Contactlist/Review/"+id;
    }

  }
</script>
