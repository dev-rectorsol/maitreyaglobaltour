   <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>asset/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url() ?>asset/assets/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/dataTables.bootstrap4.js"></script>
    <!-- <script src="<?php echo base_url() ?>asset/assets/js/tinymce.min.js"></script> -->
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->

    <script src="<?php echo base_url() ?>asset/assets/vendors/tinymce/tinymce.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>asset/assets/js/jquery.repeater.min.js"></script> -->
    <script src="<?php echo base_url() ?>asset/assets/js/jquery.uploadfile.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>asset/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/misc.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/data-table.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/editor.js"></script>
    <!-- <script src="<?php echo base_url() ?>asset/assets/js/form-repeater.js"></script> -->
    <script src="<?php echo base_url() ?>asset/assets/js/file-upload.js"></script>
    <script src="<?php echo base_url() ?>asset/assets/js/jquery-file-upload.js"></script>
    
  
     <script>
    // tinymce.init({ 
    //   selector:'.editor',
    //   height: 200,
    //   selector: "textarea",
    //   toolbar: "code"
    // });
    </script>

<script>
// Add more semester
var i = 1;
$(document).on('click', '#adddays', function() {
  
      i++;
      /* Act on the event */
      var html = '<div id="removeDiv'+i+'" class="row">'+
                            '<div class="col-md-12">'+
                              '<div class="form-group">'+
                                '<input type="text" class="form-control"  placeholder="Title: Day 1" name="day[]" value="">'+
                              '</div>'+
                            '</div>'+
                            '<div class="col-md-12 form-group">'+
                              '<textarea class="form-control editor"  rows="4" spellcheck="false"  placeholder="Content" name="content[]"></textarea>'+
                            '</div>'+
                            '<div >'+
                                '<a id="'+i+'" class="btn btn-danger btn-sm icon-btn ml-2 remove">'+'<i class="mdi mdi-delete"></i>'+'</a>'+
                              '</div>'+
                  '</div>';
                  
      $('.repeater').append(html);
      tinymce.init({
      selector: '.editor',
      height: 500,
      theme: 'silver',
      plugins: [
        'advlist autolink lists link charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
      image_advtab: true,
      templates: [{
          title: 'Test template 1',
          content: 'Test 1'
        },
        {
          title: 'Test template 2',
          content: 'Test 2'
        }
      ],
      content_css: []
    });
    });
    $(document).on('click', '.remove', function() {
      /* Act on the event */
      var remove_id = $(this).attr("id");
      $('#removeDiv'+remove_id+'').remove();
    });
</script>

<script>
// Add more semester
var i = 1;
$(document).on('click', '#editdays', function() {
  
      i++;
      /* Act on the event */
      var html = '<div id="removeEdit'+i+'" class="row">'+
                            '<div class="col-md-12">'+
                              '<div class="form-group">'+
                                '<input type="text" class="form-control"  placeholder="Title: Day 1" name="day[]" value="">'+
                              '</div>'+
                            '</div>'+
                            '<div class="col-md-12 form-group">'+
                              '<textarea class="form-control editor"  rows="4" spellcheck="false"  placeholder="Content" name="content[]"></textarea>'+
                            '</div>'+
                            '<div >'+
                                '<a id="'+i+'" class="btn btn-danger btn-sm icon-btn ml-2 remove">'+'<i class="mdi mdi-delete"></i>'+'</a>'+
                              '</div>'+
                  '</div>';
                  
      $('.editrepeater').append(html);
      tinymce.init({
      selector: '.editor',
      height: 500,
      theme: 'silver',
      plugins: [
        'advlist autolink lists link charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
      image_advtab: true,
      templates: [{
          title: 'Test template 1',
          content: 'Test 1'
        },
        {
          title: 'Test template 2',
          content: 'Test 2'
        }
      ],
      content_css: []
    });
    });
    $(document).on('click', '.remove', function() {
      /* Act on the event */
      var remove_id = $(this).attr("id");
      $('#removeEdit'+remove_id+'').remove();
    });
</script>
  </body>
</html>