<?php

namespace App\Http\Controllers;

use App;
use DB;
use Excel;
use Illuminate\Http\Request;
use Mail;
use View;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $tab1 = '';
        $tab2 = '';
        $tab3 = '';
        $tab4 = '';
        $tab5 = '';
        $tab6 = '';
//        if ($request->user()->id == 1 || $request->user()->id == 2) {
//            $tab1 = 'style=display:none;';
//            $tab2 = 'style=display:none;';
//            $tab4 = 'style=display:none;';
//            $tab6 = 'style=display:none;';
//        }
//        else if($request->user()->id == 1 || $request->user()->id == 3){
//            $tab1 = 'style=display:none;';
//            $tab2 = 'style=display:none;';
//
//        }
        return view('admin',
            [
                'tab1' => $tab1,
                'tab2' => $tab2,
                'tab3' => $tab3,
                'tab4' => $tab4,
                'tab5' => $tab5,
                'tab6' => $tab6
            ]);
    }

    public function adminDeleteCourse(Request $request)
    {
        App\Course::Where('id', $request->input('id'))->delete();
    }

    public function adminAddCourse(Request $request)
    {
        $t = new  App\Course();
        $t->title = $request->input('title');
        $t->code = $request->input('code');
        $t->staticFee = $request->input('staticFee');
        $t->totallFee = $request->input('dynamicFee');
        $t->decleredCapacity = $request->input('decleredCapacity');
        $t->officialCapacity = $request->input('officialCapacity');
        $t->save();
    }

    public function admin1()
    {
        $table = '<div class="well"><table  cellspacing="0" class="table table-bordered"><thead> <tr>
  <th>نام دوره</th>  <th >کد</th>  <th>شهریه ثابت</th>     <th>شهریه کامل </th>
  <th>ظرفیت رسمی

</th>
  <th>ظرفیت اعلام شده

</th>
  <th>جزئیات</th>
  </tr>
  </thead>';
        $result = App\Course::select('*')->get();
        foreach ($result as $t) {
            $table .= "<tr ><td>$t->title </td><td> $t->code </td><td> $t->staticFee</td>
<td> $t->totallFee </td>
<td> $t->officialCapacity </td>
<td> $t->decleredCapacity </td>
<td><a href='#'><span class='glyphicon glyphicon-trash' onclick='trashCourse($t->id)'></span></a></td></tr>";
        }
        echo $table . '</table></div><div class="col-md-6 col-md-offset-3 well"><div class="form-group">
        <input type="text" class="form-control" id="courseTitle" placeholder="نام دوره"/>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="courseCode" placeholder="کد"/>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="staticFee" placeholder="شهریه ثابت"/>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="dynamicFee" placeholder="شهریه کامل"/>
        </div>
         <div class="form-group">
        <input type="text" class="form-control" id="officialCapacity" placeholder="ظرفیت رسمی

 "/>
        </div>
         <div class="form-group">
        <input type="text" class="form-control" id="decleredCapacity" placeholder="ظرفیت اعلام شده

 "/>
        </div>
        <div class="form-group">
         <input type="submit" class="btn btn-primary" value="افزودن دوره" onclick="adminAddCourse()"/>
        </div>
        </div>';
    }

    public function admin2()
    {
        return App\Student_info::select('*')->where('registrationSatus', 1)->get()->toJson();

    }

    public function admin3()
    {
        $result = App\Student_info::select('*')->where('registrationSatus', 2)->get();

        $output = fopen('resources/uploads/final.csv', 'w');

        $headers = [
            'Content-Type' => 'text/csv',
            'charset'      => 'utf-8',

        ];
        fputcsv($output, ['نام ', 'نام خوانوادگی', 'ایمیل', 'رشته تحصیلی', 'گرایش', 'شماره همراه', 'نحوه پرداخت']);

        foreach ($result as $fields) {
            $st = App\Student::select('*')->where('id', $fields->student_id)->first();
            $course = App\Course::select('*')->where('id', $fields->course_id)->first();
            if ($fields->paymentType = 1) {
                $type = 'نقدی';
            } else {
                $type = 'اقساط';

            }
            fputcsv($output, [$st->name, $st->fullname, $fields->email, $course->title, $st->passMajorName, $fields->mobile, $type]);
        }

        return response()->download('resources/uploads/final.csv', 'tweets.csv', $headers);
    }

    public function admin6()
    {
        $result = App\Course::select('*')->get();
        $output = fopen('resources/uploads/finance.csv', 'w');

        $headers = [
            'Content-Type' => 'text/csv',
            'charset'      => 'utf-8',

        ];
        fputcsv($output, ['نام دوره ', 'شهریه ثابت', 'شهریه کامل', 'تعداد افراد با شهریه کامل', 'مجموع دریافتی با شهریه کامل', 'تعداد افراد با شهریه اقساطی', 'شهریه کل دریافت شده از پذیرفته شدگان *']);

        foreach ($result as $fields) {
            $count1 = $this->countTotalFee($fields->id, 1);
            $count2 = $this->countTotalFee($fields->id, 0);
            $tCount1 = $count1 * ($fields->dynamicFee + $fields->staticFee);
            $tCount2 = $count2 * $fields->staticFee;
            $total = $tCount1 + $tCount2;
            fputcsv($output, [$fields->title, $fields->staticFee, $fields->dynamicFee, $count1, $tCount1, $count2, $tCount2, $total]);
        }

        return response()->download('resources/uploads/finance.csv', 'tweets.csv', $headers);

    }

    public function admin7()
    {
        $table = '<div class="well"><table  cellspacing="0" class="table table-bordered"><thead> <tr>
  <th>نام </th>  <th >نام خوانوادگی</th>  <th>رشته </th>
<th>کد رهگیری</th>
<th>نحوه پرداخت</th>
     <th> جزئیات </th>


  </tr>
  </thead>';
        $result = App\Student_info::select('*')->where('registrationSatus', 2)->get();
        foreach ($result as $fields) {
            if ($fields->peymentType == 1)
                $type = 'نقدی';
            else
                $type = 'اقساط';

            $st = App\Student::select('*')->where('id', $fields->student_id)->first();
            $course = App\Course::select('*')->where('id', $fields->course_id)->first();
            $table .= "<tr ><td>$st->name $fields->id </td><td>  $st->fullname </td><td> $course->title</td>
<td>$fields->approvalCode</td>
<td>$type</td>

<td><a href='#'><span class='glyphicon glyphicon-user' onclick='showStDetails($fields->id)'></span></a></td></tr>";
        }
        echo $table;
    }

    function stDetails(Request $request)
    {
        $result = App\Student_info::select('*')->where('id', $request->input('id'))->first();
        $st = App\Student::select('*')->where('id', $result->student_id)->first();
        $course = App\Course::select('*')->where('id', $result->course_id)->first();
        $r = ['name'                    => $st->name, 'family' => $st->fullname, 'email' => $result->email,
              'mobile'                  => $result->mobile, 'marital' => $result->marital_status, 'birthDate' => $result->birthDate,
              'birthCity'               => $result->birthCity, 'militery_status' => $result->militery_status, 'militaryCard' => $result->militaryCard,
              'imgPersonal'             => $result->personalPhoto, 'idImg' => $result->nationalCardImg, 'idCardImg' => $result->idCardImg,
              'job'                     => $result->job, 'jobPlace' => $result->jobPlace, 'addreas' => $result->addreas, 'docImg' => $result->bachelorImg,
              'acceptenceDoc'           => $result->acceptenceImg, 'juniorDoc' => $result->juniorBachelorImg,
              'juniorBachelorPointsImg' => $result->juniorBachelorPointsImg, 'wariorCard' => $result->wariorCardImg,
              'wariorIntro'             => $result->wariorIntro];
        echo json_encode($r);
    }

    private function countTotalFee($course_id, $type)
    {
        return DB::table('student_info')->where('course_id', $course_id)->where('peymentType', $type)->count();

    }

    private function fromCompletedStatus($course_id, $registrationSatus)
    {
        return DB::table('student_info')->where('course_id', $course_id)->where('registrationSatus', $registrationSatus)->count();

    }

    private function fromCompletedRegisterationStatus($course_id, $registrationSatus, $type)
    {
        return DB::table('student_info')->where('course_id', $course_id)->where('registrationSatus', $registrationSatus)->where('peymentType', $type)->count();

    }

    private function formIfInvalid($course_id)
    {
        return DB::table('student_info')->where('course_id', $course_id)->where('wariorRelation', '!=', null)->count();

    }

    public function admin4()
    {
        $table = '<div class="well"><h4>گزارش گیری وضعیت مالی ثبت نام                 </h4>
<table  cellspacing="0" class="table table-bordered"><thead> <tr>
  <th>نام دوره</th>
        <th>شهریه ثابت</th>
        <th>شهریه کامل
 </th>
 <th>تعداد افراد با شهریه کامل
</th>
<th>مجموع دریافتی با شهریه کامل
</th>
<th>تعداد افراد با شهریه اقساطی
</th>
<th>شهریه ثابت دریافت شده برای اقساطی ها
<th>
شهریه کل دریافت شده از پذیرفته شدگان *

</th>
<th>تعداد کل ثبت نام کنندگان</th>
  </tr>
  </thead>';
        $result = App\Course::select('*')->get();
        foreach ($result as $t) {
            $count1 = $this->countTotalFee($t->id, 1);
            $count2 = $this->countTotalFee($t->id, 2);
            $tCount1 = $count1 * $t->totallFee;
            $tCount2 = $count2 * $t->staticFee;
            $total = $tCount1 + $tCount2;
            $total2 = $count1 + $count2;

            $table .= "<tr ><td>$t->title </td>
                            <td> $t->staticFee</td>
                            <td> $t->totallFee </td>
                            <td> $count1 </td>
                            <td>$tCount1 </td>
                            <td> $count2 </td>
                            <td> $tCount2 </td>
                            <td> $total </td>
							 <td> $total2 </td>
</tr>";
        }
        echo $table . '</table></div>';
    }

    public function admin5()
    {
        $table = '<div class="well">
<h4>                     گزارش گیری وضعیت ثبت نام                 </h4>
<div class="well"><table  cellspacing="0" class="table table-bordered"><thead> <tr>
  <th>نام دوره</th>  <th >کد</th>
  <th>ظرفیت رسمی

</th>
  <th>ظرفیت اعلام شده

</th>
<th>تعداد تکمیل کنندگان فرم ثبت نام

</th>
<th>فرایند پرداخت شهریه کامل شده است
</th>
<th>ویژه ایثارگران
</th>

<th>اقساط
</th>
</tr>
</thead>';
        $result = App\Course::select('*')->get();
        foreach ($result as $t) {
            $count1 = $this->fromCompletedStatus($t->id, 1);
            $count2 = $this->fromCompletedRegisterationStatus($t->id, 2, 1);
            $count3 = $this->formIfInvalid($t->id);
            $count4 = $this->fromCompletedRegisterationStatus($t->id, 2, 2);


            $table .= "
<tr>
<td>$t->title </td>
<td> $t->code </td>
<td> $t->officialCapacity </td>
<td> $t->decleredCapacity </td>
<td> $count1 </td>
<td>$count2 </td>
<td> $count3 </td>
<td> $count4 </td>
";
        }
        echo $table . '</table></div>';
    }

}
