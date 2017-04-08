<html lang="en">
<head>
    <meta charset="utf-8">
    <title> سیستم ثبت نام الکترونیکی مهرالبرز</title>

    @include('includes')

</head>

<body>

<div class="page-header">
    <div class="col-lg-4"><img src="resources/assets/img/logo-mehralborz.png"></div>
    <div class="col-lg-4" style="text-align: center"><h3>صفحه ورود به پنل ادمین</h3>
    </div>
    <div class="col-lg-4"><img src="resources/assets/img/UNESCO.png"></div>
</div>

<div class="container">
    <div class='page-container'>
        <div class='main-content'>
        <div class="col-md-8 col-md-offset-2">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('auth/login') }}">
                        <div class="form-group">
                            <label for="email" >آدرس ایمیل</label>

                                <input id="email" type="email" class="form-control" name="email" >



                        </div>

                        <div class="form-group">
                            <label for="password"">رمز عبور</label>


                                <input id="password" type="password" class="form-control" name="password">



                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> ورورد
                                </button>

                            </div>
                        </div>
                    </form>

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

                    <p style="direction: rtl; text-align: right;">فاكس:88001270-021 </p></div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 mehralborz-footers">
                <span>با مهرالبرز</span>


                <div class="custom">
                    <p>
                        <a style="color: white;" href="http://mehralborz.ac.ir/index.php/2015-05-09-06-14-39/%D8%B9%D8%B6%D9%88%DB%8C%D8%AA-%D8%AF%D8%B1-%D8%A7%D8%AA%D8%AD%D8%A7%D8%AF%DB%8C%D9%87-%D9%87%D8%A7"
                           target="_blank">عضویت در اتحادیه ها</a></p>

                    <p>
                        <a style="color: white;" href="http://mehralborz.ac.ir/index.php/2015-05-09-06-13-09/%D9%BE%DA%98%D9%88%D9%87%D8%B4/%D8%B3%D8%A7%D8%B2%D9%85%D8%A7%D9%86-%D9%87%D8%A7-%D9%88-%D9%85%D9%88%D8%B3%D8%B3%D8%A7%D8%AA-%D9%87%D9%85%DA%A9%D8%A7%D8%B1/%D8%AF%D8%A7%D9%86%D8%B4%DA%AF%D8%A7%D9%87-%D9%87%D8%A7%DB%8C-%D9%87%D9%85%DA%A9%D8%A7%D8%B1"
                           target="_blank">دانشگاه های همکار</a></p>

                    <p>
                        <a style="color: white;" href="http://mehralborz.ac.ir/index.php/2015-05-09-06-13-09/%D9%BE%DA%98%D9%88%D9%87%D8%B4/%D8%B3%D8%A7%D8%B2%D9%85%D8%A7%D9%86-%D9%87%D8%A7-%D9%88-%D9%85%D9%88%D8%B3%D8%B3%D8%A7%D8%AA-%D9%87%D9%85%DA%A9%D8%A7%D8%B1/%D9%85%D8%B4%D8%AA%D8%B1%DB%8C%D8%A7%D9%86-%D8%B3%D8%A7%D8%B2%D9%85%D8%A7%D9%86%DB%8C"
                           target="_blank">مشتریان سازمانی</a></p>
                </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 left-footers">
                <span>پیوندها</span>


                <div class="custom">
                    <p>
                        پست الکترونیکی واحد ها</p>

                    <p>
                        <a style="color: white;" href="http://www.muaa.ir/" target="_blank">کانون دانش آموختگان مهرالبرز</a></p>

                    <p>
                        <a style="color: white;" href="http://www.msrt.ir/fa/Lists/Corp/DispForm.aspx?ID=752&amp;ContentTypeId=0x0100F92D6F0F785A0D48A2AA73A5410FD23501007421478A8D56F04B8945DAAE95558E22"
                           target="_blank">وزارت علوم، تحیقات و فناوری</a></p>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 center-footers">
                <span>نشانی دانشگاه</span>


                <div class="custom">
                    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6" style="padding:0">
                        <a href="https://www.google.com/maps/place/%D9%85%D9%88%D8%B3%D8%B3%D9%87+%D8%A2%D9%85%D9%88%D8%B2%D8%B4+%D8%B9%D8%A7%D9%84%DB%8C+%D9%85%D9%87%D8%B1+%D8%A7%D9%84%D8%A8%D8%B1%D8%B2%E2%80%AD/@35.7213228,51.3883569,17z/data=!3m1!4b1!4m2!3m1!1s0x3f8e012995c13497:0xf91894cdd53848a0?hl=en"
                           target="_blank"><img alt="" class="img-responsive cke-resize" height="143" src="/images/map.jpg"
                                                style="float: right;" width="249"/></a></div>
                    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
                        تهران- خیابان کارگرشمالی- تقاطع جلال آل احمد- خیابان شکراله پلاک109 -کد پستی 1413684491
                    </div>
                    <div id="ckimgrsz" style="left: 8px; top: 8px;">
                        <div class="preview">
                            &nbsp;</div>
                    </div>
                </div>


            </div>

        </div>
        <div class="row" style="text-align: center">
            <p style="color: white;">        تمامي حقوق اين سايت متعلق به مؤسسه آموزش عالي مهرالبرز مي باشد.
            </p>
        </div>
    </div>
</div>
</body>


</html>
