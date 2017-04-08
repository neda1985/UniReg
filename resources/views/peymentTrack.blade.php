<html lang="en">
<head>
    <meta charset="utf-8">
    <title> {{$title}}</title>

    @include('includes')

</head>

<body>
<div class="page-header">
    <div class="col-lg-4" style="text-align: center">
        <h3>
           پرداخت موفق
        </h3>
    </div>
    <div class="col-lg-4"><img src="resources/assets/img/logo-mehralborz.png"></div>
</div>
<div class="container">
    <div class='page-container'>
        <div class='main-content'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class="col-md-8 col-md-offset-2 well" style="background-color: white;">
                        <p>دانشجوی گرامی</p>

                        <p>{{$name}} {{$lastName}}
                            دانشجوی گرامی رشته  {{$examName}} گرایش {{$passMajorName}}</p>
<p>ورودی نیمسال سال تحصیلی 1395موسسه آموزش عال مهر اابرز، ثبت نام الکترونیکی با کد رهگیری
</p>  {{$trackCode}} 
                       
                        <p>پرداخت شهریه شما  با موفقیت انجام گردید.</p>
                        <p>خواهشمند است مدارک مورد نیاز خود را جهت تایید مدارک و اطلاعات خود را  طبق اطلاعیه اعلام شده از سوی اداره آموزش در سایت دانشگاه، در تاریخ اعلام شده تحویل نمایید.</p>

                        <p>ایمیل تایید ثبت نام شما به ایمیل اسفاده شد هنگام ثبت نام ارسال گردید</p>


                        <input type="hidden" id="trackCode" value="{{$trackCode}}">
                        <span class="glyphicon glyphicon-print" style="cursor: pointer;" onclick="prnt();"></span>

                    </div>
                </div>
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
            <p style="color: white;">        تمامي حقوق اين سايت متعلق به مؤسسه آموزش عالي مهرالبرز مي باشد.
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
    function prnt(){

        window.print();

    }

</script>
</body>
</html>

