<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">Contact List </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact List</li>
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
                <th>subject</th>
                <th>message</th>
                <th>Create Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($contactlist>0){ $id = 1; ?>
              <?php foreach ($contactlist as $value): ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $value['name'] ?></td>
                <td>
                  <?php echo $value['email'] ?>
                </td>
                <td>
                  <?php echo $value['subject'] ?>
                </td>
                <td>
                  <?php echo $value['message'] ?>
                </td>
                <td>
                  <?php echo $value['create_date'] ?>
                </td>
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
window.location="<?php echo base_url()?>admin/Contactlist/delectlist/"+id;
}
}
</script>