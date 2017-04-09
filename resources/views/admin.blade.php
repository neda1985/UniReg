<html lang="fa">
<head>
    <meta charset="utf-8">
    <title> مدیریت ثبت نام </title>

    @include('includes')

</head>

<body>
<div class='modal fade' id='stDetails'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class='modal-body'>
                <table class="table table-bordered">
                    <tr>
                        <td>نام</td>
                        <td id="name"></td>
                    </tr>
                    <tr>
                        <td>نام خوانوادگی</td>
                        <td id="lastName"></td>
                    </tr>
                    <tr>
                        <td>ایمیل</td>
                        <td id="email"></td>
                    </tr>
                    <tr>
                        <td>موبایل</td>
                        <td id="mobile"></td>
                    </tr>
                    <tr>
                        <td>وضعیت تاهل</td>
                        <td id="marital"></td>
                    </tr>
                    <tr>
                        <td>تاریخ تولد</td>
                        <td id="birthdate"></td>
                    </tr>
                    <tr>
                        <td>شهر تولد</td>
                        <td id="birthCity"></td>
                    </tr>
                    <tr>
                        <td>وظعیت نظام وظیفه</td>
                        <td id="military"></td>
                    </tr>
                    <tr>
                        <td>عکس</td>
                        <td id="imgPersonal"></td>
                    </tr>
                    <tr>
                        <td>پایان خدمت</td>
                        <td id="militaryImg"></td>
                    </tr>
                    <tr>
                        <td>تصویر شناسنامه</td>
                        <td id="idImg"></td>
                    </tr>
                    <tr>
                        <td>تصویر کارت ملی</td>
                        <td id="idCardImg"></td>
                    </tr>
                    <tr>
                        <td>شغل</td>
                        <td id="job"></td>
                    </tr>
                    <tr>
                        <td>محل کار</td>
                        <td id="jobPlace"></td>
                    </tr>
                    <tr>
                        <td>آدرس</td>
                        <td id="addreas"></td>
                    </tr>
                    <tr>
                        <td>تویر مدرک لیسانی</td>
                        <td id="uniDoc"></td>
                    </tr>
                    <tr>
                        <td>تصویر تاییدیه</td>
                        <td id="acceptenceDoc"></td>
                    </tr>
                    <tr>
                        <td>تصویر فوق ذیپلم</td>
                        <td id="juniorDoc"></td>
                    </tr>
                    <tr>
                        <td>تصویر ریز نمرات</td>
                        <td id="juniorAcceptence"></td>
                    </tr>
                    <tr>
                        <td>تصویر کارت جانبازی</td>
                        <td id="wariorCard"></td>
                    </tr>
                    <tr>
                        <td>تصویر معرفی نامه بنیاد شهید</td>
                        <td id="wariorIntro"></td>
                    </tr>
                </table>


            </div>
        </div>


    </div>


</div>

<div class="page-header">
    <h3>ادمین گرامی خوش آمدید</h3>
</div>
<div class="container-fluid">
    <div class="col-md-12">
        <div class="alert alert-success">
            <strong>Success!</strong> Indicates a successful or positive action.
        </div>
        <div class="alert alert-danger">
            <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
        </div>
    </div>
    <div class="col-md-3 sidebar">
        <ul class="menu">
            <li {{$tab1}}>
                <a href="#" onclick="displayAdminContent(7,1)">
                    اطلاعات دانشجویان ثبت نام کرده </a>
            </li>
            <li {{$tab6}}>
                <a href="admin6">
                    اطلاعات پرداخت و ثبت نام
                </a>
            </li>
            <li {{$tab5}} onclick="displayAdminContent(5,1)">
                <a href="#">
                    گزارش گیری وضعیت ثبت نام
                </a>
            </li>
            <li {{$tab4}} onclick="displayAdminContent(4,1)">
                <a href="#">گزارش گیری وضعیت مالی ثبت نام
                </a></li>
            <li {{$tab3}}>
                <a href="admin3">اطلاعات ثبت نام کنندگان نهایی
                </a></li>
            <li {{$tab2}} onclick="displayAdminContent(2,1)">
                <a href="#">
                    آپلود لیست قبول شده ها
                </a>
            </li>
            <li {{$tab1}}>
                <a href="#" onclick="displayAdminContent(1,1)">
                    لیست دوره های آموزشی
                </a>
            </li>
            <li {{$tab7}}>
                <a href="#" onclick="displayAdminContent(1,1)">
                    کاربران
                </a>
            </li>
            <li {{$tab8}}>
                <a href="#" onclick="displayAdminContent(1,1)">
                    تنظیمات ظاهری
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-9">
        <div id="content">
            <table id="event-table" class="table table-striped table-responsive table-hover">

                <tbody>
                </tbody>
            </table>

            {{--<table id="event-table2" class="table table-striped table-responsive table-hover">--}}
                {{--<thead style="display: none">--}}
                {{--<tr>--}}
                    {{--<th>نام</th>--}}
                    {{--<th>نام خوانوادگی</th>--}}
                    {{--<th>رشته</th>--}}
                    {{--<th>کد رهگیری</th>--}}
                    {{--<th>نحوه پرداخت</th>--}}
                    {{--<th> جزئیات</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--</tbody>--}}
            {{--</table>--}}
        </div>
    </div>
</div>

</body>

<script src="resources/assets/js/bootstrap.min.js"></script>
<script src="resources/assets/js/datatables/js/jquery.dataTables.js"></script>
<script src="resources/assets/js/datatables/dataTables.bootstrap.js"></script>

</html>

