(function (window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */

  // IMAGE UPLOADING :)
  $(".upload-photo").on("change", function (e) {
    var path = $(this).parent().parent().prev().find('img');
    readURL(this, path);
  });

  function readURL(input, path) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        path.attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  //slug create
  $('.item-name').on('keyup', function () {
    let $this = $(this);
    let str = $this.val().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');

    $('#slug').val(str);
  });

  // Tagify
  if ($('.tags').length > 0) {
    $('.tags').tagify();
  }

  //delete modal
  $('#confirm-delete').on('show.bs.modal', function (e) {
    $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
  });

})(window);