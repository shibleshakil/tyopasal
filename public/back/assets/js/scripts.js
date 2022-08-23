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

})(window);