<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Tour Categories </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Tour</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-9 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Tour</h4>
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
          <form id="tourForm" class="forms-sample" method="POST" action="<?php echo base_url('admin/Addtour') ?>" enctype="multipart/form-data" >
            <div class="form-group">
              <label for="fortitle">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Tour Title" name="title" value="" required>
            </div>
            <div class="form-group">
              <label for="fortitle">Content</label>
              <textarea id='tinyMceExample' class='editor'  name="content1" value="" placeholder="Edit your content here..." required>
              
              </textarea>
            </div>
            <div class="form-group">
              <label for="forCate">Category</label>
              <select class="form-control" id="category" name="category" required>
                <option value="">-- Select Category --</option>
                <?php foreach ($categoryData as $value): ?>
                <option value="<?php echo $value['category_name'] ?>"><?php echo $value['category_name'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="forTotalDayas">Total Days and Nights</label>
              <input type="text" class="form-control" id="totalDaysNight" placeholder=" Ex : 2 Days 1 Night"  name="totalDaysNight" value="">
            </div>
            <div class="form-group">
              <label for="forCate">Session</label>
              <select class="form-control" id="session_id" name="session_id" required>
                <option value="">--Select Session--</option>
                <?php foreach ($session as $value): ?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['sessionName'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <!-- Add Itinerary section-->
            <div class="form-group">
              <label for="forCate">Itinerary</label>
            </div>
            <div class="repeater10">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Title: Day 1" name="day[]" value="" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea  class="form-control editortxt editor"  rows="4" spellcheck="false"   placeholder="Content" name="content[]"></textarea>
                    </div>
                  </div>
              </div>
              <div class="repeater container"></div>
              <button  type="button" class="btn btn-info btn-sm icon-btn ml-2 mb-2 float-right" id="adddays">
              <i class="mdi mdi-plus"></i>Add days
              </button>
              
            </div>
            <div class="row mt-10">
              <div class="form-group col-md-12">
                <label for="forCate">Upload Gallery Image</label>
                <input type="file" name="galleryImg[]" id="files" multiple="multiple" class="form-control" required>
              </div>
              <div class="form-group col-md-12">
                <label for="forCate">Add Feature Image</label>
                <input type="file" name="featureImg" value="" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <input type="submit" id="submit" value="Add " class="btn btn-primary btn-lg"/>
              </div>
            </div>
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
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
    </style>
 <script type="text/javascript">
    $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();$('#files').val("");
          });
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
    </script>

