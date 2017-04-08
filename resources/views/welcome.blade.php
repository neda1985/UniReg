<html lang="en">
<head>
    <meta charset="utf-8">
    <title> سیستم ثبت نام الکترونیکی مهرالبرز</title>

    @include('includes')

</head>

<body style="height: 500px;">

<div class="page-header">
       <div class="col-lg-4"></div>

    <div class="col-lg-4" >
		<h3>    ورود به سامانه ثبت نام پذیرفته شدگان ورودی جدید‬</h3>
    </div>
    <div class="col-lg-4"><img src="resources/assets/img/logo-mehralborz.png"></div>
</div>
<div class="container" style="margin-top: 10%">
    <div class='page-container'>
        <div class='main-content'>
            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 well">
                        @if (isset($idNumber) && !isset($approvalCode))
                            <div class="col-lg-12">
                                <p>
کاربری با این مشخصات در لیست پذیرفته شدگان سازمان سنجش وجود ندارد

                                </p>
                                <p>شماره شناسنامه:
                                    {{$idNumber}}</p>

                                <p>شماره ملی:
                                    {{$idCode}}</p>
                            </div>
                        @endif
						        @if (isset($approvalCode))
                            <div class="col-lg-12">
                                <p>
کاربر گرامی  ثبت نام شما در سیستم با موفقیت انجام شده است
									اطلاعات شما به شرح زیر میباشد:
                                </p>
                                <p>شماره شناسنامه:
                                    {{$idNumber}}</p>

                                <p>شماره ملی:
                                    {{$idCode}}</p>
								<p>کد رهگیری:
								{{$approvalCode}}</p>
                            </div>
                        @endif
                        <form action="checkStudent" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control" tabindex="1" name="id_code" id="id_code" placeholder=" شماره ملی">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" tabindex="2" name="id_number" id="id_number"
                                       placeholder="شماره شناسنامه">
                            </div>
                            <button class="btn btn-primary ">ورود به سیستم</button>
                        </form>		
                </div>
					
                    <div class="col-md-6 col-md-offset-3 ">
    <a class="btn btn-warning col-md-12" href="pdfTutorial"> آموزش سیستم ثبت نام</a>
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

                    <p style="direction: rtl; text-align: right;">ایمیل پشتیبانی: register@mehralborz.ac.ir </p></div>

            </div>


        </div>
        <div class="row" style="text-align: center">
            <p style="color: white;">        تمامي حقوق اين سايت متعلق به مؤسسه آموزش عالي مهرالبرز مي باشد.
            </p>
        </div>
    </div>
</div>

</body>
<script>
    function t() {

        window.location = '/public';
    }
</script>
{{--<script>--}}
{{--$('#file-elemt-tag').createUploadInput('file-element', '#selected-file-name', '#file-not-supported-msg', $('#type-id-file').val());--}}
{{--</script>--}}

</html>

