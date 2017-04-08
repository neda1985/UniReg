<html lang="en">
<head>
    <meta charset="utf-8">
    <title>پرداخت شهریه به صورت چند مرحله ای</title>

    @include('includes')

</head>

<body style="height: 500px;">
<div class="page-header">
    <div class="col-lg-8" >
<h3>پرداخت شهریه بصورت چند مرحله ای</h3>

    </div>
    <div class="col-lg-4"><img src="resources/assets/img/logo-mehralborz.png"></div>
</div>

<div class="container">
    <div class='page-container'>
        <div class='main-content well'>
            <input type="hidden" id="approvalCodecheck" value="{{$approvalCode}}">

            <div class="row ">
                <p>چک اول</p>

                <div class="col-md-4">

                    <div class="form-group">
                        <label class="control-label" for="firstCHAmount">مبلغ چک</label>
                        <input class="form-control" name="firstCHAmount" value="{{$staticFee}} ریال"
                               disabled id="firstCHAmount"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="firstCHSerialNumber">شماره سریال چک</label>
                        <input class="form-control  checkPeymentfield" tabindex="1" name="firstCHSerialNumber" id="firstCHSerialNumber"/>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="firstCHDate">تاریخ سر رسید:</label>
                        <input class="form-control" name="firstCHDate" id="firstCHDate" disabled value="1395-10-03"/>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label class="control-label" for="firstCHBankCode">کد بانک </label>
                        <input class="form-control checkPeymentfield" tabindex="2" name="firstCHBankCode"
                               id="firstCHBankCode"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="firstCHBankName">نام بانک </label>
                        <input class="form-control checkPeymentfield" name="firstCHBankName" tabindex="3" id="firstCHBankName"/>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="firstCHAccountNumber">شماره حساب چک</label>
                        <input class="form-control checkPeymentfield" name="firstCHAccountNumber" tabindex="4" id="firstCHAccountNumber"/>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered table-striped" id="example-dropzone-filetable5"
                           style="text-align: center;">
                        <thead>
                        <tr>
                            <th width="40%" style="text-align: center;">عنوان فایل</th>
                            <th width="20%" style="text-align: center;">میزان بارگذاری</th>
                            <th width="20%" style="text-align: center;">سایز فایل</th>
                            <th width="20%" style="text-align: center;">وضعیت</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>

                <div class="col-md-4">
                    <table style="text-align: center;">
                        <tr>
                            <td style="width:20%;">
                                <input type="text" id="imageformat-firstCHImg" style="display:none;"/>
                                <input type="hidden" id="firstCHImg">

                                <div id="firstCHImgDropzone" class="droppable-area checkPeymentfield">
                                    پیوست تصویر چک
                                </div>
                            </td>

                        </tr>
                    </table>
                </div>

            </div>

            <div class="row ">
                <p>چک دوم</p>

                <div class="col-md-4">

                    <div class="form-group">
                        <label class="control-label" for="secondCHAmount">مبلغ چک</label>
                        <input class="form-control" name="secondCHAmount" value="{{$staticFee}} ریال"
                               disabled   id="secondCHAmount"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="secondCHSerialNumber">شماره سریال چک</label>
                        <input class="form-control checkPeymentfield" tabindex="5" name="secondCHSerialNumber" id="secondCHSerialNumber"/>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="secondCHDate">تاریخ سر رسید:</label>
                        <input class="form-control" name="secondCHDate" disabled value="1395-11-03" id="secondCHDate"/>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label class="control-label" for="secondCHBankCode">کد بانک </label>
                        <input class="form-control checkPeymentfield" tabindex="6" name="secondCHBankCode"
                               id="secondCHBankCode"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="secondCHBankName">نام بانک </label>
                        <input class="form-control checkPeymentfield" tabindex="7" name="secondCHBankName" id="secondCHBankName"/>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="secondCHAccountNumber">شماره حساب چک</label>
                        <input class="form-control checkPeymentfield" tabindex="8" name="secondCHAccountNumber" id="secondCHAccountNumber"/>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered table-striped" id="example-dropzone-filetable6"
                           style="text-align: center;">
                        <thead>
                        <tr>
                            <th width="40%" style="text-align: center;">عنوان فایل</th>
                            <th width="20%" style="text-align: center;">میزان بارگذاری</th>
                            <th width="20%" style="text-align: center;">سایز فایل</th>
                            <th width="20%" style="text-align: center;">وضعیت</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>

                <div class="col-md-4">
                    <table style="text-align: center;">
                        <tr>
                            <td style="width:20%;">
                                <input type="text" id="imageformat-postDoce" style="display:none;"/>
                                <input type="hidden" id="postDoce">

                                <div id="postDoceDropzone" class="droppable-area checkPeymentfield">
                                    پیوست تصویر چک
                                </div>
                            </td>
                            <td style="width:20%;">
                                <input type="text" id="imageformat-secondCHImg" style="display:none;"/>
                                <input type="hidden" id="secondCHImg">

                                <div id="secondCHImgDropzone" class="droppable-area checkPeymentfield">
                                    تصویر رسید ارسال پستی مبنی بر ارسال اصل چک ها
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>


            <div class="row">
                <p>کلیه اطلاعات درج شده در خصوص چک های پرداخت شهریه را با دقت کامل تکمیل کرده ام و صحت آنرا تایید می
                    نمایم و ملزم به انجام کلیه تعهدات مربوط به آن می باشم
                    <input type="checkbox" id="checkAgreementRegistering">
                </p>

                <form action="https://sep.shaparak.ir/Payment.aspx" method="post">
                    <input type='hidden' id='Amount' name='Amount' value='{{$peyamount}}'> <!-- مبلغ -->
                    <input type='hidden' id='MID' name='MID' value='10069057'> <!-- شماره مشتری بانک سامان -->
                    <input type='hidden' id='ResNum' name='ResNum' value='1'> <!-- شماره فاکتور -->
                   <input type='hidden' id='RedirectURL' name='RedirectURL'
                                   value='http://mehralborz.ac.ir/registeration/acceptFullPayment?code={{$approvalCode}}&peymentType=2'>
                    <!-- آدرس بازگشت -->
                    <input class="btn btn-primary" value="                        ثبت اطلاعات و ورود به مرحله پرداخت شهریه ثابت
" type="submit" id="payStaticFee" disabled>
                </form>
                <div class="form-group">

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

