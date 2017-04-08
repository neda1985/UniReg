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

function tab1(data) {
    var tab1 = '<div class="well"><table  cellspacing="0" class="table table-bordered"><thead> <tr>' +
        '<th>نام دوره</th>  <th >کد</th>  <th>شهریه ثابت</th>     <th>شهریه کامل </th>'
    '<th>ظرفیت رسمی </th>' +
    '<th>ظرفیت اعلام شده </th>' +
    '<th>جزئیات</th>' +
    '</tr>' +
    '</thead>';
    $.each(data, function (index, value) {
        tab1 += '<tr ><td>'+value.title+' </td><td> value.code </td><td> value.staticFee</td>' +
            '<td>value.totallFee </td>' +
            '<td> value.officialCapacity </td>' +
            '<td> value.decleredCapacity </td>' +
            '<td><a href="#"><span class="glyphicon glyphicon-trash" onclick="trashCourse(value.id)"></span></a></td></tr>'
    });
    return tab1;
}
function displayAdminContent(id) {
    if (id == 2) {
        var data = '<form name="import" action="stlist" method="get" enctype="multipart/form-data"> <input type="submit" name="submit" value="آپلود لیست" /></form>';
        $('#content').html(data);
    }
    if (id == 1) {
        $.ajax({
            type: "post",
            url: "admin1",
            success: function (data) {
                $('#content').html(tab1(data));
            }
        });
    }
    if (id == 3) {
        $.ajax({
            type: "POST",
            url: "admin3",
            ajaxStart: $('.conver_upload').show(),
            success: function (data) {
                $('#content').html(data);
            }

        });
    }
    if (id == 4) {
        $.ajax({
            type: "POST",
            url: "admin4",
            ajaxStart: $('.conver_upload').show(),
            success: function (data) {
                $('#content').html(data);
            }

        });
    }
    if (id == 5) {
        $.ajax({
            type: "POST",
            url: "admin5",
            ajaxStart: $('.conver_upload').show(),
            success: function (data) {
                $('#content').html(data);
            }

        });
    }
    if (id == 7) {
        $.ajax({
            type: "GET",
            url: "admin7",
            ajaxStart: $('.conver_upload').show(),
            success: function (data) {
                $('#content').html(data);
            }

        });
    }
}
function trashCourse(id) {
    $.ajax({
        type: "POST",
        url: "adminDeleteCourse",
        data: {
            "id": id
        },
        ajaxStart: $('.conver_upload').show(),
        success: function (data) {
            displayAdminContent(1);
        }

    });
}
function showStDetails(id) {
    $.ajax({
        type: "GET",
        url: "stDetails",
        data: {
            "id": id
        },
        ajaxStart: $('.conver_upload').show(),
        success: function (data) {
            data = JSON.parse(data);
            $('#name').html(data.name);
            $('#lastName').html(data.family);
            $('#email').html(data.email);
            $('#mobile').html(data.mobile);
            $('#marital').html(data.marital);
            $('#birthdate').html(data.birthDate);
            $('#birthCity').html(data.birthCity);
            $('#military').html(data.militery_status);
            $('#imgPersonal').html('<a href="resources/uploads/' + data.imgPersonal + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#militaryImg').html('<a href="resources/uploads/' + data.militaryCard + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#idImg').html('<a href="resources/uploads/' + data.idImg + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#idCardImg').html('<a href="resources/uploads/' + data.idCardImg + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#uniDoc').html('<a href="resources/uploads/' + data.docImg + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#acceptenceDoc').html('<a href="resources/uploads/' + data.acceptenceDoc + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#juniorDoc').html('<a href="resources/uploads/' + data.juniorDoc + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#juniorAcceptence').html('<a href="resources/uploads/' + data.juniorBachelorPointsImg + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#wariorCard').html('<a href="resources/uploads/' + data.wariorCard + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#wariorIntro').html('<a href="resources/uploads/' + data.wariorIntro + '" download><span class="glyphicon glyphicon-download"></span></a>');
            $('#job').html(data.job);
            $('#jobPlace').html(data.jobPlace);
            $('#addreas').html(data.address);


            $('#stDetails').modal('show');
        }

    });
}
function adminAddCourse() {
    var data = {
        title: $('#courseTitle').val()
        , code: $('#courseCode').val()
        , staticFee: $('#staticFee').val()
        , dynamicFee: $('#dynamicFee').val()
        , decleredCapacity: $('#decleredCapacity').val()
        , officialCapacity: $('#officialCapacity').val()

    };
    $.ajax({
        type: "POST",
        url: "adminAddCourse",
        data: data,
        ajaxStart: $('.conver_upload').show(),
        success: function (data) {
            displayAdminContent(1);
        }

    });
}
$(document).ready(function () {
    $('#register_link').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "registerLink",
            data: {
                "email": $("#email").val(),
                "mobile": $("#mobile").val(),
                "id": $("#student_id").val(),
                "course_id": $("#course_id").val(),

            },
            ajaxStart: $('.conver_upload').show(),
            success: function (data) {
                window.location = data;

            }

        });
    });
    $('#submit-img').uploadFile('submit-img-form', '#confirm-update-account-img-modal', '#selected-file-name');
    $('#file-elemt-tag').createUploadInput('file-element', '#selected-file-name', '#file-not-supported-msg', $('#type-id-file').val());

});