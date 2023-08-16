<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AdminUserController;
use App\Http\Controllers\backend\AdminSellerController;
use App\Http\Controllers\MessageController;
use Illuminate\Contracts\Session\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/search', function () {
    return view('website.search');
});

Route::get('/register', function () {
    return view('website.register');
});
Route::get('/login', function () {
    return view('website.login');
});

Route::get('/seller', function () {
    return view('website.seller_register');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/seller-profile', 'sellerProfile');
    Route::post('/seller-profile', 'sellerProfileEdit');
    Route::post('/seller-photo-update', 'sellerPhotoUpdate');
    Route::get('/user-profile', 'userProfile');

    Route::get('/pricing-table', 'pricingTable');
    Route::post('/pricing-subscription-upload', 'pricingSubscriptionUpload');


    Route::post('/user-profile', 'userProfileEdit');
    Route::get('/member-single/{id}', 'singleMember');
});
Route::controller(MessageController::class)->group(function () {
    Route::get('messages', 'index');
    Route::post('send-message', 'sendMessage');
});

// for Admin section Start

Route::get('/admincon', function () {
    return view('admin.login');
});
Route::post('/admincon', [AdminController::class, 'adminLogin'])->name('check.admin');


Route::group(['middleware' => ['adminsession']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/register', [AuthController::class, 'registersave'])->name('save.register');
    Route::post('/login', [AuthController::class, 'login'])->name('check.login');
    Route::post('/seller', [AuthController::class, 'Sellerregister'])->name('save.seller_register');

    Route::get('/admincon/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/adminlogout', [AdminController::class, 'logout']);

    Route::get('/admincon/allseller', [AdminSellerController::class, 'listseller']);

    Route::controller(AdminSellerController::class)->group(function () {
        Route::get('admincon/pricing-config', 'pricingConfig');
        Route::get('admincon/pricing-subscription', 'pricingSubscription');
        Route::get('admincon/pricing-subscription/{id}', 'pricingSubscriptionApprove');
        Route::post('admincon/price-update/{slug}', 'priceUpdate');
    });

    Route::get('/admincon/allusers', [AdminUserController::class, 'list']);
    Route::post('/admincon/userSave', [AdminUserController::class, 'save'])->name('save.user');
    Route::get('/admincon/userDelete/{id?}', [AdminUserController::class, 'delete'])->name('delete.user');
    Route::get('/admincon/userForm/{end?}', [AdminUserController::class, 'new'])->name('form.user');
});
