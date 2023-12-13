<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\DriverController as AdminDriverController;
use App\Http\Controllers\Admin\TripController as AdminTripController;
use App\Http\Controllers\Admin\OwnerController as AdminOwnerController;
use App\Http\Controllers\Admin\SupportController as AdminSupportController;
use App\Http\Controllers\Admin\InsightController as AdminInsightController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\ReportController as AdminReportController;
use App\Http\Controllers\Admin\PromotionController as AdminPromotionController;
use App\Http\Controllers\Admin\EmailSettingController as AdminEmailSettingController;
use App\Http\Controllers\Admin\SendEmailController as AdminSendEmailController;


Route::get('/', function () {
    return view('welcome');
});
///// admin routes
Route::get('/admin-login',[AdminLoginController::class,'login'])->name('admin.login');
Route::post('/post-admin',[AdminLoginController::class,'postLogin'])->name('admin.postLogin');

// Route::middleware([checkAdminLogin::class])->group(function(){
Route::prefix('admin')->name('admin.')->middleware([checkAdminLogin::class])->group(function () {
    Route::get('logout',[AdminLoginController::class,'logout'])->name('logout');
    Route::get('dashboard',[AdminDashboardController::class,'dashboard'])->name('dashboard');

    Route::prefix('user-management')->name('user-management.')->group(function () {
        Route::get('user/index',[AdminUserController::class,'index'])->name('user.index');
        Route::get('user/detail',[AdminUserController::class,'detail'])->name('user.detail');
        Route::get('user-onboarding/index',[AdminUserController::class,'indexOnboarding'])->name('user.indexOnboarding');
        Route::get('user-onboarding/detail',[AdminUserController::class,'detailOnboarding'])->name('user.detailOnboarding');

    });
    Route::prefix('driver-management')->name('driver-management.')->group(function () {
        Route::get('driver/index',[AdminDriverController::class,'index'])->name('driver.index');
        Route::get('driver/detail',[AdminDriverController::class,'detail'])->name('driver.detail');
        Route::get('driver-onboarding/index',[AdminDriverController::class,'indexOnboarding'])->name('driver.indexOnboarding');
        Route::get('driver-onboarding/detail',[AdminDriverController::class,'detailOnboarding'])->name('driver.detailOnboarding');

    });
    Route::prefix('trip-management')->name('trip-management.')->group(function () {
        Route::get('index',[AdminTripController::class,'index'])->name('index');
        Route::get('detail',[AdminTripController::class,'detail'])->name('detail');
    });
    Route::prefix('owner-management')->name('owner-management.')->group(function () {
        Route::get('index',[AdminOwnerController::class,'index'])->name('index');
        Route::get('detail',[AdminOwnerController::class,'detail'])->name('detail');
    });
    Route::prefix('support-management')->name('support-management.')->group(function () {
        Route::get('index',[AdminSupportController::class,'index'])->name('index');
        Route::get('detail',[AdminSupportController::class,'detail'])->name('detail');
    });
    Route::prefix('report-management')->name('report-management.')->group(function () {
        Route::get('index',[AdminReportController::class,'index'])->name('index');
    });
    Route::prefix('insight-management')->name('insight-management.')->group(function () {
        Route::get('index',[AdminInsightController::class,'index'])->name('index');
    });
    Route::prefix('payment-management')->name('payment-management.')->group(function () {
        Route::get('index',[AdminPaymentController::class,'index'])->name('index');
    });
    Route::prefix('promotion-management')->name('promotion-management.')->group(function () {
        Route::get('index',[AdminPromotionController::class,'index'])->name('index');
    });
    Route::prefix('email-setting-management')->name('email-setting-management.')->group(function () {
        Route::get('index',[AdminEmailSettingController::class,'index'])->name('index');
        Route::get('create',[AdminEmailSettingController::class,'create'])->name('create');
        Route::get('edit',[AdminEmailSettingController::class,'edit'])->name('edit');
    });
    Route::prefix('send-email-management')->name('send-email-management.')->group(function () {
        Route::get('index',[AdminSendEmailController::class,'index'])->name('index');
    });

});
