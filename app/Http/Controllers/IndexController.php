<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Mail;
use View;

class IndexController extends Controller
{
    public function pdfTutorial(){
        return view('pdfTutorial', ['title' => 'آموزش ثبت نام']);
    }
    public function videoTutorial(){
        return view('videoTutorial', ['title' => 'آموزش ثبت نام']);
    }
    public function form()
    {
        $user_info = App\Student_info::select('*')->where('approvalCode', "$_GET[code]")->first();
        $st = App\Student::select('*')->where('id', $user_info->student_id)->first();
        $title = ' فرم ثبت نام';
        $disable = '';

        if ($st->sex == "زن ") {
            $disable = 'style=display:none;';
        }

        if ($st->passShare == "ازاد      ") {
            return view('formNoinvalid', ['title' => $title,
                'approvalCode' => $_GET['code'],
                'name' => $st->name,
                'fathername' => $st->fatherName,
                'lastName' => $st->fullname,
                'sex' => $st->sex,
                'idNumber' => $st->idNumber,
                'idCode' => $st->idCode,
                'province' => $st->province,
                'city' => $st->city,
                'postalCode' => $st->postalCode,
                'mobile' => $user_info->mobile,
                'phone' => $st->phone,
                'totallScore' => $st->totallScore,
                'totallScoreInmajor' => $st->totallScoreInmajor,
                'passPriority' => $st->passPriority,
                'finishMajor' => $st->finishMajor,
                'finishedUniName' => $st->finishedUniName,
                'finishDate' => $st->finishDate,
                'averageJunior' => $st->averageJunior,
                'average' => $st->avrage,
                'disable' => $disable,
                'email' => $user_info->email
            ]);
        } else {

            return view('form', ['title' => $title,
                'approvalCode' => $_GET['code'],
                'name' => $st->name,
                'fathername' => $st->fatherName,
                'lastName' => $st->fullname,
                'sex' => $st->sex,
                'idNumber' => $st->idNumber,
                'idCode' => $st->idCode,
                'province' => $st->province,
                'city' => $st->city,
                'postalCode' => $st->postalCode,
                'mobile' => $user_info->mobile,
                'phone' => $st->phone,
                'totallScore' => $st->totallScore,
                'totallScoreInmajor' => $st->totallScoreInmajor,
                'passPriority' => $st->passPriority,
                'finishMajor' => $st->finishMajor,
                'finishedUniName' => $st->finishedUniName,
                'finishDate' => $st->finishDate,
                'averageJunior' => $st->averageJunior,
                'average' => $st->avrage,
                'passShare' => $st->passShare,
                'disable' => $disable,
                'email' => $user_info->email


            ]);
        }
    }

    public function checkStudent(Request $request)
    {
        $st = App\Student::select('*')->where('idNumber', $request->input('id_number'))
            ->where('idCode', $request->input('id_code'))->first();

        if ($st != null) {
            $user_info = App\Student_info::select('*')->where('student_id', $st->id)->first();
            if ($user_info!=null) {

                if ($user_info->registrationSatus == 2) {
                    return view('welcome', ['idNumber' => $request->input('id_number'), 'idCode' => $request->input('id_code'), 'approvalCode' => $user_info->approvalCode]);

                }
                else{
                    $fee = App\Course::select('*')->where('code', $st->examCode)->first();
                    return view('welcomeAndConfirm', ['name' => $st->name . ' ' . $st->fullname, 'exam' => $fee->title, 'major' => $st->passMajorName, 'fee' => number_format($fee->totallFee), 'id' => $st->id, 'courseId' => $fee->id]);
                }
            }
            else {

                $fee = App\Course::select('*')->where('code', $st->examCode)->first();
                return view('welcomeAndConfirm', ['name' => $st->name . ' ' . $st->fullname, 'exam' => $fee->title, 'major' => $st->passMajorName, 'fee' => number_format($fee->totallFee), 'id' => $st->id, 'courseId' => $fee->id]);
            }
        }
        else {
            return view('welcome', ['idNumber' => $request->input('id_number'), 'idCode' => $request->input('id_code')]);
        }
    }


    public function registerLink(Request $request)
    {
        $uniquid = uniqid();
        App\Student_info::where('student_id', $request->input('id'))->delete();
        $student_info = new App\Student_info();
        $student_info->email = $request->input('email');
        $student_info->mobile = $request->input('mobile');
        $student_info->student_id = $request->input('id');
        $student_info->course_id = $request->input('course_id');
        $student_info->approvalCode = $uniquid;
        $student_info->registrationSatus = 0;
        $student_info->save();
        $user = App\Student_info::select('*')->where('id', $student_info->id)->first();

        echo "registerr?code=$uniquid";
    }

    public function uploady()
    {
        $ds = DIRECTORY_SEPARATOR;  //1

        $storeFolder = 'resources/uploads';   //2

        if (!empty($_FILES)) {

            $tempFile = $_FILES['file']['tmp_name'];         //3

            $targetPath = $storeFolder . $ds;  //4
            $targetFile = $targetPath . time() . '-' . $_FILES['file']['name'];  //5
            $filee = time() . '-' . $_FILES['file']['name'];
            move_uploaded_file($tempFile, $targetFile); //6
            echo $filee;

        }
    }

    public function registerinformation(Request $request)
    {
        $student_info = App\Student_info::select('*')->where('approvalCode', $request->input('approvalCode'))->first();
        $student_info->marital_status = $request->input('marital');
        $student_info->birthDate = $request->input('birthdate');
        $student_info->birthCity = $request->input('birthCity');
        $student_info->birthProvince = $request->input('birthProvince');
        $student_info->militery_status = $request->input('militaryStatus');
        $student_info->militaryCard = $request->input('military');
        $student_info->personalPhoto = $request->input('aks');
        $student_info->nationalCardImg = $request->input('shenasnameh');
        $student_info->idCardImg = $request->input('cartmeli');
        $student_info->job = $request->input('job');
        $student_info->jobPlace = $request->input('jobPlace');
        $student_info->isJobRelated = $request->input('jobRelataed');
        $student_info->residencyVillage = $request->input('residencyVillage');
        $student_info->residencyCity = $request->input('residencyCity');
        $student_info->residencyProvince = $request->input('residencyProvince');
        $student_info->phone = $request->input('phone');
        $student_info->postalCode = $request->input('postalCode');
        $student_info->uniDocType = $request->input('eduType');
        $student_info->uniType = $request->input('uniType');
        $student_info->studyType = $request->input('eduType');
        $student_info->bachelorImg = $request->input('uniDoc');
        $student_info->acceptenceImg = $request->input('acceptence');
        $student_info->juniorBachelorMajor = $request->input('majorJonior');
        $student_info->juniorBachelorGerayesh = $request->input('majorJoniorGerayesh');
        $student_info->juniorBachelorUni = $request->input('finishedUniNameJunior');
        $student_info->juniorBachelorImg = $request->input('uniDocJunior');
        $student_info->juniorBachelorPointsImg = $request->input('acceptenceJunior');
        $student_info->hasLoan = $request->input('hasLoan');
        $student_info->loanStatus = $request->input('loanStatus');
        $student_info->loanRequired = $request->input('reqLoan');
        $student_info->wariorRelation = $request->input('wariorRelation');
        $student_info->invalidProcent = $request->input('invalidProcent');
        $student_info->wariorCode = $request->input('wariorCode');
        $student_info->wariorCardImg = $request->input('wariorCardImg');
        $student_info->wariorIntro = $request->input('wariorIntro');
        $student_info->registrationSatus = 1;
        $student_info->save();
        echo $request->input('approvalCode');
    }

    public function payment()
    {
        $user_info = App\Student_info::select('*')->where('approvalCode', "$_GET[code]")->first();
        $st = App\Student::select('*')->where('id', $user_info->student_id)->first();
        $course = App\Course::select('*')->where('code', $st->examCode)->first();
        return view('payment', ['title' => 'پرداخت شهریه ثبت نام',
            'approvalCode' => $_GET['code'],
            'name' => $st->name,
            'lastName' => $st->fullname,
            'examName' => $course ->title,
            'passMajorName' => $st->passMajorName,
            'fee' => number_format($course->totallFee + 50000),
            'feee' => $course->totallFee + 50000,
            'feeStatic' => number_format($course->staticFee)
        ]);
    }

    public function finalizePaymentCheck(Request $request)
    {
        $user_info = App\Student_info::select('*')->where('approvalCode', "$_GET[code]")->first();
        $st = App\Student::select('*')->where('id', $user_info->student_id)->first();
        $course = App\Course::select('*')->where('code', $st->examCode)->first();
        $finalp =number_format( ($course->totallFee - $course->staticFee) / 2);
        return view('checkPeymentDetails', ['approvalCode' => $_GET['code'], 'staticFee' => $finalp,'peyamount'=>($course->staticFee+50000)]);
    }

    public function acceptFullPayment()
    {

        $ref_num = $_POST['RefNum'];
        $user_info = App\Student_info::select('*')->where('approvalCode', "$_GET[code]")->first();
        $st = App\Student::select('*')->where('id', $user_info->student_id)->first();
        $course = App\Course::select('*')->where('code', $st->examCode)->first();
        $trackCode = $_GET['code'];

        $data = array(
            'title' => 'پرداخت شهریه ثبت نام',
            'approvalCode' => $_GET['code'],
            'name' => $st->name,
            'lastName' => $st->fullname,
            'trackCode' => $trackCode,
            'examName' => $course ->title,
            'passMajorName' => $st->passMajorName
        );
        if( ! isset($_POST['State']) or $_POST['State']!='OK')
        {
            echo "پرداخت ناموفق";
            die;
        }
        else{
            try{
                $a = new \nusoap_client('https://sep.shaparak.ir/payments/referencepayment.asmx?WSDL','wsdl');
//            $a = new ('https://sep.shaparak.ir/payments/referencepayment.asmx?WSDL','wsdl');
//            $soapclient = new App\Libraries\nusoap_client('https://sep.shaparak.ir/payments/referencepayment.asmx?WSDL','wsdl');
                $soapProxy    = $a->getProxy();
                $mid  = 10069057;
                $soapProxy->VerifyTransaction($ref_num,$mid);
                $user_info->registrationSatus = 2;
                $user_info->peymentType = $_GET['peymentType'];
                $user_info->save();
                Mail::queue('peymentTrack', $data, function ($m) use ($user_info, $st) {
                    $m->from('tts@mehralborz.ac.ir', 'دانشگاه مهر البرز ');
                    $m->to($user_info->email, $st->name . ' ' . $st->fullname)->subject('تایید پرداخت !');
                });
                return view('peymentTrack', ['title' => 'پرداخت شهریه ثبت نام',
                    'approvalCode' => $_GET['code'],
                    'name' => $st->name,
                    'lastName' => $st->fullname,
                    'trackCode' => $trackCode,
                    'examName' => $course ->title,
                    'passMajorName' => $st->passMajorName


                ]);
            }
            catch(Exception $e)
            {
                echo "خطا در اتصال به وبسرویس ";
                die;
            }


        }


    }


    public function registerChecks(Request $request)
    {
        $user_info = App\Student_info::select('*')->where('approvalCode', $request->input('approvalCodecheck'))->first();
        if($user_info!=null){
            App\Check::where('student_number', $user_info->id)->delete();

        }
        $check = new App\Check();
        $check->student_number = $user_info->id;
        $check->firstCHAmount = $request->input('firstCHAmount');
        $check->firstCHSerialNumber = $request->input('firstCHSerialNumber');
        $check->firstCHDate = $request->input('firstCHDate');
        $check->firstCHBankCode = $request->input('firstCHBankCode');
        $check->firstCHBankName = $request->input('firstCHBankName');
        $check->firstCHAccountNumber = $request->input('firstCHAccountNumber');
        $check->firstCHImg = $request->input('firstCHImg');
        $check->secondCHAmount = $request->input('secondCHAmount');
        $check->secondCHSerialNumber = $request->input('secondCHSerialNumber');
        $check->secondCHDate = $request->input('secondCHDate');
        $check->secondCHBankCode = $request->input('secondCHBankCode');
        $check->secondCHBankName = $request->input('secondCHBankName');
        $check->secondCHAccountNumber = $request->input('secondCHAccountNumber');
        $check->secondCHImg = $request->input('secondCHImg');
        $check->postDoc = $request->input('postDoce');

        if ($check->save())
            echo 1;
    }
}
