var isUploading=0;
(function($) {
  $.fn.createUploadInput = function(fileinputelement, fileNameElement, fileNotSupportedElement, type) {
    var fileElem = document.getElementById(fileinputelement);
    this.click(function(e) {
      fileElem.click();
      e.preventDefault();
    });
    jQuery(fileElem).change(function() {
      var exts = '';
      if (type == 2) {
        exts = ['jpg', 'jpeg', 'png', 'gif'];
      } else exts = ['wav', 'mp3'];
      var file = jQuery(fileElem).val();
      var get_ext = file.split('.');
      get_ext = get_ext.reverse();
      if ($.inArray(get_ext[0].toLowerCase(), exts) > -1) {
        $(fileNameElement).html((jQuery(fileElem).val()));
        $(fileNameElement).show(600);
      } else {
        $(fileNameElement).html('');
        $(fileNotSupportedElement).html('???? ???? ?? ???? ????? ?????? ??????');
        $(fileNotSupportedElement).show(600);
      }
    });
  };
  $.fn.uploadFile = function(form, modalId, isCancledObjectChenge) {
    this.click(function(event) {

      event.preventDefault();
      $.ajax({
        processData: false,
        ajaxStart: $('.conver_upload').show(),
        contentType: false,
        url: 'uploadExchangeAttachment',
        type: "POST",
        xhr: function() {
          var xhr = $.ajaxSettings.xhr();
          xhr.upload.onprogress = function(evt) {
            isUploading=1;
            $(modalId).on('hide.bs.modal', function(e) {
              if(isUploading==1)
              {
                e.preventDefault();


                $(modalId).find('.modal-content').css(' -webkit-animation','mymove 0.2s 5');
                $(modalId).find('.modal-content').css('animation','mymove 0.2s 5');
              }
            });
            $('#submit-img').hide();
            $('#submit-voice').hide();
            var btn = $('.confirm-area').find('.btn-danger-them');
            btn.removeClass('btn-danger-them');
            btn.addClass('btn-warning-them');
            btn.html('Cancle uploading ');
            btn.addClass('btn-cancle-upload');
            $(".btn-cancle-upload").click(function(e) {
              isUploading=0;
              xhr.abort();
              $('#submit-img').show();
              $('#submit-voice').show();
              btn = $('.confirm-area').find('.btn-warning-them');
              btn.removeClass('btn-warning-them');
              btn.addClass('btn-danger-them');
              btn.html('Yes');
              btn.attr('id', '');
              $('.upload-progress').css('width', 0);
              $('.upload-progress').css('background-image', 'none');
              $('.upload-progress-percentage').html('');
              $(isCancledObjectChenge).html('');
              $(isCancledObjectChenge).hide()
            });
            $('.upload-progress').css('width', evt.loaded / evt.total * 400);
            $('.upload-progress').css('background-image', ' url(Resources/img/upload.jpg)');
            $('.upload-progress-percentage').html(Math.round(evt.loaded / evt.total * 100) + '%');
          };
          return xhr;
        },
        data: new FormData(document.getElementById(form)),
        success: function(data) {
           $('.conver_upload').hide();
          if (data) {
            $("#attachment-input").val(data);
            isUploading=0;
            $('#submit-img').show();
            btn = $('.confirm-area').find('.btn-warning-them');
            btn.removeClass('btn-warning-them');
            btn.addClass('btn-danger-them');
            btn.html('No');
            btn.attr('id', '');
            $('.upload-progress').css('width', 0);
            $('.upload-progress').css('background-image', 'none');
            $('.upload-progress-percentage').html('');
            $(isCancledObjectChenge).html('');
            $(isCancledObjectChenge).hide()
          }
        }
      });
      return false;
    });
  };
}(jQuery));
