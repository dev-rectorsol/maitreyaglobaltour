<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Edit Tour </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Tour</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-9 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Tour</h4>
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
            if($this->session->tempdata('Updated'))
            {
            ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $this->session->tempdata('Updated'); ?>
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
            if($this->session->tempdata('Not_Updated'))
            {
              ?>
          <div class="alert alert-danger alert-dismissible fade show" alert="alert">
            <?php echo $this->session->tempdata('Not_Updated'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
            }
          ?>
           <?php 
            if($this->session->tempdata('File_Not_delete'))
            {
              ?>
          <div class="alert alert-danger alert-dismissible fade show" alert="alert">
            <?php echo $this->session->tempdata('File_Not_delete'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
            }
          ?>
          <section>
            <form class="forms-sample" action="<?php echo base_url('admin/Addtour/updateTour/').$tourData['id'] ?>"
              method="POST">
              <div class="form-group">
                <label for="fortitle">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Tour Title" name="title"
                  value="<?php echo $tourData['title'] ?>">
              </div>
              <div class="form-group">
                <label for="fortitle">Short Description</label>
                <textarea id='tinyMceExample' class="editor" name="tourcontent" placeholder="Edit your content here...">
                  <?php echo $tourData['content'] ?>
                  </textarea>
              </div>
              <div class="form-group">
                <label for="forCate">Category</label>
                <select class="form-control" id="category" name="category">
                  <option value="">-- Select Category --</option>
                  <?php foreach ($categoryData as $value): ?>
                  <option <?php if ($tourData['category']==$value['category_name']) {
                      ?>selected<?php } ?> value="<?php echo $value['category_name'] ?>">
                    <?php echo $value['category_name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="forTotalDayas">Total Days and Nights</label>
                <input type="text" class="form-control" id="totalDaysNight" placeholder=" Ex : 2 Days 1 Night"
                  name="totalDaysNight" value="<?php echo $tourData['totalDaysNight'] ?>">
              </div>
              <div class="form-group">
                <label for="forCate">Session</label>
                <select class="form-control" id="session_id" name="session_id">
                  <option value="">--Select Session--</option>
                  <?php foreach ($session as $value): ?>
                  <option <?php if ($tourData['session_id']==$value['id']) {
                                    ?>selected<?php } ?> value="<?php echo $value['id'] ?>">
                    <?php echo $value['sessionName'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>


              <div class="form-group">
                <label for="forCate" class="text-dark h">Itinerary</label>
              </div>
              <div>
                <?php foreach ($itineraryData as $value):?>
                <?php $i = 1; ?>
                <!-- <div> -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Title: Day 1" name="day[]"
                        value="<?php echo $value['day'] ?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea id='tinyMceExample' class="form-control editor" rows="4" spellcheck="false"
                        placeholder="Content" name="content[]"><?php echo $value['content'] ?></textarea>
                    </div>
                  </div>
                  <input type="hidden" name="itineraryId[]" value="<?php echo $value['id']?>">
                  <div class="col-md-1">
                    <div class="form-group">
                      <button href="javascript:void(0)"
                        onclick="delete_detail(<?php echo $value['id'];?>,<?php echo $tourData['id'];?>)" type="button"
                        id="ItineraryDelete<?php echo $value['id']?>"
                        class="btn btn-danger btn-sm icon-btn ml-2 ItineraryDelete" value="<?php echo $value['id'] ?>">
                        <i class="mdi mdi-delete"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
                <?php $i= $i+1; endforeach ?>
                <div class="form-group col-md-12">


                  <div class="container" id="images"><?php foreach($galleryImage as $row) {?>
                    <span class="pip"><img src="<?php echo base_url('uploads/tourImg/').$row['galleryImg']?>"
                        id="output" value="<?php echo $row['galleryImg']?>" style="width:100px;height:100px"
                        class="img"></img><br /><span class="remove">Remove</span></span>
                    <?php } ?> </div>
                  <button type="button" data-toggle="modal" data-target="#basicExampleModal"
                    class="btn btn-info btn-sm icon-btn ml-2 mb-2 float-right" id="">
                    <i class="mdi mdi-plus"></i>Add Gallery
                  </button>
                </div>
                <div class="form-group col-md-12">
                  <label for="forCate">Add Feature Image</label>
                  <input type="file" name="featureImg" value="" class="form-control">
                  <img src="<?php echo base_url('uploads/tourImg/').$featureImage[0]['image']?>"
                    style="width:200px;height:100px" class="img"></img>
                </div><input type="hidden" name="tourId" value="<?php echo $tourData['id']?>">
                <input type="hidden" name="oldpic" value="<?php echo $featureImage[0]['image']?>">

                <div class="form-group">
                  <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>"
                    value="<?php echo $this->security->get_csrf_hash();?>">
                  <input type="submit" id="itineraryData" value="Update " class="btn btn-primary btn-lg" />
                </div>
              </div>
            </form>
          </section>
          <hr>

          <section>
            <div class="form-group">
              <label for="forCate">Add More Itinerary</label>
            </div>
            <form action="<?php echo base_url('admin/Addtour/addMoreItinerary/').$tourData['id'] ?>" method="POST">
              <div class="repeater">
                <div>
                  <div class="row ">
                   
                  </div>
                  <div class="editrepeater container"></div>
                </div>

                <button type="button" class="btn btn-info btn-sm icon-btn ml-2 mb-2 float-right" id="editdays">
                  <i class="mdi mdi-plus"></i>Add days
                </button>
              </div>

              <div class="form-group">
                <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>"
                  value="<?php echo $this->security->get_csrf_hash();?>">
                <input type="submit" id="submit" value="Update " class="btn btn-primary btn-lg" />
              </div>
      
        </form>
        </section>
        <hr>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal  -->
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
      <form action="<?php echo base_url('admin/AddTour/AddGalleryImage');?>" method="POST"
        enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="image">Select Image</label>
            <input type="file" name="galleryImg[]" id="files" multiple="multiple" class="form-control" value="">
            <input type="hidden" name="tourId" value="<?php echo $tourData['id']?>" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>"
            value="<?php echo $this->security->get_csrf_hash();?>">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Save" name="Save" class="btn btn-secondary">
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  function delete_detail(id, tourId) {
    // alert(tourId); stop();
    var del = confirm("Do you want to Delete");
    if (del == true) {
      window.location = "<?php echo base_url()?>admin/Addtour/deleteItinerary/" + id + "/" + tourId;
    }

  }
</script>
<style>
  input[type="file"] {
    display: block;
  }

  .imageThumb {
    max-height: 75px;
    border: 2px solid;
    padding: 1px;
    cursor: pointer;
  }

  .pip {
    display: inline-block;
    margin: 10px 10px 0 0;
  }

  .remove,
  .remove1 {
    display: block;
    background: red;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
  }

  .remove:hover,
  .remove1:hover {
    background: white;
    color: black;
  }
</style>
<script type="text/javascript">
  $(document).ready(function () {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function (e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          fileReader.onload = (function (e) {
            var file = e.target;
            $("<span class=\"pip\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +

              "</span>").insertAfter("#files");


          });
          fileReader.readAsDataURL(f);
        }
      });

      $(".remove").click(function () {
        var path = $(this).parent().children('.img').attr('src');
        var name = $(this).parent().children('.img').attr('value');
        var id = "<?php echo $tourData['id']?>";
        console.log(path);
        console.log(name);
        $.ajax({
          url: '<?= base_url() ?>admin/addTour/deleteImage',
          type: 'post',
          data: {
            path: path,
            tourId: id,
            file: name,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php  echo $this->security->get_csrf_hash(); ?>'
          },
          success: function (response) {

            location.reload();

          }
        });

      });
    } else {
      alert("Your browser doesn't support to File API")
    }

  });
</script>