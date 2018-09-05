<?php

namespace App\Providers;
use App\Http\Controllers\Helper\SchoolHelperController;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema; // At the top of your file

class AppServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // load Academic notice
        $this->loadAcademicNotice();
        // load Academic notice
        // $this->loadAcademicNotice();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    // load academic general notice
    public function loadAcademicNotice(){
        // json body information
        $json = [
            'institute'=>SchoolHelperController::getInstituteId(),
            'campus'=>SchoolHelperController::getCampusId(),
            'user'=>1, // general notice type
            'return_type'=>'json'
        ];
        // result url
        $url = SchoolHelperController::getEmsUrl().'/api/get-academic-notice-list';
        // return academic level list
        $noticeList = SchoolHelperController::myGuzzleRequest('POST', $url, $json);
        // share notice with view
        view()->share('noticeList', $noticeList);
    }

    // load academic general notice
    public function loadAcademicTeacherList(){
         // json body information
        $json = ['institute'=>$this->schoolHelper->getInstituteId(), 'campus'=>$this->schoolHelper->getCampusId(), 'category'=>1, 'return_type'=>'json'];
        // academic employee list
        $teacherList = $this->schoolHelper->getEmployeeList($json);
        // share notice with view
        view()->share('teacherList', $teacherList);
    }
}
