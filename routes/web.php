<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\SliderServicesController;
use App\Http\Controllers\Admin\WorkingAreasController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\SiteImageController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\FounderMessageController;
use App\Http\Controllers\ApointmentController;
use App\Http\Controllers\Admin\ApointmentController as AppApointmentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\LabourController;
use App\Http\Controllers\Admin\PageController;

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


Route::get('/', [HomeController::class, 'index']);

Route::resource('contact-us', ContactController::class);

Route::get('blog', [HomeController::class, 'getBlog']);

Route::get('about', [HomeController::class, 'about']);

Route::get('pages/{slug}', [HomeController::class, 'pages']);

Route::get('teams', [HomeController::class, 'getTeam']);

Route::get('services', [HomeController::class, 'services']);

Route::get('contact', [HomeController::class, 'contact']);

Route::get('blog/{slug}', [HomeController::class, 'blogDescription']);

Route::resource('appointment', ApointmentController::class);




Auth::routes();



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('logout', [LoginController::class, 'logout']);

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::prefix('admin')->group(function () {
    Route::resource('sliders', SliderController::class);
    Route::post('sliders/{slider}', [SliderController::class, 'update']);

    Route::resource('services', ServicesController::class);
    Route::post('services/{service}', [ServicesController::class, 'update']);

    Route::resource('teams', TeamController::class);
    Route::post('teams/{team}', [TeamController::class, 'update']);

    Route::resource('site-info', SiteSettingController::class);
    Route::post('site-info/{site_info}', [SiteSettingController::class, 'update']);

    Route::resource('seo', SeoSettingController::class);
    Route::post('seo/{seo}', [SeoSettingController::class, 'update']);

    Route::resource('slider-services', SliderServicesController::class);
    Route::post('slider-services/{slider_services}', [SliderServicesController::class, 'update']);

    Route::resource('working-areas', WorkingAreasController::class);
    Route::post('working-areas/{working_areas}', [WorkingAreasController::class, 'update']);

    Route::resource('missions', MissionController::class);
    Route::post('missions/{mission}', [MissionController::class, 'update']);

    Route::resource('site-image', SiteImageController::class);
    Route::post('site-image/{site_image}', [SiteImageController::class, 'update']);

    Route::resource('about', AboutController::class);
    Route::post('about/{about}', [AboutController::class, 'update']);

    Route::resource('testimonial', TestimonialController::class);
    Route::post('testimonial/{testimonial}', [TestimonialController::class, 'update']);

    Route::resource('founder-message', FounderMessageController::class);
    Route::post('founder-message/{founder_message}', [FounderMessageController::class, 'update']);

    Route::resource('user-appointment', AppApointmentController::class);

    Route::resource('category', CategoryController::class);
    Route::post('category/{category}', [CategoryController::class, 'update']);

    Route::resource('blog', BlogController::class);
    Route::post('blog/{blog}', [BlogController::class, 'update']);

    Route::resource('contact', ContactUsController::class);

    Route::resource('labour-management', LabourController::class);
    Route::post('labour-management/{labour_management}', [LabourController::class, 'update']);

    Route::resource('pages', PageController::class);
    Route::post('pages/{page}', [PageController::class, 'update']);

    Route::get('change/password',[AccountController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('changePassword',[AccountController::class, 'changePassword'])->name('changePassword');


});


