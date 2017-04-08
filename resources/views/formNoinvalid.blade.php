<html lang="en">
<head>
    <meta charset="utf-8">
    <title> {{$title}}</title>

    @include('includes')

</head>

<body style="height: 500px">

<div class="page-header">
    <div class="col-lg-4"></div>

    <div class="col-lg-4" style="text-align: center">
        <h3>
            ثبت نام
        </h3>
    </div>
    <div class="col-lg-4"><img src="resources/assets/img/logo-mehralborz.png"></div>
</div>
<div class="container">
    <div class='page-container'>
        <div class='main-content'>

            <div id='rootwizard' class='form-wizard' style='direction:rtl'
                    >

                <ul class='tabs'>
                    <li id='tab1-li'>
                        <a id='tab2'>
                            اطلاعات فردی
                            <span>1</span>
                        </a>
                    </li>
                    <li id='tab2-li'>
                        <a id='tab3'>
                            اطلاعات تماس
                            <span>2</span>
                        </a>
                    </li>
                    <li id='tab3-li'>
                        <a id='tab4'>
                            اطلاعات تحصیلی
                            <span>3</span>
                        </a>
                    </li>
                    <li id='tab4-li'>
                        <a id='tab5'>
                            وام دانشجویی
                            <span>4</span>
                        </a>
                    </li>
                </ul>

                <div class='progress-indicator'>
                    <span style='float: right;'></span>
                </div>

                <div class='tab-content no-margin'>
                    <div class="tab-pane with-bg active" id="fwv-1">
                        <div class="row">
                            <input type="hidden" id="approvalCode" value="{{$approvalCode}}">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="father">نام پدر:</label>

                                    <input class="form-control" name="fathername" value="{{$fathername}}"
                                           id="fathername" disabled/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="family">نام خانوادگی:</label>
                                    <input class="form-control" name="lname" value="{{$lastName}}" id="lname" disabled/>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="name">نام:</label>
                                    <input class="form-control" name="fname" id="fname" value="{{$name}}" disabled/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="sex">جنسیت</label>
                                    <input class="form-control" name="sex" id="sex" value="{{$sex}}" disabled/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="mellicode">کد ملی:</label>
                                    <input class="form-control" name="nationalcode" value="{{$idCode}}"
                                           id="nationalcode" disabled
                                            />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="shenasnamesh">شماره شناسنامه:</label>
                                    <input class="form-control" name="identifiernumber" value="{{$idNumber}}"
                                           id="identifiernumber" disabled
                                            />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>  <label class="control-label" for="passportCity"> شهر صدور شناسنامه </label>
                                    <input tabindex="4" class="form-control" name="passportCity" id="passportCity"
                                           onchange="$(this).css('border-color','')"  data-validate="required"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>  <label class="control-label" for="passporProvince">استان صدور شناسنامه</label>
                                    <select tabindex="3" name="passporProvince" class="form-control" data-validate="required"
                                            id="passporProvince"
                                            onchange="$(this).css('border-color','')">
                                        <option value=" "></option>
                                        <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                        <option value="آذربایجان غربی">آذربایجان غربی</option>
                                        <option value="اردبیل">اردبیل</option>
                                        <option value="اصفهان">اصفهان</option>
                                        <option value="البرز">البرز</option>
                                        <option value="ایلام">ایلام</option>
                                        <option value="بوشهر">بوشهر</option>
                                        <option value="تهران">تهران</option>
                                        <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                                        <option value="خراسان جنوبی">خراسان جنوبی</option>
                                        <option value="خراسان رضوی">خراسان رضوی</option>
                                        <option value="خراسان شمالی">خراسان شمالی</option>
                                        <option value="خوزستان">خوزستان</option>
                                        <option value="زنجان">زنجان</option>
                                        <option value="سمنان">سمنان</option>
                                        <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                                        <option value="فارس">فارس</option>
                                        <option value="قزوین">قزوین</option>
                                        <option value="قم">قم</option>
                                        <option value="کردستان">کردستان</option>
                                        <option value="کرمان">کرمان</option>
                                        <option value="کرمانشاه">کرمانشاه</option>
                                        <option value="کهگیلویه و بویراحمد">کهگیلویه و بویراحمد</option>
                                        <option value="گلستان">گلستان</option>
                                        <option value="گیلان">گیلان</option>
                                        <option value="لرستان">لرستان</option>
                                        <option value="مازندران">مازندران</option>
                                        <option value="1">مرکزی</option>
                                        <option value="مرکزی">هرمزگان</option>
                                        <option value="همدان">همدان</option>
                                        <option value="یزد">یزد</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>   <label class="control-label" for="birthCity">شهر محل تولد</label>
                                    <input tabindex="2" class="form-control" name="birthCity" id="birthCity"
                                           onchange="$(this).css('border-color','')"   data-validate="required"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>   <label class="control-label" for="birthProvince"> استان محل تولد</label>
                                    <select name="birthProvince" tabindex="1" class="form-control" data-validate="required"
                                            id="birthProvince"
                                            onchange="$(this).css('border-color','')">
                                        <option value=" "></option>
                                        <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                        <option value="آذربایجان غربی">آذربایجان غربی</option>
                                        <option value="اردبیل">اردبیل</option>
                                        <option value="اصفهان">اصفهان</option>
                                        <option value="البرز">البرز</option>
                                        <option value="ایلام">ایلام</option>
                                        <option value="بوشهر">بوشهر</option>
                                        <option value="تهران">تهران</option>
                                        <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                                        <option value="خراسان جنوبی">خراسان جنوبی</option>
                                        <option value="خراسان رضوی">خراسان رضوی</option>
                                        <option value="خراسان شمالی">خراسان شمالی</option>
                                        <option value="خوزستان">خوزستان</option>
                                        <option value="زنجان">زنجان</option>
                                        <option value="سمنان">سمنان</option>
                                        <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                                        <option value="فارس">فارس</option>
                                        <option value="قزوین">قزوین</option>
                                        <option value="قم">قم</option>
                                        <option value="کردستان">کردستان</option>
                                        <option value="کرمان">کرمان</option>
                                        <option value="کرمانشاه">کرمانشاه</option>
                                        <option value="کهگیلویه و بویراحمد">کهگیلویه و بویراحمد</option>
                                        <option value="گلستان">گلستان</option>
                                        <option value="گیلان">گیلان</option>
                                        <option value="لرستان">لرستان</option>
                                        <option value="مازندران">مازندران</option>
                                        <option value="1">مرکزی</option>
                                        <option value="مرکزی">هرمزگان</option>
                                        <option value="همدان">همدان</option>
                                        <option value="یزد">یزد</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>    <label class="control-label" for="birthdate" id="birthdayYearLabel"
                                                                                                                               onchange="$(this).css('border-color','')">
                                        سال تولد:</label>
                                    <select tabindex="8" class="form-control" onchange="$(this).css('border-color','')"
                                            data-validate="required" id="birthdayYear">
                                        <option value=" "></option>
                                        @for ($i = 10; $i < 81; $i++)
                                            <option value='{{ $i }}'>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>    <label class="control-label" for="birthdayMonth"
                                                                                                                               onchange="$(this).css('border-color','')">ماه تولد:</label>
                                    <select tabindex="7" class="form-control" onchange="$(this).css('border-color','')"
                                            data-validate="required" id="birthdayMonth">
                                        <option value=" "></option>
                                        @for ($i = 1; $i < 13; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>     <label class="control-label" id="birthdayDayLabel" for="birthdayDay"
                                            >روز تولد:</label>
                                    <select tabindex="6" onchange="$(this).css('border-color','')" class="form-control"
                                            data-validate="required"
                                            id="birthdayDay">
                                        <option value=" "></option>

                                        @for ($i = 1; $i < 32; $i++)
                                            <option value='{{ $i }}'>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>     <label class="control-label" for="marital"
                                            >

                                        وضعیت تاهل                                    </label><select tabindex="5" id="marital"
                                                                                                      class="form-control"
                                                                                                      data-validate="required"
                                                                                                      onchange="$(this).css('border-color','')">
                                        <option value=" "></option>
                                        <option value="مجرد">مجرد</option>
                                        <option value='متاهل'>متاهل</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <table style="text-align: center;">
                                    <tr>
                                        <td style="width:20%;">
                                            <input type="text" id="imageformat-aks" style="display:none;"/>
                                            <input type="hidden" id="aks">

                                            <div  id="aksDropzone" class="droppable-area">
                                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                                تصویر عکس پرسنلی
                                            </div>
                                        </td>

                                        <td style="width:20%;">
                                            <input type="text" id="imageformat-cartmeli" style="display:none;"/>
                                            <input type="hidden" id="cartmeli">

                                            <div id="cartmeliDropzone" class="droppable-area">
                                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                                تصویر کارت ملی
                                            </div>
                                        </td>
                                        <td style="width:20%;">
                                            <input id="imageformat-shenasnameh" type="text" style="display:none;"/>
                                            <input type="hidden" id="shenasnameh">

                                            <div id="shenasnamehDropzone" class="droppable-area">
                                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                                تصویر کلیه صفحات شناسنامه
                                            </div>
                                        </td>
                                        <td style="width:20%;">
                                            <input id="imageformat-military" type="text" style="display:none;"/>
                                            <input type="hidden" id="military">

                                            <div {{$disable}} id="militaryDropzone" class="droppable-area">
                                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                                کارت پایان خدمت یا گواهی اشتغال به خدمت ارگان مربوطه و موافقت
                                                بالاترین مقام اجرایی
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div {{$disable}} class="col-md-3">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>     <label class="control-label" for="militaryStatus"
                                            >

                                        وضعیت پایان خدمت (ویژه آقایان)
                                    </label>
                                    <select tabindex="9" id="militaryStatus"
                                            class="form-control"
                                            data-validate="required"
                                            onchange="$(this).css('border-color','')">
                                        <option value="-"></option>
                                        <option value="دارد">دارد</option>
                                        <option value='ندارد'>ندارد</option>
                                        <option value='مشمول خدمت'>مشمول خدمت</option>
                                        <option value='استخدام ارگانهای نظامی'>استخدام ارگانهای نظامی</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped" id="example-dropzone-filetable2"
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
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>   <label class="control-label" for="jobRelataed"
                                        >

                                    آیا شغلتان مرتبط با رشته تحصیلی تان است؟
                                </label>
                                <select tabindex="12" id="jobRelataed"
                                        class="form-control"
                                        data-validate="required"
                                        onchange="$(this).css('border-color','')">
                                    <option value=" "></option>
                                    <option value=" بله">بله</option>
                                    <option value='خیر '>خیر</option>
                                </select>

                            </div>
                            <div class="col-md-4">
                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>       <label class="control-label" for="birthdate"
                                        >

                                    محل اشتغال </label>
                                <input tabindex="11" id="jobPlace" type="text" class="form-control" data-validate="required"
                                       onchange="$(this).css('border-color','')"/>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>       <label class="control-label" for="job"
                                            >

                                        وضعیت اشتغال
                                    </label>
                                    <select tabindex="10" id="job"
                                            class="form-control"
                                            data-validate="required"
                                            onchange="$(this).css('border-color','')">
                                        <option value=" "></option>
                                        <option value="مدیرعامل ">مدیرعامل</option>
                                        <option value='مدیر '>مدیر</option>
                                        <option value='کارشناس ارشد  '> کارشناس ارشد</option>
                                        <option value='کارشناس   '>کارشناس</option>
                                        <option value='سایر'>سایر</option>
                                        <option value='شغل'> شغل</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane with-bg" id="fwv-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                    <label class="control-label" for="postalcode">کد پستی:</label>
                                    <span style="font-size:10; color: #24447F;" >(1935733513)</span>
                                    <input tabindex="2" class="form-control" name="postalcode" id="postalcode"
                                           value="{{$postalCode}}"
                                            />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="mobile">تلفن همراه:</label>
                                    <input  class="form-control" name="mobilenumber" id="mobilenumber"
                                            value="{{$mobile}}"
                                            disabled

                                            /></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                    <label class="control-label" for="tel">تلفن ثابت(همراه با پیش شماره):</label>
                                    <span style="font-size:10; color: #24447F;" >(02144345678)</span>
                                    <input class="form-control" name="phonenumber" id="phonenumber"
                                           tabindex="1" value="{{$phone}}" onchange="$(this).css('border-color','')"
                                            />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="residencyVillage"> روستای محل سکونت</label>
                                    <input type="text" tabindex="5" name="residencyVillage" class="form-control" id="residencyVillage"/>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>   <label class="control-label" for="residencyCity"> شهر محل سکونت</label>
                                    <input type="text" tabindex="4"name="residencyCity" class="form-control" value="{{$city}}"
                                           id="residencyCity"/>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span> <label class="control-label" for="residencyProvince"> استان محل سکونت</label>
                                    <select tabindex="3" name="residencyProvince" class="form-control" data-validate="required"
                                            id="residencyProvince"
                                            onchange="$(this).css('border-color','')">
                                        <option value=" {{$province}}">{{$province}}</option>
                                        <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                        <option value="آذربایجان غربی">آذربایجان غربی</option>
                                        <option value="اردبیل">اردبیل</option>
                                        <option value="اصفهان">اصفهان</option>
                                        <option value="البرز">البرز</option>
                                        <option value="ایلام">ایلام</option>
                                        <option value="بوشهر">بوشهر</option>
                                        <option value="تهران">تهران</option>
                                        <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                                        <option value="خراسان جنوبی">خراسان جنوبی</option>
                                        <option value="خراسان رضوی">خراسان رضوی</option>
                                        <option value="خراسان شمالی">خراسان شمالی</option>
                                        <option value="خوزستان">خوزستان</option>
                                        <option value="زنجان">زنجان</option>
                                        <option value="سمنان">سمنان</option>
                                        <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                                        <option value="فارس">فارس</option>
                                        <option value="قزوین">قزوین</option>
                                        <option value="قم">قم</option>
                                        <option value="کردستان">کردستان</option>
                                        <option value="کرمان">کرمان</option>
                                        <option value="کرمانشاه">کرمانشاه</option>
                                        <option value="کهگیلویه و بویراحمد">کهگیلویه و بویراحمد</option>
                                        <option value="گلستان">گلستان</option>
                                        <option value="گیلان">گیلان</option>
                                        <option value="لرستان">لرستان</option>
                                        <option value="مازندران">مازندران</option>
                                        <option value="1">مرکزی</option>
                                        <option value="مرکزی">هرمزگان</option>
                                        <option value="همدان">همدان</option>
                                        <option value="یزد">یزد</option>

                                    </select>


                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>   <label class="control-label" for="address">نشانی محل سکونت:</label>
                                    <input tabindex="7" class="form-control" name="address" id="address" data-validate="required"
                                           onchange="$(this).css('border-color','')"
                                            />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                    <label class="control-label" for="address">پست الکترونیکی</label>
                                    <input tabindex="6"type="text" class="form-control" name="email" id="email" placeholder="پست الکترونیک " value="{{$email}}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane with-bg" id="fwv-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="totallScoreInmajor"> رتبه در گرایش قبولی</label>
                                    <input class="form-control" value="{{$totallScoreInmajor}}"
                                           name="totallScoreInmajor" id="educationalMajorCode"
                                           disabled/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="totallScore"> رتبه کل در رشته امتحانی </label>
                                    <input class="form-control" value="{{$totallScore}}" name="totallScore"
                                           id="totallScore" disabled/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="passPriority"> اولویت قبولی</label>
                                    <input class="form-control" value="{{$passPriority}}" name="passPriority"
                                           id="passPriority" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p>
                                اطلاعات مقطع کارشناسی
                            </p>

                            <div class="col-md-4">
                                <label class="control-label" for="finishMajor"
                                       onchange="$(this).css('border-color','')">
                                    رشته تحصیلی
                                </label>
                                <input id="finishMajor" class="form-control" value="{{$finishMajor}}" disabled/>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="finishedUniName">
                                    دانشگاه محل تحصیل
                                </label>
                                <input id="finishedUniName" value="{{$finishedUniName}}" class="form-control" disabled/>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                <label class="control-label" for="cretificationType"
                                       onchange="$(this).css('border-color','')">

                                    نوع مدرک </label>
                                <select tabindex="1" id="cretificationType"
                                        class="form-control"
                                        data-validate="required"
                                        onchange="$(this).css('border-color','')">
                                    <option value=""></option>
                                    <option value=" کارشناسی پیوسته">کارشناسی پیوسته</option>
                                    <option value='کارشناسی ناپیوسته '>کارشناسی ناپیوسته</option>
                                </select>

                            </div>

                            <div class="col-md-2">
                                <label class="control-label" for="finishDate">
                                    زمان اخذ مدرک
                                </label>
                                <input id="finishDate" class="form-control" type="text" value="{{$finishDate}}"
                                       disabled/>
                                                               <span style="font:12;color:#24447F;" >(توضیح اینکه در فرم سنجش ماه و سال تفکیک شده نیست به طور مثال 9306 یعنی شهریور 93)
                                    </span>

                            </div>
                            <div class="col-md-2">
                                <label class="control-label" for="average"> معدل
                                </label>
                                <input id="average" value="{{$average}}" class="form-control" type="text" disabled/>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>
                                <label class="control-label" for="eduType">نوع دوره</label>
                                <select tabindex="3" id="eduType"
                                        class="form-control"
                                        data-validate="required"
                                        onchange="$(this).css('border-color','')">
                                    <option value="-"></option>
                                    <option value=" روزانه   "> روزانه</option>
                                    <option value='شبانه '> شبانه</option>
                                    <option value='مجازی '> مجازی</option>
                                    <option value='سایر'> سایر</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                <label class="control-label" for="uniType">
                                    نوع دانشگاه </label>
                                <select  tabindex="2" id="uniType"
                                         class="form-control"
                                         data-validate="required"
                                         onchange="$(this).css('border-color','')">
                                    <option value="-"></option>
                                    <option value=" سراسری  "> سراسری</option>
                                    <option value=' آزاد اسلامی  '> آزاد اسلامی</option>
                                    <option value=' پیام نور   '> پیام نور</option>
                                    <option value=' غیرانتفاعی   '> غیرانتفاعی</option>
                                    <option value='  علمی-کاربردی   '>علمی-کاربردی</option>
                                    <option value=' غیره   '> غیره</option>
                                </select>

                            </div>

                        </div>
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-md-6">
                                <table class="table table-bordered table-striped" id="example-dropzone-filetable"
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
                            <div class="col-md-6">
                                <table style="text-align: center;">
                                    <tr>
                                        <td style="width:20%;">
                                            <input type="text" id="imageformat-uniDoc" style="display:none;"/>
                                            <input type="hidden" id="uniDoc">

                                            <div id="uniDocDropzone" class="droppable-area">
                                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>


                                                تصویر مدرک تحصیلی یا گواهی موقت مقطع کارشناسی

                                            </div>
                                            <p style="font:12;color:#24447F;">
                                                در صورت آماده نبودن گواهی موقت، فرم معدل فارغ التحصیلی(تایید شده ) و یاگواهی مبنی بر اعلام فارغ التحصیلی از دانشگاه مربوطه
                                            </p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%;">
                                            <input type="text" id="imageformat-acceptence" style="display:none;"/>
                                            <input type="hidden" id="acceptence">

                                            <div id="acceptenceDropzone" class="droppable-area">
                                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                                تصویر فرم معدل

                                            </div>
                                            <p style="font:12;color:#24447F;">

                                                فرم تایید شده مخصوص میانگین تعداد واحدهای گذرانده برای دانشجویان سال اخر دوره کارشناسی(فرم مندرج در دفترچه شماره یک سازمان سنجش)
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="ifJunior" style="display: none;">
                            <div class="row">
                                <p>
                                    اطلاعات مقطع کاردانی
                                </p>



                                <div class="col-md-3">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                    <label class="control-label" for="majorJoniorGerayesh">
                                        گرایش </label>
                                    <input tabindex="1" id="majorJoniorGerayesh" class="form-control"/>
                                </div>

                                <div class="col-md-3">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                    <label class="control-label" for="majorJonior">
                                        رشته تحصیلی
                                    </label>
                                    <input tabindex="3" id="majorJonior" onchange="$(this).css('border-color','')" class="form-control"/>
                                </div>
                                <div class="col-md-3">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                    <label class="control-label" for="finishedUniNameJunior">
                                        دانشگاه محل تحصیل
                                    </label>
                                    <input tabindex="2" id="finishedUniNameJunior" onchange="$(this).css('border-color','')" class="form-control"/>
                                </div>
                                <div class="col-md-3" style="float: right">
                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                    <label class="control-label" for="averageJunior"> معدل
                                    </label>
                                    <input tabindex="4" id="averageJunior" value="{{$averageJunior}}" class="form-control"
                                           type="text" />
                                </div>

                            </div>
                            <div class="row" style="margin-top: 50px;">
                                <div class="col-md-6">
                                    <table class="table table-bordered table-striped" id="example-dropzone-filetable3"
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
                                <div class="col-md-6">
                                    <table style="text-align: center;">
                                        <tr>
                                            <td style="width:20%;">
                                                <input type="text" id="imageformat-uniDocJunior" style="display:none;"/>
                                                <input type="hidden" id="uniDocJunior">

                                                <div id="uniDocJuniorDropzone" class="droppable-area">
                                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>


                                                    تصویر مدرک تحصیلی مقطع کاردانی
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td style="width:20%;">
                                                <input type="text" id="imageformat-acceptenceJunior"
                                                       style="display:none;"/>
                                                <input type="hidden" id="acceptenceJunior">

                                                <div id="acceptenceJuniorDropzone" class="droppable-area">
                                                    <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                                    تصویر ریز نمرات مقطع کاردانی
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane with-bg" id="fwv-4">
                        <div class="row">
                            <div class="col-md-4">
                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                <label class="radio-inline">
                                    <input type="radio" name="hasLoan" class="hasLoan" value="بله">
                                    <span style="margin-right: 20px;">
                                        بله</span>

                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="hasLoan" class="hasLoan" value="خیر">
                                    <span style="margin-right: 20px;">
                                       خیر
                                    </span>


                                </label>
                            </div>
                            <div class="col-md-8" id="hasLoan">
                                <p>پذیرفته شده گرامی آیا در مقاطع تحصیلی گذشته از تسهیلات وام شهریه صندوق رفاه دانشجویان  استفاده کرده اید؟   </p>
                            </div>
                        </div>
                        <div class="row">
                            <div id="loanStatus" class="col-md-1" style="float: right;">
                                <p>وضعیت وام</p>
                            </div>
                            <div class="col-md-3" style="float: right;">
                                <label class="radio-inline">
                                    <input type="radio" name="loanStatus" class="loanStatus" value="تسویه شده">
                                    <span style="margin-right: 20px;">
                                        تسویه شده
                                    </span>

                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="loanStatus" class="loanStatus" value="بدهکار">
                                    <span style="margin-right: 20px;">
بدهکار
                                    </span>
                                </label>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <span style="font-size: 6; color: red;" class="glyphicon glyphicon-star"></span>

                                <label class="radio-inline">
                                    <input type="radio" name="reqLoan" value="بله">
                                    <span style="margin-right: 20px;">
                                        بله</span>

                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="reqLoan" value="خیر">
                                    <span style="margin-right: 20px;">
                                       خیر
                                    </span>


                                </label>
                            </div>
                            <div class="col-md-8">
                                <p>
                                    مایل به استفاده از وام دانشجویی از نیمسال دوم به بعد خود هستید؟                                </p>
                            </div>

                        </div>
                        <div class="row">
                            <p style="font-size: large">
                                توضیحات مربوط به وام:

                            <p>لازم به ذکر است هر دانشجو در مقطع کارشناسی ارشد امکان بهره گیری از وام شهریه در 3 نیمسال
                                تحصیلی به شرط ارائه مدارک مورد نیاز را خواهد داشت. وام مربوطه با بهره 4 درصد ارائه
                                میگردد که پرداخت اقساط به صورت 60 قسط 9 ماه پس از فراغت از تحصیل انجام میگردد. گواهی
                                موقت دوره کارشناسی ارشد با ذکر میزان بدهی وام به صندوق رفاه صادر خواهد شد که پس از
                                پرداخت 10 درصد کل وام قابل ارائه میباشد و ارائه اصل دانشنامه
                                پس از تسویه کامل وام
                                دریافتی صورت میپذیرد .</p>
                        </div>
                    </div>

                    </br>
                    <ul class='pager wizard' style='margin-bottom: 0px;margin:0px'>
                        <li class='previous' style='float:right' id='previousli'>
                            <a href='#' id='previousstep'><i class='entypo-left-open'></i> مرحله قبلی </a>
                        </li>
                        <li class='next' style='float:left' id='nextli'>
                            <a href='#' id='nextstep'>مرحله بعدی <i class='entypo-right-open'></i></a>
                        </li>
                    </ul>
                    <div class="row tab-pane with-bg" id="fwv-5">
                        <div class="col-sm-4">
                            <button class="btn btn-primary"  style="float: left" disabled="true" id="acceptenceBTN"  onclick="registerinformation()"
                                    >ثبت اطلاعات و ورود به مرحله پرداخت شهریه</button>
                        </div>
                        <div class="col-sm-8">
                            <div class="checkbox">
                                <label>
                                    کلیه اطلاعات درج شده در سیستم ثبت نام را با دقت کامل مطالعه و تکمیل کرده ام و صحت آنرا تایید می نمایم.
                                    <input name="accepInfo" id="accepInfo" type="checkbox"
                                            />

                                </label>

                            </div>
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
<script>
    $("#nextstep").bind("click", function () {
        if(index==5) {
            $('#nextli').hide();
            $('#laststep').html('مرحله قبل و ویرایش');
            $('#titlemain').html('   تائید اطلاعات ثبت شده   ');


        }

    });
    $('#previousli').bind("click", function () {
        if(index <4) {
            $('#nextli').show();
            $('#titlemain').html('            ثبت نام');

        }

    })
</script>
</body>
</html>

