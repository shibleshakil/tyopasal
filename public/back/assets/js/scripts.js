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

$(document).on('change', '#category_id', function () {
  let category_id = $(this).val();
  let url = $(this).attr('data-href');
  getCategory(url, category_id);
})

$(document).on('change', '#subcategory_id', function () {
  let subategory_id = $(this).val();
  let url = $(this).attr('data-href');
  getSubCategory(url, subategory_id);
})

function getSubCategory(url, subcategory_id) {
  $.get(url + '?subcategory_id=' + subcategory_id, function (data) {
    let response = data.data;
    let view_html = ``;
    $.each(response, function (key, value) {
      view_html += `<option value="${value.id}">${value.name}</option>`;
    });
    let start = `<option value="">Select One</option>`;
    $('#childcategory_id').html(start + view_html);
  })
}

function getCategory(url, category_id) {
  $.get(url + '?category_id=' + category_id, function (data) {
    let response = data.data;
    let view_html = ``;
    $.each(response, function (key, value) {
      view_html += `<option value="${value.id}">${value.name}</option>`;
    });
    let start = `<option value="">Select One</option>`;
    $('#subcategory_id').html(start + view_html);
  })
}