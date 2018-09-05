<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	// $var= select alal;
// 	// $var=select two;
//     return view('welcome');
// });

// amirul

// Route::get('/','WelcomeController@index');
Route::get('/','frontend\HomeController@index');
Route::get('/home','frontend\HomeController@index');


// fontend controller website Bangla
//Route::get('/home','WelcomeController@index');

// Home slider route......................
Route::get('/home/slider','frontend\SliderController@index');

Route::get('/admin/slider/create','SliderController@create');
Route::post('/admin/slider/store','SliderController@storeSlide');
Route::get('/admin/slider/show','SliderController@showSlide');
Route::get('/admin/slider/edit/{id}','SliderController@editSlide');
Route::post('/admin/slider/update','SliderController@updateSlide');
Route::get('/admin/slider/delete/{id}','SliderController@deleteSlide');
// Home slider route......................//

// institute setting route.........
Route::get('/admin/institute/setting/create','InstituteSettingsController@create');
Route::post('/admin/institute/setting/store','InstituteSettingsController@storeSettingInfo');
Route::get('/admin/institute/setting/show','InstituteSettingsController@showInfo');
Route::get('/admin/institute/setting/edit','InstituteSettingsController@editInfo');
Route::post('/admin/institute/setting/update','InstituteSettingsController@updateInfo');
Route::get('/admin/institute/setting/delete/{id}','InstituteSettingsController@deleteinfo');

// institute setting route.........//

//main menu url route....................
Route::get('/notice/{id}','WelcomeController@notice');
Route::get('/routine/{id}','WelcomeController@classRoutine');
Route::post('/routine/timetable/search','WelcomeController@findTimeTable'); // by akm islam
Route::post('/student-list/search','WelcomeController@findStudentList'); // by akm islam
Route::get('/student/database/panel','WelcomeController@studentDatabase');
Route::get('/student/top/list','WelcomeController@studentToplist');
Route::get('/academic/calendar','WelcomeController@academicCalendar');
Route::get('/admission/info/bangla','WelcomeController@admissionBangla');
Route::get('/admission/result','WelcomeController@admissionResult');
Route::get('/academic/exam/result','WelcomeController@academicExamResult'); // by akm islam
Route::post('/academic/exam/result','WelcomeController@findAcademicExamResult'); // by akm islam
Route::get('/public/exam/result','WelcomeController@publicExamResult');
Route::get('/teachers','WelcomeController@teachersBangla');
Route::get('/academic/house-place','WelcomeController@housePlace');
Route::get('/student/respect-etiquette','WelcomeController@respectEtiquette');

//online admission apply route
Route::get('/ems/city-list/{stateId}','Helper\SchoolHelperController@getCityList');
Route::get('/admission/admission-online','WelcomeController@admissionOnlineView');
Route::post('/online/admission/data/store','WelcomeController@onlineAdmissionDataStore');
Route::get('/admission/update/info','WelcomeController@admissionInfoUpdateView');
Route::post('/admission/update/data/store','WelcomeController@admissionUpdateDataStore');
Route::get('/applicant/login','WelcomeController@studentLoginView');
Route::post('/applicant/login/store','WelcomeController@studentLoginStore');

//public exam result route
Route::get('/admin/public/result/create','PublicExamResultController@index');
Route::post('/admin/public/result/store','PublicExamResultController@publicResultInsert');
Route::get('/admin/public/result/ssc/list','PublicExamResultController@sscPublicResultList');
Route::get('/admin/public/result/jsc/list','PublicExamResultController@JscpublicResultList');
Route::get('/admin/public/result/ssc/edit/{id}','PublicExamResultController@sscResultEdit');
Route::get('/admin/public/result/jsc/edit/{id}','PublicExamResultController@jsclicResultEdit');
Route::post('/admin/public/result/update','PublicExamResultController@publicExamUpdate');
Route::get('/admin/public/result/delete/{id}','PublicExamResultController@dateDelete');

//academic fees payment route
Route::get('/academic/fees-payment','WelcomeController@feesPayment');

Route::get('/sports/{id}','WelcomeController@schoolSports');
//gov holiday list route
Route::get('/gov/holiday/holiday-list','WelcomeController@govHolidayList');

Route::get('/users/download/{id}','WelcomeController@downloadFile');
//fees fees-payment
Route::get('/academic/fees/create','FeesController@create');
Route::post('/academic/fees/store','FeesController@feesInsert');
Route::get('/academic/fees/list','FeesController@feesList');
Route::get('/academic/fees/edit/{id}','FeesController@feesEdit');
Route::post('/academic/fees/update','FeesController@feesUpdate');
Route::get('/academic/fees/delete/{id}','FeesController@feesDelete');

// contact-Us route
 Route::get('/contact/school','WelcomeController@contactUs');

//Principal & Teachers font page Route
Route::get('/message/{page_route}','frontend\TeacherMessageController@index');
Route::get('/message/directory/message','frontend\TeacherMessageController@directoryMessage');


//Principal & Teachers Route

 Route::get('/admin/principal/create', 'TeacherMessageController@create');
 Route::post('/admin/teacherinfo/store', 'TeacherMessageController@store');
 
 Route::get('/admin/teachers/message/show', 'TeacherMessageController@showData');
 Route::get('/admin/teachers/message/update/{id}', 'TeacherMessageController@editMessage');
 Route::post('/admin/teachers/message/update/', 'TeacherMessageController@updateMessage');
 Route::get('/admin/teachers/message/delete/{id}', 'TeacherMessageController@deleteMessage');

 //school history page routes
  Route::get('/page/{history_route}', 'frontend\PageController@index');
  Route::get('/admin/page/create', 'PageController@create');
  Route::post('/admin/page/store', 'PageController@store');
  Route::get('/admin/page/show', 'PageController@showData');
  Route::get('/admin/page/edit/{id}', 'PageController@editPage');
  Route::post('/admin/page/update', 'PageController@updatePage');
  Route::get('/admin/page/delete/{id}', 'PageController@deletePage');

// Backend admin dashboard
Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index');

//User Route

 Route::get('/admin/users/create', 'UserController@create');
 Route::post('/admin/users/store', 'UserController@storeUser');
 Route::get('/admin/users/show', 'UserController@showUser');
 Route::get('/admin/users/update/{id}', 'UserController@edit');
 Route::post('/admin/users/update/{id}', 'UserController@updateUser');
 Route::get('/admin/users/delete/{id}', 'UserController@deleteUser');

// Contact route
  Route::get('/contact/{contact_slug}','frontend\ContactController@index');

  Route::get('/admin/contact/create/add','ContactController@create');
  Route::post('/admin/contact/store','ContactController@store');
  Route::get('/admin/contact/show','ContactController@contactShow');
  Route::get('/admin/contact/update/{id}','ContactController@editContact');
  Route::post('/admin/contact/update','ContactController@updateContact');
  Route::get('/admin/contact/delete/{id}', 'ContactController@deleteContact');

// gallery or blog route
Route::get('/blog/{id}', 'frontend\BlogController@index');

Route::get('/admin/blog/create', 'BlogController@create');
Route::post('/admin/blog/store','BlogController@storeBlog');
Route::get('/admin/blog/show', 'BlogController@showBlog');
Route::get('/admin/blog/update/{id}', 'BlogController@editBlog');
Route::post('/admin/blog/update', 'BlogController@updateBlog');
Route::get('/admin/blog/delete/{id}', 'BlogController@deleteBlog');

// question (FAQ) Route
 Route::get('/faqs/frequently-asked-questions', 'frontend\FaqsController@index');


Route::get('/admin/faq/create', 'FaqsController@create');
Route::post('/admin/faq/store', 'FaqsController@storeFaqs');
Route::get('/admin/faq/show', 'FaqsController@showFaqs');
Route::get('/admin/faq/edit/{id}', 'FaqsController@editFaqs');
Route::post('/admin/faq/update', 'FaqsController@updateFaqs');
Route::get('/admin/faq/delete/{id}', 'FaqsController@deleteFaqs');

// governing body
Route::get('/member/{name_slug}', 'frontend\MemberController@index');

Route::get('/admin/member/create', 'MemberController@create');
Route::post('/admin/member/store', 'MemberController@store');
Route::get('/admin/member/show', 'MemberController@show');
Route::get('/admin/member/edit/{id}', 'MemberController@editMem');
Route::post('/admin/member/update', 'MemberController@updateMem');
Route::get('/admin/member/delete/{id}', 'MemberController@deleteMem');

// Mission vission route webpage 
Route::get('/mission/mission-vision', 'frontend\MissionController@index');

Route::get('/admin/mission/vision/create', 'MissionController@create');
Route::post('/admin/mission/vision/store', 'MissionController@storeMission');
Route::get('/admin/mission/vision/show', 'MissionController@showMission');
Route::get('/admin/mission/vision/update/{id}', 'MissionController@editMission');
Route::post('/admin/mission/vision/update', 'MissionController@updateMission');
Route::get('/admin/mission/vision/delete/{id}', 'MissionController@deleteMission');

// sports route
Route::get('/sport/{sports_slug}', 'frontend\SportsController@index');
Route::get('/admin/sports/create', 'SportsController@create');
Route::post('/admin/sports/store', 'SportsController@storeSports');
Route::get('/admin/sports/show', 'SportsController@showSports');
Route::get('/admin/sports/edit/{id}', 'SportsController@editSports');
Route::post('/admin/sports/update', 'SportsController@updateSports');
Route::get('/admin/sports/delete/{id}', 'SportsController@deleteSports');



//public user send contact message for admin route
Route::post('/user/message/store', 'frontend\ContactController@storeEmail');
Route::get('/admin/message/show', 'ContactController@showEmail');
Route::get('/admin/message/delete/{id}', 'ContactController@deleteEmail');


// public user subscribe route
Route::post('/subpub/subscribe/store', 'frontend\HomeController@storeEmail');
Route::get('/admin/subscribe/show', 'SubscribeController@showEmail');
Route::get('/admin/subscribe/delete/{id}', 'SubscribeController@deleteSub');

//Others Facilities (prosonsha)
// Route::get('/facilities', 'frontend\FacilitieController@index');

Route::get('/admin/teachers/create', 'FacilitieController@create');
Route::post('/admin/teachers/store', 'FacilitieController@storefaci');
Route::get('/admin/teachers/show', 'FacilitieController@showfaci');
Route::get('/admin/teachers/edit/{id}', 'FacilitieController@editfaci');
Route::post('/admin/teachers/update', 'FacilitieController@updatefaci');
Route::get('/admin/teachers/delete/{id}', 'FacilitieController@deleteFaci');

// pdf,xl,doc file download or import route..........
Route::get('/downloads/downloads-file', 'frontend\FiledownloadController@index');

Route::get('/admin/filedownloads/create', 'FiledownloadController@create');
Route::get('/admin/filedownloads/show', 'FiledownloadController@showDownloadFile');
Route::post('/admin/filedownloads/store', 'FiledownloadController@storeDownloadFile');
Route::get('/admin/filedownloads/edit/{id}', 'FiledownloadController@editDownloadFile');
Route::post('/admin/filedownloads/update', 'FiledownloadController@updateDownloadFile');
Route::get('/admin/filedownloads/delete/{id}', 'FiledownloadController@filedelete');













