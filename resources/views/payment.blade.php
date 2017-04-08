<html lang="en">
<head>
    <meta charset="utf-8">
    <title> {{$title}}</title>

    @include('includes')

</head>

<body style="height: 450px;">
<div class="page-header">
    <div class="col-lg-8" style="text-align: center">
        <h3>
            آغاز فرایند پرداخت شهریه ثبت نام
        </h3>
    </div>
    <div class="col-lg-4"><img src="resources/assets/img/logo-mehralborz.png"></div>
</div>
<div class='modal fade' id='creditPay'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class='modal-body'>
                <p>در صورت عدم تمایل به پرداخت شهریه به صورت یکجا لازم است مبلغ  {{$feeStatic}}  از شهریه به صورت نقدی و
                    الباقی شهریه طی دو فقره چک با مبالغ مساوی به تاریخ 30 آبان ماه و 30 آذر ماه ارائه گردد. قید نام، شماره تماس و رشته
                    قبولی در پشت چک الزامی میباشد. ارسال اصل چک ها از طریق پست به ادرس پستی موسسه تا قبل از زمان برگزاری
                    اولین جلسه حضوری الزامی میباشد. قابل ذکر است چکهای دریافتی از طریق سیستم بانکی جهت وصول اقدام خواهد
                    شد و اگر چک به هر دلیل قابل وصول نباشد به صورت اتوماتیک چک برگشت خورده و عواقب آن بر عهده دانشجو
                    میباشد.</p>
				
<span style="font-size:10; color:red;">مبلغ قابل پرداخت شامل شهریه ثابت و متغیر نیمسال اول + مبلغ پنجاه هزار ریال هزینه صدور کارت دانشجویی میباشد.</span>
                <p><b>
                        شرایط را به دقت مطالعه کردم و درخواست پرداخت شهریه ترم اول به صورت چند مرحله ای را دارم
                    </b>
                    <input type="checkbox" id="agreeCheckInfo">
                </p>

                <input type="hidden" value="{{$approvalCode}}" id="approvalCode">

            </div>
        </div>


    </div>


</div>

<div class="container" style="margin-top: 5%">
    <div class='page-container'>
        <div class='main-content'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class="col-md-8 col-md-offset-2 well" style="background-color: white;">
                        <form action="https://sep.shaparak.ir/Payment.aspx" method="post">
                            <input type='hidden' id='Amount' name='Amount' value='{{$feee}}'> <!-- مبلغ -->
                            <input type='hidden' id='MID' name='MID' value='10069057'> <!-- شماره مشتری بانک سامان -->
                            <input type='hidden' id='ResNum' name='ResNum' value='{{$approvalCode}}'> <!-- شماره فاکتور -->
                            <input type='hidden' id='RedirectURL' name='RedirectURL'
                                   value='http://mehralborz.ac.ir/registeration/acceptFullPayment?code={{$approvalCode}}&peymentType=1'> <!-- آدرس بازگشت -->
							<p>ثبت اطلاعات شما در سیستم با موفقیت انجام شد، لازم به ذکر است فرایند ثبت نام صرفا پس از مراحل پرداخت شهریه ثبت نهایی خواهد شد   </p>
							
							<div class="col-md-8 col-md-offset-2">
                                <p> سرکار خانم / جناب آقای
                                    <b>{{$name}} {{$lastName}}</b></p>

                                <p> پذیرفته شده رشته
                                    <b>{{$examName}}</b>
                                    
                                </p>

                                <p> مبلغ قابل پرداخت در نیمسال اول
                                    <b>{{$fee}}</b>
                                    ریال</p>
								<span style="font-size:10; color:red;">مبلغ قابل پرداخت شامل شهریه ثابت و متغیر نیمسال اول + مبلغ پنجاه هزار ریال هزینه صدور کارت دانشجویی میباشد.</span>
                                <input type=submit value='پرداخت شهربه کامل
' class="btn btn-primary">
                        </form>

                        <div class="form-group ">
                            <button id="showModal"
                                    class="btn btn-primary"> پرداخت بخشی از شهریه(الباقی به صورت چک)
                            </button>
                        </div>
                        </br>

                    </div>
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
</body>
</html>

