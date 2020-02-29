(function($) {
  'use strict';
  /*Quill editor*/
  if ($("#quillExample1").length) {
    var quill = new Quill('#quillExample1', {
      modules: {
        toolbar: [
          [{
            header: [1, 2, false]
          }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Compose an epic...',
      theme: 'snow' // or 'bubble'
    });
  }
  /*Tinymce editor*/
  if ($(".editor").length) {
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
  }

})(jQuery);
function textedtion(){
  if ($(".editortxt").length) {
    tinymce.init({
      selector: '.editortxt',
      height: 500,
      theme: 'silver',
      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
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
  }
}