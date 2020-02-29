<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Session </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Session</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Session</h4>
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
          <form class="forms-sample" action="<?php echo base_url('admin/AddSession');?>" method="POST" >
            <div class="form-group">
              <label for="">Session Name</label>
              <input type="text" class="form-control" id="sessionName" name="sessionName" value="">
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleSelectGender">From</label>
                <select class="form-control" id="startingDate" name="startingDate">
                  <option  value=""> Month </option>
                  <option value="Jan">January</option>
                  <option value="Feb">February</option>
                  <option value="Mar">March</option>
                  <option value="Apr">April</option>
                  <option value="May">May</option>
                  <option value="Jun">June</option>
                  <option value="Jul">July</option>
                  <option value="Aug">August</option>
                  <option value="Sep">September</option>
                  <option value="Oct">October</option>
                  <option value="Nov">November</option>
                  <option value="Dec">December</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="exampleSelectGender">To</label>
                <select class="form-control" id="endingDate" name="endingDate">
                  <option  value=""> Month </option>
                  <option value="Jan">January</option>
                  <option value="Feb">February</option>
                  <option value="Mar">March</option>
                  <option value="Apr">April</option>
                  <option value="May">May</option>
                  <option value="Jun">June</option>
                  <option value="Jul">July</option>
                  <option value="Aug">August</option>
                  <option value="Sep">September</option>
                  <option value="Oct">October</option>
                  <option value="Nov">November</option>
                  <option value="Dec">December</option>
                </select>
              </div>
            </div>
            <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <button type="submit" class="btn btn-primary mr-2">Add Session</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
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
                <th>Session Name</th>
                <th>From</th>
                <th>To</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($session>0){ $id = 1; ?>
              <?php foreach ($session as $value): ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $value['sessionName'] ?></td>
                <td><?php echo $value['startingDate'] ?></td>
                <td><?php echo $value['endingDate'] ?></td>
                <td>
                  <!-- <button href="javascript:void(0)" onclick="edit(<?php echo $value['id'];?>)" class="btn btn-outline-primary"><i class="fa fa-pencil-square"></i></button> -->
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
window.location="<?php echo base_url()?>admin/AddSession/delete/"+id;
}
}
// function edit(id)
// {
// window.location="<?php echo base_url()?>admin/Addcategories/edit/"+id;
// }
</script>