<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Helper\SchoolHelperController;
use App\FeesModel;
use Session;


class WelcomeController extends Controller
{
    

    private $schoolHelper;

    // constructor
    public function __construct(SchoolHelperController $schoolHelper)
    {
        $this->schoolHelper = $schoolHelper;
    }

    //school home page here.........
    public function index(){
    	return view('fontend.home.index');

    }

    //chairmain message page bangla
    public function notice($id){
    	return view('fontend.pages.noticeDetails');
    }


      //academic Teachers  List
    public function teachersBangla(){
        // json body information
        $json = ['institute'=>$this->schoolHelper->getInstituteId(), 'campus'=>$this->schoolHelper->getCampusId(), 'category'=>1, 'return_type'=>'json'];
        // academic employee list
        $teacherList = $this->schoolHelper->getEmployeeList($json);
        // return view with variable
        return view('fontend.pages.teachers-list', compact('teacherList'));        
    }

    //academic fess view page
    public function feesPayment(){
        //academic fees Payment info
        $allFees = FeesModel::all();
    	return view('fontend.pages.fees-catagory', compact('allFees'));

    }

    //student Database-page bangla
    public function studentDatabase(){
        // school info
        $schoolInfo = (object)$this->schoolHelper->getSchoolInfo();
        // academic year list
        $academicYearList = $this->schoolHelper->getAcademicYearList();
        // return view with variables
        return view('fontend.pages.student-database', compact('academicYearList', 'schoolInfo'));
    }


    // find class section student list
    public function findStudentList(Request $request){
        // json body information
        $json = [
            'institute'=>$this->schoolHelper->getInstituteId(),
            'campus'=>$this->schoolHelper->getCampusId(),
            'academic_year'=>$request->input('academic_year'),
            'academic_level'=>$request->input('academic_level'),
            'batch'=>$request->input('batch'),
            'section'=>$request->input('section'),
            'return_type'=>'json',
        ];
        // return academic level list
        $studentList = $this->schoolHelper->getBatchSectionStudentList($json);
        // return view with variables
        return view('fontend.pages.includes.student-list', compact('studentList'));
    }

    //academic class topper bangla
    public function studentToplist(){
        // get academic class topper list using API call
         $academicTopper = (object)$this->schoolHelper->getAcademicClassTopperList(); 
    	 return view('fontend.pages.student-topList', compact('academicTopper'));

    }
    //academic Calendar-page bangla
    public function academicCalendar(){

    	return view('fontend.pages.academicCalendar-page');

    }
    //class-routine-bangl-page bangla
    public function classRoutine(){
        // school info
        $schoolInfo = (object)$this->schoolHelper->getSchoolInfo();
        // academic level list
        $academicLevelList = $this->schoolHelper->getAcademicLevelList();
        // return view with variables
        return view('fontend.pages.class-routine-bangle', compact('academicLevelList', 'schoolInfo'));
    }

    // find batch section time table by akm islam
    public function findTimeTable(Request $request){
        // find academic year and checking
        if($year = $this->schoolHelper->getAcademicYear()){
            // json body information
            $json = [
                'institute'=>$this->schoolHelper->getInstituteId(),
                'campus'=>$this->schoolHelper->getCampusId(),
                'year'=>$year->id,
                'level'=>$request->input('academic_level'),
                'batch'=>$request->input('batch'),
                'section'=>$request->input('section'),
                'shift'=>$request->input('shift'),
                'return_type'=>'json',
            ];
            // batch section time table details
            $timeTableDetails = $this->schoolHelper->getBatchSectionClassRoutine($json);
            // checking
            if(!empty($timeTableDetails)){
                $dayList = $timeTableDetails->day_list;
                $periodList = $timeTableDetails->period_list;
                $timeTableList = $timeTableDetails->timetable_list;
            }else{
                $dayList = null;
                $periodList = null;
                $timeTableList = null;
            }
        }else{
            $dayList = null;
            $periodList = null;
            $timeTableList = null;
        }
        // return view with variables
        return view('fontend.pages.includes.class-routine', compact('dayList', 'periodList', 'timeTableList'));
    }

 

    // get academic exam result
    public function academicExamResult()
    {
        // school info
        $schoolInfo = (object)$this->schoolHelper->getSchoolInfo();
        // academic year list
        $academicYearList = $this->schoolHelper->getAcademicYearList();
        // return view with variables
        return view('fontend.pages.exam-result-academic', compact('schoolInfo', 'academicYearList'));
    }

    // get academic exam result
    public function findAcademicExamResult(Request $request)
    {
        // json body information
        $json = [
            'institute'=>$this->schoolHelper->getInstituteId(),
            'campus'=>$this->schoolHelper->getCampusId(),
            'year'=>$request->input('academic_year'),
            'level'=>$request->input('academic_level'),
            'batch'=>$request->input('batch'),
            'section'=>$request->input('section'),
            'semester'=>$request->input('semester'),
            'gr_no'=>$request->input('gr_no'),
            'return_type'=>'json',
        ];
        // return student semester result details
        $resultDetails = $this->schoolHelper->getSingleStudentSemesterResult($json);
        // checking
        if(!empty($resultDetails) AND $resultDetails->result_sheet !=null){
            $resultSheet = $resultDetails->result_sheet;
            $assessmentList = $resultDetails->assessment_list;
        }else{
            $resultSheet = null;
            $assessmentList = null;
        }
        // return view with variables
        return view('fontend.pages.includes.exam-result-academic', compact('resultSheet', 'assessmentList'));
    }
 
    //medical-bangla-page bangla
    public function admissionBangla(){

    	return view('fontend.pages.admission-bangla');

    }
    //medical-bangla-page bangla
    public function publicExamResult(){
    	return view('fontend.pages.last-3year-public-result');
    }

    //download all document route
    public function downloadFile(){
        return view('fontend.pages.downloads');
    }

    //download all document route

    public function admissionResult(){
        return view('fontend.pages.admission-result');
    }

      // holiday list method
    public function govHolidayList() {
        return view('fontend.pages.holiday-list');
    }


    //admission online view page
    public function admissionOnlineView(){
        // find state list
        $stateList = $this->schoolHelper->getStateList();
         // academic year list
        $academicYearList = $this->schoolHelper->getAcademicYearList();
        // academic level list
        $academicLevelList = $this->schoolHelper->getAcademicLevelList();
        // return view with variables
        return view('fontend.pages.admission-online', compact('stateList','academicYearList', 'academicLevelList'));
    }
        //store data admission
     public function onlineAdmissionDataStore(Request $request) {
         // save/store online student information
       $stdStored = $this->schoolHelper->storeOnlineStudent($request->all());
        // checking
        if($stdStored->status){
             Session::flash('success','Student information submitted !!!');
            // return 
            return redirect()->back();
        }else{
             // error list
            Session::flash('feiled','Invalid information !!');
            // return 
            return redirect()->back();
        }
    }

    //student login view page
    public function studentLoginView() {
        return view('fontend.pages.login-student');
    }
    //student login store
    public function studentLoginStore(Request $request) {
        return $request->all();
    }

    //aplicante admission update view
    public function admissionInfoUpdateView() {
        // find state list
        $stateList = $this->schoolHelper->getStateList();
        // academic year list
        $academicYearList = $this->schoolHelper->getAcademicYearList();
        // academic level list
        $academicLevelList = $this->schoolHelper->getAcademicLevelList();
        // return view with variables
        return view('fontend.pages.update-admission-info',compact('stateList','academicYearList', 'academicLevelList'));
    }
    // admission student update data store
    public function admissionUpdateDataStore(Request $request) {
        return $request->all();
    } 
    //admission online end

    //academic house place 
    public function housePlace() {
        return view('fontend.pages.house-place');
    }

    //student respect etiquette
    public function respectEtiquette() {
        return view('fontend.pages.respect-etiquette');
    }



}
