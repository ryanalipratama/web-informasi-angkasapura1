<?php

use Illuminate\Support\Facades\Route;
use App\Http\middleware\AdminMiddleware;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\CarousellAwalController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AirportTechnologyController;   
use App\Http\Controllers\AirportTechnologyImageController;
use App\Http\Controllers\TakingCareController;
use App\Http\Controllers\VissionMissionTargetController;
use App\Http\Controllers\OurSkillController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\OurServiceDataController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\PeraturanPKLController;
use App\Http\Controllers\DaftarNilaiController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\LearningCenterContentController;
use App\Http\Controllers\UserController;


// Pengunjung
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/airporttechnology', [PageController::class, 'airporttechnology'])->name('pengunjung.airporttechnology');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/ourservice', [PageController::class, 'ourservice'])->name('ourservice');
Route::get('/ourservicedata/{id}', [PageController::class, 'ourservicedata'])->name('ourservicedata');
Route::get('/learningcenter', [PageController::class, 'learningcenter'])->name('learningcenter');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/deskripsiblog/{id}', [PageController::class, 'deskripsiblog'])->name('deskripsiblog');
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
Route::post('/contactus', [ContactUsController::class, 'contactus_store'])->name('contactus.store');
Route::get('/development', [PageController::class, 'development'])->name('development');
Route::get('/developmentdetail/{id}', [PageController::class, 'developmentdetail'])->name('developmentdetail');
Route::get('/fieldindustrialpractice', [Pagecontroller::class, 'fieldindustrialpractice'])->name('fieldindustrialpractice');
Route::get('/planning', [PageController::class, 'planning'])->name('planning');


// User
Route::get('/learningcentercontent', [PageController::class, 'learningcentercontent'])
    ->name('learningcentercontent')
    ->middleware(\App\Http\Middleware\CheckEmailRegistered::class);

//Admin
Route::get('admin/login', [AuthAdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthAdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AuthAdminController::class, 'logout'])->name('admin.logout');


Route::middleware([AdminMiddleware::class])->group(function(){

    // Dashboard (Tampilan Awal Admin)
    Route::get('/admin/dashboard', [HomeAdminController::class, 'dashboard'])->name('admin.dashboard');

    // Carousell Awal
    Route::get('/admin/carousellawal', [CarousellAwalController::class, 'carousellawal'])->name('admin.carousellawal');
    Route::get('/admin/carousellawal_create', [CarousellAwalController::class, 'carousellawal_create'])->name('admin.carousellawal.create');
    Route::post('/admin/carousellawal_store', [CarousellAwalController::class, 'carousellawal_store'])->name('admin.carousellawal.store');
    Route::get('/admin/carousellawal_edit/{id}', [CarousellAwalController::class, 'carousellawal_edit'])->name('admin.carousellawal.edit');
    Route::post('/admin/carousellawal_update/{id}', [CarousellAwalController::class, 'carousellawal_update'])->name('admin.carousellawal.update');
    Route::delete('/admin/carousellawal_delete/{id}', [CarousellAwalController::class, 'carousellawal_delete'])->name('admin.carousellawal.delete');

    // Welcome
    Route::get('/admin/welcome', [WelcomeController::class, 'welcome'])->name('admin.welcome'); 
    Route::get('/admin/welcome_edit/{id}', [WelcomeController::class, 'welcome_edit'])->name('admin.welcome.edit');
    Route::post('/admin/welcome_update/{id}', [WelcomeController::class, 'welcome_update'])->name('admin.welcome.update'); 

    // Taking Care
    Route::get('/admin/takingcare', [TakingCareController::class, 'takingcare'])->name('admin.takingcare');
    Route::get('/admin/takingcare_create', [TakingCareController::class, 'takingcare_create'])->name('admin.takingcare.create');
    Route::post('/admin/takingcare_store', [TakingCareController::class, 'takingcare_store'])->name('admin.takingcare.store');
    Route::get('/admin/takingcare_edit/{id}', [TakingCareController::class, 'takingcare_edit'])->name('admin.takingcare.edit');
    Route::post('/admin/takingcare_update/{id}', [TakingCareController::class, 'takingcare_update'])->name('admin.takingcare.update');
    Route::delete('/admin/takingcare_delete/{id}', [TakingCareController::class, 'takingcare_delete'])->name('admin.takingcare.delete');

    // Airport Technology    
    Route::get('/admin/airporttechnology', [AirportTechnologyController::class, 'airporttechnology'])->name('admin.airporttechnology');
    Route::get('/admin/airporttechnology_edit/{id}', [AirportTechnologyController::class, 'airporttechnology_edit'])->name('admin.airporttechnology.edit');
    Route::post('/admin/airporttechnology_update/{id}', [AirportTechnologyController::class, 'airporttechnology_update'])->name('admin.airporttechnology.update');
    Route::delete('/admin/airporttechnology_delete/{id}', [AirportTechnologyController::class, 'airporttechnology_delete'])->name('admin.airporttechnology.delete');

    Route::get('/admin/airporttechnologyimage', [AirportTechnologyImageController::class, 'airporttechnologyimage'])->name('admin.airporttechnologyimage');
    Route::get('/admin/airporttechnologyimage_create', [AirportTechnologyImageController::class, 'airporttechnologyimage_create'])->name('admin.airporttechnologyimage.create');
    Route::post('/admin/airporttechnologyimage_store', [AirportTechnologyImageController::class, 'airporttechnologyimage_store'])->name('admin.airporttechnologyimage.store');
    Route::get('/admin/airporttechnologyimage_edit/{id}', [AirportTechnologyImageController::class, 'airporttechnologyimage_edit'])->name('admin.airporttechnologyimage.edit');
    Route::post('/admin/airporttechnologyimage_update/{id}', [AirportTechnologyImageController::class, 'airporttechnologyimage_update'])->name('admin.airporttechnologyimage.update');
    Route::delete('/admin/airporttechnologyimage_delete/{id}', [AirportTechnologyImageController::class, 'airporttechnologyimage_delete'])->name('admin.airporttechnologyimage.delete');

    // Our Skill
    Route::get('/admin/ourskill', [OurSkillController::class, 'ourskill'])->name('admin.ourskill');
    Route::get('/admin/ourskill_edit/{id}', [OurSkillController::class, 'ourskill_edit'])->name('admin.ourskill.edit');
    Route::post('/admin/ourskill_update/{id}', [OurSkillController::class, 'ourskill_update'])->name('admin.ourskill.update');

    // Vission Mission Target
    Route::get('/admin/vissionmissiontarget', [VissionMissionTargetController::class, 'vissionmissiontarget'])->name('admin.vissionmissiontarget');
    Route::get('/admin/vissionmissiontarget_edit/{id}', [VissionMissionTargetController::class, 'vissionmissiontarget_edit'])->name('admin.vissionmissiontarget.edit');
    Route::post('/admin/vissionmissiontarget_update/{id}', [VissionMissionTargetController::class, 'vissionmissiontarget_update'])->name('admin.vissionmissiontarget.update');

    // About Us
    Route::get('/admin/aboutus', [AboutUsController::class, 'aboutus'])->name('admin.aboutus');
    Route::get('/admin/aboutus_edit/{id}', [AboutUsController::class, 'aboutus_edit'])->name('admin.aboutus.edit');
    Route::post('/admin/aboutus_update/{id}', [AboutUsController::class, 'aboutus_update'])->name('admin.aboutus.update');

    // Our Service
    Route::get('/admin/ourservice', [OurServiceController::class, 'ourservice'])->name('admin.ourservice');
    Route::get('/admin/ourservice_edit/{id}', [OurServiceController::class, 'ourservice_edit'])->name('admin.ourservice.edit');
    Route::post('/admin/ourservice_update/{id}', [OurServiceController::class, 'ourservice_update'])->name('admin.ourservice.update');

    Route::get('/admin/ourservicedata', [OurServiceDataController::class, 'ourservicedata'])->name('admin.ourservicedata');
    Route::get('/admin/ourservicedata_create', [OurServiceDataController::class, 'ourservicedata_create'])->name('admin.ourservicedata.create');
    Route::post('/admin/ourservicedata_store', [OurServiceDataController::class, 'ourservicedata_store'])->name('admin.ourservicedata.store');
    Route::get('/admin/ourservicedata_edit/{id}', [OurServiceDataController::class, 'ourservicedata_edit'])->name('admin.ourservicedata.edit');
    Route::post('/admin/ourservicedata_update/{id}', [OurServiceDataController::class, 'ourservicedata_update'])->name('admin.ourservicedata.update');
    Route::delete('/admin/ourservicedata_delete/{id}', [OurServiceDataController::class, 'ourservicedata_delete'])->name('admin.ourservicedata.delete');

    // Contact Us
    Route::get('/admin/contactus', [ContactUsController::class, 'contactus'])->name('admin.contactus');
    Route::delete('/admin/contactus_delete/{id}', [ContactUsController::class, 'contactus_delete'])->name('admin.contactus.delete');

    // Blog
    Route::get('/admin/blog', [BlogController::class, 'blog'])->name('admin.blog');
    Route::get('/admin/blog_create', [BlogController::class, 'blog_create'])->name('admin.blog.create');
    Route::post('/admin/blog_store', [BlogController::class, 'blog_store'])->name('admin.blog.store');
    Route::get('/admin/blog_edit/{id}', [BlogController::class, 'blog_edit'])->name('admin.blog.edit');
    Route::post('/admin/blog_update/{id}', [BlogController::class, 'blog_update'])->name('admin.blog.update');
    Route::delete('/admin/blog_delete/{id}', [BlogController::class, 'blog_delete'])->name('admin.blog.delete');

    // Development
    Route::get('/admin/development', [DevelopmentController::class, 'development'])->name('admin.development');
    Route::get('/admin/development_create', [DevelopmentController::class, 'development_create'])->name('admin.development.create');
    Route::post('/admin/development_store', [DevelopmentController::class, 'development_store'])->name('admin.development.store');
    Route::get('/admin/development_edit/{id}', [DevelopmentController::class, 'development_edit'])->name('admin.development.edit');
    Route::post('/admin/development_update/{id}', [DevelopmentController::class, 'development_update'])->name('admin.development.update');
    Route::delete('/admin/development_delete/{id}', [DevelopmentController::class, 'development_delete'])->name('admin.development.delete');

    // Peraturan PKL
    Route::get('/admin/peraturanpkl', [PeraturanPklController::class, 'peraturanpkl'])->name('admin.peraturanpkl');
    Route::get('/admin/peraturanpkl_create', [PeraturanPklController::class, 'peraturanpkl_create'])->name('admin.peraturanpkl.create');
    Route::post('/admin/peraturanpkl_store', [PeraturanPklController::class, 'peraturanpkl_store'])->name('admin.peraturanpkl.store');
    Route::get('/admin/peraturanpkl_edit/{id}', [PeraturanPklController::class, 'peraturanpkl_edit'])->name('admin.peraturanpkl.edit');
    Route::post('/admin/peraturanpkl_update/{id}', [PeraturanPklController::class, 'peraturanpkl_update'])->name('admin.peraturanpkl.update');
    Route::delete('/admin/peraturanpkl_delete/{id}', [PeraturanPklController::class, 'peraturanpkl_delete'])->name('admin.peraturanpkl.delete');

    // Daftar Nilai
    Route::get('/admin/daftarnilai', [DaftarNilaiController::class, 'daftarnilai'])->name('admin.daftarnilai');
    Route::get('/admin/daftarnilai_create', [DaftarNilaiController::class, 'daftarnilai_create'])->name('admin.daftarnilai.create');
    Route::post('/admin/daftarnilai_store', [DaftarNilaiController::class, 'daftarnilai_store'])->name('admin.daftarnilai.store');
    Route::get('/admin/daftarnilai_edit/{id}', [DaftarNilaiController::class, 'daftarnilai_edit'])->name('admin.daftarnilai.edit');
    Route::post('/admin/daftarnilai_update/{id}', [DaftarNilaiController::class, 'daftarnilai_update'])->name('admin.daftarnilai.update');
    Route::delete('/admin/daftarnilai_delete/{id}', [DaftarNilaiController::class, 'daftarnilai_delete'])->name('admin.daftarnilai.delete');

    // Planning
    Route::get('/admin/planning', [PlanningController::class, 'planning'])->name('admin.planning');
    Route::get('/admin/planning_create', [PlanningController::class, 'planning_create'])->name('admin.planning.create');
    Route::post('/admin/planning_store', [PlanningController::class, 'planning_store'])->name('admin.planning.store');
    Route::get('/admin/planning_edit/{id}', [PlanningController::class, 'planning_edit'])->name('admin.planning.edit');
    Route::post('/admin/planning_update/{id}', [PlanningController::class, 'planning_update'])->name('admin.planning.update');
    Route::delete('/admin/planning_delete/{id}', [PlanningController::class, 'planning_delete'])->name('admin.planning.delete');

    // Learning Center Content
    Route::get('/admin/learningcentercontent', [LearningCenterContentController::class, 'learningcentercontent'])->name('admin.learningcentercontent');
    Route::get('/admin/learningcentercontent_create', [LearningCenterContentController::class, 'learningcentercontent_create'])->name('admin.learningcentercontent.create');
    Route::post('/admin/learningcentercontent_store', [LearningCenterContentController::class, 'learningcentercontent_store'])->name('admin.learningcentercontent.store');
    Route::get('/admin/learningcentercontent_edit/{id}', [LearningCenterContentController::class, 'learningcentercontent_edit'])->name('admin.learningcentercontent.edit');
    Route::post('/admin/learningcentercontent_update/{id}', [LearningCenterContentController::class, 'learningcentercontent_update'])->name('admin.learningcentercontent.update');
    Route::delete('/admin/learningcentercontent_delete/{id}', [LearningCenterContentController::class, 'learningcentercontent_delete'])->name('admin.learningcentercontent.delete');

    // Register user
    Route::get('admin/user', [UserController::class, 'user'])->name('admin.user');
    Route::get('/admin/user_create', [UserController::class, 'user_create'])->name('admin.user.create');
    Route::post('/admin/user_store', [UserController::class, 'user_store'])->name('admin.user.store');
    Route::delete('/admin/user_delete/{id}', [UserController::class, 'user_delete'])->name('admin.user.delete');

});
