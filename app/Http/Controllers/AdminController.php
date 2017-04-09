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
        $tab7 = '';
        $tab8 = '';
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
                'tab6' => $tab6,
                'tab7' => $tab7,
                'tab8' => $tab8
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
        return response(App\Course::select('*')->get());
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

    public function admin7(Request $request)
    {
        $pageNumber = $request->input('data');
        $result = App\Student_info::select('*')->where('registrationSatus', 2)->skip(($pageNumber - 1) * 20)->take(20)->get();
        $r = [];
        $r['data'] = [];
        if ($result) {
            foreach ($result as $fields) {
                if ($fields->peymentType == 1)
                    $type = 'نقدی';
                else
                    $type = 'اقساط';
                $st = App\Student::select('*')->where('id', $fields->student_id)->first();
                $course = App\Course::select('*')->where('id', $fields->course_id)->first();
                array_push($r['data'], ['type'         => $type,
                                        'name'         => $fields->name . '' . $fields->id,
                                        'lastName'     => $st->fullname,
                                        'courseTitle'  => $course->title,
                                        'approvalCode' => $fields->approvalCode,
                                        'fieldsId'     => $fields->id,
                ]);
            }
        }
        return response([
            'result'          => 'success',
            'draw'            => $pageNumber,
            'recordsTotal'    => count($result),
            'recordsFiltered' => count($result),
            'data'            => $r['data'],
        ]);
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

    public function admin4(Request $request)
    {
        $pageNumber = $request->input('data');
        $result = App\Course::select('*')->skip(($pageNumber - 1) * 20)->take(20)->get();
        $r = [];
        $r['data'] = [];
        foreach ($result as $t) {
            array_push($r['data'], [
                'title'     => $t->title,
                'staticFee' => $t->staticFee,
                'totalFee'  => $t->totallFee,
                'count1'    => $this->countTotalFee($t->id, 1),
                'tCount1'   => $this->countTotalFee($t->id, 1) * $t->totallFee,
                'count2'    => $this->countTotalFee($t->id, 2),
                'tCount2'   => $this->countTotalFee($t->id, 2) * $t->staticFee,
                'total'     => ($this->countTotalFee($t->id, 1) * $t->totallFee) + ($this->countTotalFee($t->id, 2) * $t->staticFee),
                'total2'    => ($this->countTotalFee($t->id, 1)) + ($this->countTotalFee($t->id, 2)),
            ]);

        }
        return response([
            'result'          => 'success',
            'draw'            => $pageNumber,
            'recordsTotal'    => count($result),
            'recordsFiltered' => count($result),
            'data'            => $r['data'],
        ]);
    }

    public function admin5(Request $request)
    {
        $pageNumber = $request->input('data');
        $result = App\Course::select('*')->skip(($pageNumber - 1) * 20)->take(20)->get();
        $r = [];
        $r['data'] = [];
        foreach ($result as $t) {
            array_push($r['data'], [
                'id'               => $t->id,
                'title'            => $t->title,
                'code'             => $t->code,
                'officialCapacity' => $t->officialCapacity,
                'decleredCapacity' => $t->decleredCapacity,
                'count1'           => $this->fromCompletedStatus($t->id, 1),
                'count2'           => $this->fromCompletedRegisterationStatus($t->id, 2, 1),
                'count3'           => $this->formIfInvalid($t->id),
                'count4'           => $this->fromCompletedRegisterationStatus($t->id, 2, 2)
            ]);

        }
        return response([
            'result'          => 'success',
            'draw'            => $pageNumber,
            'recordsTotal'    => count($result),
            'recordsFiltered' => count($result),
            'data'            => $r['data'],
        ]);
    }

    public function QueryBuilder($data)
    {
        $query = $this->campaign->query();

        $searchKey = $data->search->value;
        if (!empty($searchKey)) {
            $query->where('title', 'like', '%' . $searchKey . '%');
        }

        $total = $query->count();

        if (!empty($data->order)) {
            $query->orderBy($data->columns[$data->order[0]->column]->data, $data->order[0]->dir);
        }

        $result = $query
            ->skip($data->start)
            ->take($data->length)
            ->get();

        return [$total, $result];
    }

}
