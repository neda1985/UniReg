var index = 1;

jQuery(document).ready(function ($) {
    $('#showModal').click(function (e) {
        e.preventDefault();
        $('#creditPay').modal('show');

    })


    var opts = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-full-width",
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $("#cretificationType").change(function () {
        if ($("#cretificationType").val() == 'کارشناسی ناپیوسته ') {
            $('#ifJunior').show(1000);
        }
        else {
            $('#ifJunior').hide(1000);
        }
    });
    $('#accepInfo').change(function () {
        if ($('#accepInfo').prop("checked") == true) {
            $("#acceptenceBTN").attr('disabled', false)
        }
        else {
            $("#acceptenceBTN").attr('disabled', true);
        }
    });

    $("#nextstep").bind("click", function () {

        if (index == 1) {
            checkTab2();
        }
        else if (index == 2) {
            checkTab3();

        }
        else if (index == 3) {
            checkTab4();

        }
        else if (index == 4) {
            checkTab5();

        }
        else if (index == 5) {
            checkTab6();

        }
    });
    $("#previousstep").bind("click", function () {
        if (index > 1) {
            switchTab(index - 1, index);
            index = index - 1;
        }
    });

    function checkTab2() {
        var checked = true;

        if ($('#marital').val() == " ") {
            $('#marital').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#birthdayMonth').val() == " ") {
            $('#birthdayMonth').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#birthdayYear').val() == " ") {
            $('#birthdayYear').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#birthdayDay').val() == " ") {
            $('#birthdayDay').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#birthProvince').val() == " ") {
            $('#birthProvince').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#birthCity').val() == "") {
            $('#birthCity').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#passporProvince').val() == " ") {
            $('#passporProvince').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#passportCity').val() == "") {
            $('#passportCity').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#sex').val() == "مرد") {
            if ($('#militaryStatus').val() == " ") {
                $('#militaryStatus').css('border-color', '#CC655F');
                checked = false;
            }
        }
        if ($('#job').val() == " ") {
            $('#job').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#jobPlace').val() == "") {
            $('#jobPlace').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#jobRelataed').val() == " ") {
            $('#jobRelataed').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#militaryStatus').val() == 'دارد') {
            if ($('#military').val() == '') {
                $('#militaryDropzone').addClass('orangeAlert');
                checked = false;
            }
        }
        if ($('#shenasnameh').val() == '') {
            $('#shenasnamehDropzone').addClass('orangeAlert');
            checked = false;
        }
        if ($('#cartmeli').val() == '') {
            $('#cartmeliDropzone').addClass('orangeAlert');
            checked = false;
        }
        if ($('#aks').val() == '') {
            $('#aksDropzone').addClass('orangeAlert');
            checked = false;
        }

        if (checked == true) {
            switchTab(2, 1);
            index = index + 1;
        }
        else {
            toastr.error("لطفا اطلاعات خواسته شده را تکمیل نمایید! ", opts);


        }

    }

    function checkTab3() {
        var checked = true;
        if ($('#address').val() == "") {
            $('#address').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#phonenumber').val() == "") {
            $('#phonenumber').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#postalcode').val() == "") {
            $('#postalcode').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#residencyProvince').val() == "") {
            $('#residencyProvince').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#residencyCity').val() == "") {
            $('#residencyCity').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#email').val() == "" ) {
            $('#email').css('border-color', '#CC655F');
            checked = false;
        }


        if (checked == true) {
            switchTab(3, 2);
            index = index + 1;
        }
        else {
            toastr.error("لطفا اطلاعات خواسته شده را تکمیل نمایید! ", opts);

        }
    }

    function checkTab4() {
        var checked = true;
        if ($('#cretificationType').val() == "") {
            $('#cretificationType').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#uniType').val() == "-") {
            $('#uniType').css('border-color', '#CC655F');
            checked = false;
        }

        if ($('#eduType').val() == "-") {
            $('#eduType').css('border-color', '#CC655F');
            checked = false;
        }
        if ($('#uniDoc').val() == '') {
            $('#uniDocDropzone').addClass('orangeAlert');
            checked = false;
        }

        if ($('#acceptence').val() == '') {
            $('#acceptenceDropzone').addClass('orangeAlert');
            checked = false;
        }
        if ($('#ifJunior').is(":visible") == true) {
            if ($('#majorJonior').val() == '') {
                $('#majorJonior').css('border-color', '#CC655F');
                checked = false;
            }
            if ($('#majorMainJonior').val() == '') {
                $('#majorMainJonior').css('border-color', '#CC655F');
                checked = false;
            }
            if ($('#finishedUniNameJunior').val() == '') {
                $('#finishedUniNameJunior').css('border-color', '#CC655F');
                checked = false;
            }
            if ($('#uniDocJunior').val() == '') {
                $('#uniDocJuniorDropzone').addClass('orangeAlert');
                checked = false;
            }

            if ($('#acceptenceJunior').val() == '') {
                $('#acceptenceJuniorDropzone').addClass('orangeAlert');
                checked = false;
            }
        }

        if (checked == true) {
            switchTab(4, 3);
            index = index + 1;
        }
        else {
            toastr.error("لطفا اطلاعات خواسته شده را تکمیل نمایید! ", opts);

        }
    }

    function checkTab5() {
        var checked = true;
        if ($('.hasLoan').is(':checked') == false) {
            $('#hasLoan').addClass('orangeAlert');
            checked = false;
        }
        if ($("input:radio[name=hasLoan]:checked").val() == 'بله') {
            if ($('.loanStatus').is(':checked') == false) {
                $('#loanStatus').addClass('orangeAlert');
                checked = false;
            }
        }
        if (checked == true) {
            switchTab(5, 4);
            index = index + 1;
        }
        else {
            toastr.error("لطفا اطلاعات خواسته شده را تکمیل نمایید! ", opts);

        }

    }

    function checkTab6() {
        var checked = true;
        if ($('#shareRelation').val() == '-') {
            $('#shareRelation').addClass('orangeAlert');
            checked = false;
        }
        if ($('#invalidPercent').val() == '') {
            $('#invalidPercent').addClass('orangeAlert');
            checked = false;
        }
        if ($('#invalidcode').val() == '') {
            $('#invalidcode').addClass('orangeAlert');
            checked = false;
        }

        if ($('#invalidCard').val() == '') {
            $('#invalidCardDropzone').addClass('orangeAlert');
            checked = false;
        }
        if ($('#bonyadShahidImg').val() == '') {
            $('#bonyadShahidImgDropzone').addClass('orangeAlert');
            checked = false;
        }
        if (checked == true) {
            switchTab(6, 5);
            index = index + 1;
        }
        else {
            toastr.error("لطفا اطلاعات خواسته شده را تکمیل نمایید! ", opts);

        }

    }

    function switchTab(active, inactive) {
        $('#fwv-' + active).addClass("active");
        $('#tab' + active + '-li').addClass("active");
        $('#fwv-' + inactive).removeClass("active");
        $('#tab' + inactive + '-li').removeClass("active");

    }


});

jQuery(document).ready(function ($) {
    var $example_dropzone_filetable = $("#example-dropzone-filetable");
    var $example_dropzone_filetable2 = $("#example-dropzone-filetable2");
    var $example_dropzone_filetable3 = $("#example-dropzone-filetable3");
    var $example_dropzone_filetable4 = $("#example-dropzone-filetable4");
    var $example_dropzone_filetable5 = $("#example-dropzone-filetable5");
    var $example_dropzone_filetable6 = $("#example-dropzone-filetable6");
    var $example_dropzone_filetable7 = $("#example-dropzone-filetable7");

    $("#cartmeliDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-cartmeli">\
                    <td>' + 'اسکن کارت ملی' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                    <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        </tr>');
            $example_dropzone_filetable2.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable2').trigger('rowAddOrRemove');
            $("#cartmeliDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {
            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row2(\'cartmeli\',\'cartmeli\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#cartmeli").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row2(\'cartmeli\',\'cartmeli\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');

        },
    });
    $("#militaryDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-military">\
                        <td>' + '                                                  محل پیوست کارت پایان خدمت یا گواهی اشتغال به خدمت ارگان مربوطه و موافقت                                                 بالاترین مقام اجرایی                                             ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                        <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        </tr>');
            $example_dropzone_filetable2.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable2').trigger('rowAddOrRemove');
            $("#militaryDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {
            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row2(\'military\',\'military\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            document.getElementById("imageformat-military").value = file.name.split('.').pop();
            $("#military").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row2(\'military\',\'military\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#shenasnamehDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-shenasnameh">\
                        <td>' + 'اسکن صفحه اول شناسنامه' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                        <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        </tr>');
            $example_dropzone_filetable2.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable2').trigger('rowAddOrRemove');
            $("#shenasnamehDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row2(\'shenasnameh\',\'shenasnameh\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            document.getElementById("imageformat-shenasnameh").value = file.name.split('.').pop();
            $("#shenasnameh").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row2(\'shenasnameh\',\'shenasnameh\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#aksDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-aks">\
                            <td>' + 'عکس 3*4 با پس زمینه سفید' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable2.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable2').trigger('rowAddOrRemove');
            $("#aksDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row2(\'aks\',\'aks\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#aks").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row2(\'aks\',\'aks\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });

    $("#uniDocDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-uniDoc">\
                            <td>' + 'پیوست تصویر مدرک تحصیلی یا گواهی موقت ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable').trigger('rowAddOrRemove');
            $("#uniDocDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {
            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row(\'uniDoc\',\'uniDoc\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#report-img-uniDoc").attr("src", "images/data" + "." + file.name.split('.').pop());
            $("#uniDoc").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row(\'uniDoc\',\'uniDoc\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#acceptenceDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-acceptence">\
                            <td>' + 'پیوست تصویرتاییدیه ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable').trigger('rowAddOrRemove');
            $("#acceptenceDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {
            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row(\'acceptence\',\'acceptence\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#report-img-acceptence").attr("src", "images/data" + "." + file.name.split('.').pop());
            $("#acceptence").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row(\'acceptence\',\'acceptence\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });

    $("#uniDocJuniorDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-uniDocJunior">\
                            <td>' + 'پیوست تصویر مدرک تحصیلی مقطع کاردانی' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable3.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable3').trigger('rowAddOrRemove');
            $("#uniDocJuniorDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {
            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row3(\'uniDocJunior\',\'uniDocJunior\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#uniDocJunior").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row3(\'uniDocJunior\',\'uniDocJunior\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#acceptenceJuniorDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-acceptenceJunior">\
                            <td>' + 'پیوست تصویر ریز نمرات مقطع کاردانی' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable3.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable3').trigger('rowAddOrRemove');
            $("#acceptenceJuniorDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row3(\'uniDocJunior\',\'uniDocJunior\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#acceptenceJunior").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row3(\'uniDocJunior\',\'uniDocJunior\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });

    $("#invalidCardDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-invalidCard">\
                            <td>' + 'پیوست کارت ایثارگری  ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable4.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable4').trigger('rowAddOrRemove');
            $("#invalidCardDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row4(\'invalidCard\',\'invalidCard\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#report-img-invalidCard").attr("src", "images/data" + "." + file.name.split('.').pop());
            $("#invalidCard").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row4(\'invalidCard\',\'invalidCard\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#bonyadShahidImgDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-bonyadShahidImg">\
                            <td>' + 'پیوست تصویر معرفی نامه از بنیاد شهید ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable4.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable4').trigger('rowAddOrRemove');
            $("#bonyadShahidImgDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row4(\'bonyadShahidImg\',\'bonyadShahidImg\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#report-img-bonyadShahidImg").attr("src", "images/data" + "." + file.name.split('.').pop());
            $("#bonyadShahidImg").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row4(\'bonyadShahidImg\',\'bonyadShahidImg\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#firstCHImgDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-firstCHImg">\
                            <td>' + 'تصویر چک اول  ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable5.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable5').trigger('rowAddOrRemove');
            $("#firstCHImgDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row5(\'firstCHImg\',\'firstCHImg\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#firstCHImg").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row5(\'firstCHImg\',\'firstCHImg\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#secondCHImgDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-secondCHImg">\
                            <td>' + 'تصویر چک دوم  ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable6.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable6').trigger('rowAddOrRemove');
            $("#secondCHImgDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row6(\'secondCHImg\',\'secondCHImg\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#secondCHImg").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row6(\'secondCHImg\',\'secondCHImg\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
    $("#postDoceDropzone").dropzone({
        url: 'uploady',
        addedfile: function (file) {
            var size = parseInt(file.size / 1024, 10);
            size = size < 1024 ? (size + " KB") : (parseInt(size / 1024, 10) + " MB");
            var $el = $('<tr id="upload-table-tr-postDoce">\
                            <td>' + 'تصویر رسید ارسال چک   ' + '</td>\
                            <td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
                            <td>' + size + '</td>\
                        <td>در حال بارگذاری ...</td>\
                        < /tr>');
            $example_dropzone_filetable6.find('tbody').append($el);
            file.fileEntryTd = $el;
            file.progressBar = $el.find('.progress-bar');
            $('#example-dropzone-filetable6').trigger('rowAddOrRemove');
            $("#postDoceDropzone").hide();
        },
        uploadprogress: function (file, progress, bytesSent) {
            file.progressBar.width(progress + '%');
        },
        success: function (file, data) {

            file.fileEntryTd.find('td:last').html('<input type="button" class="btn" style="background-color: #CC655F;color: white;width:100%;" value="حذف" onclick="remove_dropzone_filetable_row6(\'postDoce\',\'secondCHImg\');"/>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
            $("#postDoce").val(data);
        },
        error: function (file) {
            file.fileEntryTd.find('td:last').html('<a onclick="remove_dropzone_filetable_row6(\'postDoce\',\'postDoce\');"> <span class="text-danger">اشکال در بارگذاری - دوباره امتحان کنید</span> </a>');
            file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
        },
    });
});

// multi-select


function remove_dropzone_filetable_row(trID, dissmissValue) {
    $('table#example-dropzone-filetable tr#upload-table-tr-' + trID).remove();
    $('#' + trID + 'Dropzone').toggle();
    $('#' + dissmissValue).val('');
    $('#example-dropzone-filetable').trigger('rowAddOrRemove');
}
function remove_dropzone_filetable_row2(trID, dissmissValue) {
    $('table#example-dropzone-filetable2 tr#upload-table-tr-' + trID).remove();
    $('#' + trID + 'Dropzone').toggle();
    $('#' + dissmissValue).val('');
    $('#example-dropzone-filetable2').trigger('rowAddOrRemove');
}
function remove_dropzone_filetable_row3(trID, dissmissValue) {
    $('table#example-dropzone-filetable3 tr#upload-table-tr-' + trID).remove();
    $('#' + trID + 'Dropzone').toggle();
    $('#' + dissmissValue).val('');
    $('#example-dropzone-filetable3').trigger('rowAddOrRemove');

}
function remove_dropzone_filetable_row4(trID, dissmissValue) {
    $('table#example-dropzone-filetable4 tr#upload-table-tr-' + trID).remove();
    $('#' + trID + 'Dropzone').toggle();
    $('#' + dissmissValue).val('');
    $('#example-dropzone-filetable4').trigger('rowAddOrRemove');

}
function remove_dropzone_filetable_row5(trID, dissmissValue) {
    $('table#example-dropzone-filetable5 tr#upload-table-tr-' + trID).remove();
    $('#' + trID + 'Dropzone').toggle();
    $('#' + dissmissValue).val('');
    $('#example-dropzone-filetable5').trigger('rowAddOrRemove');

}
function remove_dropzone_filetable_row6(trID, dissmissValue) {
    $('table#example-dropzone-filetable6 tr#upload-table-tr-' + trID).remove();
    $('#' + trID + 'Dropzone').toggle();
    $('#' + dissmissValue).val('');
    $('#example-dropzone-filetable6').trigger('rowAddOrRemove');

}
function remove_dropzone_filetable_row7(trID, dissmissValue) {
    $('table#example-dropzone-filetable7 tr#upload-table-tr-' + trID).remove();
    $('#' + trID + 'Dropzone').toggle();
    $('#' + dissmissValue).val('');
    $('#example-dropzone-filetable6').trigger('rowAddOrRemove');

}

// send info to server
function registerinformation() {
    var data = {
        approvalCode: $('#approvalCode').val(),
        marital: $('#marital').val(),
        birthdate: $('#birthdayDay').val() + '/' + $('#birthdayMonth').val() + '/' + $('#birthdayYear').val(),
        birthProvince: $('#birthProvince').val(),
        birthCity: $('#birthCity').val(),
        passporProvince: $('#passporProvince').val(),
        passportCity: $('#passportCity').val(),
        job: $('#job').val(),
        jobPlace: $('#jobPlace').val(),
        jobRelataed: $('#jobRelataed').val(),
        militaryStatus: $('#militaryStatus').val(),
        shenasnameh: $('#shenasnameh').val(),
        cartmeli: $('#cartmeli').val(),
        aks: $('#aks').val(),
        military: $('#military').val(),
        address: $('#address').val(),
        postalCode: $('#postalCode').val(),
        phone: $('#phonenumber').val(),
        postalcode: $('#postalcode').val(),
        residencyProvince: $('#residencyProvince').val(),
        residencyCity: $('#residencyCity').val(),
        residencyVillage: $('#residencyVillage').val(),
        cretificationType: $('#cretificationType').val(),
        uniType: $('#uniType').val(),
        eduType: $('#eduType').val(),
        uniDoc: $('#uniDoc').val(),
        acceptence: $('#acceptence').val(),
        majorJonior: $('#majorJonior').val(),
        majorJoniorGerayesh: $('#majorJoniorGerayesh').val(),
        finishedUniNameJunior: $('#finishedUniNameJunior').val(),
        uniDocJunior: $('#uniDocJunior').val(),
        acceptenceJunior: $('#acceptenceJunior').val(),
        wariorRelation: $('#shareRelation').val(),
        invalidProcent: $('#invalidPercent').val(),
        wariorCode: $('#invalidcode').val(),
        wariorCardImg: $('#invalidCard').val(),
        wariorIntro: $('#bonyadShahidImg').val(),
        hasLoan: $("input:radio[name=hasLoan]:checked").val(),
        loanStatus: $("input:radio[name=loanStatus]:checked").val(),
        reqLoan: $("input:radio[name=reqLoan]:checked").val()
    };
    $.post('registerinformation',
        data,
        function (data) {
            window.location = 'payment?code=' + data;
        }
    );

}



$('#agreeCheckInfo').change(function () {
    if ($('#agreeCheckInfo').prop("checked") == true) {
        window.location = 'finalizePaymentCheck?code=' + $('#approvalCode').val();
        $('#creditPay').modal('hide');

    }

});

$('#checkAgreementRegistering').change(function () {
    if ($('#firstCHSerialNumber').val() == '' || $('#firstCHAccountNumber').val() == '' || $('#firstCHBankName').val() == '' || $('#firstCHBankCode').val() == '' ||
        $('#firstCHImg').val() == '' || $('#secondCHSerialNumber').val() == '' ||
        $('#secondCHAccountNumber').val() == '' || $('#secondCHBankName').val() == '' ||
        $('#secondCHBankCode').val() == '' || $('#secondCHImg').val() == '' || $('#postDoce').val() == '') {
        toastr.error("لطفا اطلاعات خواسته شده را تکمیل نمایید! ", opts);
        $('.checkPeymentfield').addClass('orangeAlert');
    }
    else {

        if ($('#checkAgreementRegistering').prop("checked") == true) {
            $("#checkAgreementRegistering").attr('disabled', true);
            var data = {
                approvalCodecheck: $('#approvalCodecheck').val(),
                firstCHAmount: $('#firstCHAmount').val(),
                firstCHSerialNumber: $('#firstCHSerialNumber').val(),
                firstCHDate: $('#firstCHDate').val(),
                firstCHBankCode: $('#firstCHBankCode').val(),
                firstCHBankName: $('#firstCHBankName').val(),
                firstCHAccountNumber: $('#firstCHAccountNumber').val(),
                firstCHImg: $('#firstCHImg').val(),
                secondCHAmount: $('#secondCHAmount').val(),
                secondCHSerialNumber: $('#secondCHSerialNumber').val(),
                secondCHDate: $('#secondCHDate').val(),
                secondCHBankCode: $('#secondCHBankCode').val(),
                secondCHBankName: $('#secondCHBankName').val(),
                secondCHAccountNumber: $('#secondCHAccountNumber').val(),
                secondCHImg: $('#secondCHImg').val(),
                postDoce: $('#postDoce').val()
            };
            $.post('registerChecks',
                data,
                function (data) {
                    if (data == 1)
                        $('#payStaticFee').attr('disabled', false);
                }
            );

        }
    }

});

function isnumber(num1) {
    if (isNaN(num1)) {
        return false;
    } else {
        return true;
    }
}
function checkemail(v) {
    var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
    return (v.match(r) == null) ? false : true;

}