<html lang="en">
<head>
    <meta charset="utf-8">
    <title> سیستم ثبت نام الکترونیکی مهرالبرز</title>

    @include('includes')

</head>

<body style="height: 500px;">

<div class="page-header">
    <div class="col-lg-4"></div>

    <div class="col-lg-4">
        <h3>صفحه اعلام مشخصات اولیه</h3>

    </div>
    <div class="col-lg-4"><img src="resources/assets/img/logo-mehralborz.png"></div>
</div>
<div class="container" style="margin-top: 10%">

    <div class='row'>
        <div class='col-sm-12'>
            <div class="col-md-8 col-md-offset-2 well">
                <p>سرکار خانم/جناب آقای
                    <b style="color:#B4531D;">  {{$name}}</b></p>

                <p>ضمن عرض تبريك به مناسبت قبولی در آزمون سراسري كارشناسي ارشد سال1395 و آرزوی موفقیت برای شما پذیرفته
                    عزیز و ابراز خوشوقتی از اینکه موسسه آموزش عالی مهرالبرز را به عنوان محل تحصیل دوره تحصیلات تکمیلی
                    خود انتخاب نموده اید؛ </p>

                <p>
                    به اطلاع می رساند شما در رشته
                    <b style="color:#B4531D;">{{$exam}}</b>
                   
                    با شهریه
                    <b style="color:#B4531D;"> {{$fee}}</b>
                    ریال
                    (مبلغ مربوط به نیمسال اول ) در موسسه آموزش عالی مهرالبرز پذیرفته شده اید، خواهشمند است مراحل تکمیل
                    فرم ثبت نام الکترونیکی را به دقت تکمیل فرمایید.
                </p>

                <p>جهت آغاز فرایند ثبت نام الکترونیکی ، لطفا پست الکترونیکی و شماره تلفن همراه معتبر و شخصی نیز خود را
                    وارد نمایید.</p>
            </div>
            <div class="col-md-6 col-md-offset-3 well">
                <form action="checkStudent" method="get">
                    <div class="form-group">

                        <input type="text" class="form-control" tabindex="1" name="email" id="email"
                               placeholder="پست الکترونیک ">
                        <input type="hidden" id="student_id" value="{{$id}}">
                        <input type="hidden" id="course_id" value="{{$courseId}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" tabindex="2" id="mobile"
                               placeholder=" تلفن همراه">
                    </div>
                    <button class="btn btn-primary" id="register_link">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-footer">
        <div class="row">

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 right-footers">
                <span>با ما در ارتباط باشید</span>


                <div class="custom">
                    <p style="direction: rtl; text-align: right;">خط ویژه: 88001511-021</p>

                    <p style="direction: rtl; text-align: right;">ایمیل پشتیبانی: reg@mehralborz.ac.ir </p></div>

            </div>


        </div>
        <div class="row" style="text-align: center">
            <p style="color: white;"> تمامي حقوق اين سايت متعلق به مؤسسه آموزش عالي مهرالبرز مي باشد.
            </p>
        </div>
    </div>
</div>
<script src="resources/assets/js/bootstrap.min.js"></script>
<script src="resources/assets/js/TweenMax.min.js"></script>
<script src="resources/assets/js/resizeable.js"></script>
<script src="resources/assets/js/joinable.js"></script>
<script src="resources/assets/js/xenon-api.js"></script>
<script src="resources/assets/js/xenon-toggles.js"></script>
<script src="resources/assets/js/jquery-validate/jquery.validate.min.js"></script>
<script src="resources/assets/js/inputmask/jquery.inputmask.bundle.js"></script>
<script src="resources/assets/js/formwizard/jquery.bootstrap.wizard.min.js"></script>
<script src="resources/assets/js/datepicker/bootstrap-datepicker.js"></script>
<script src="resources/assets/js/toastr/toastr.min.js"></script>
<script src="resources/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script src="resources/assets/js/resizeable.js"></script>
<script src="resources/assets/js/xenon-custom.js"></script>
<script src="resources/assets/js/dropzone.min.js"></script>
<script src="resources/assets/js/register.js"></script>

<script>


    $("#email").change(function () {
        if (checkemail($('#email').val()) == false) {
            $('#email').css('border-color', '#CC655F');
            $('#email').focus();
            toastr.error("لطفا ایمیل با فرمت مناسب وارد نمایید", opts);

        }
    });
</script>
}
});
</body>
</html>
