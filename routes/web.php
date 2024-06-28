<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\SuperAdminAuthController;
use App\Http\Controllers\PagesController;
########################################################################
##########################SHERWIN ROUTES#######################################
Route::get('/about_us', [PagesController::class, 'about'])->name('about');








############################Habib routes#########################################3
Route::get('/home', [PagesController::class, 'home'])->name('homePage');



#####################################SIDDHARTH ROUTES####################################
Route::get('/sport', [PagesController::class, 'sport'])->name('sportcat');
Route::get('/categories_{cat}', [PagesController::class, 'catpage'])->name('categories');



############################################ARPIT ROUTES###########################################




####################################CYPRIAN ROUTES###################################################
Route::get('/product', [PagesController::class, 'product'])->name('product');




####################################AHBIN ROUTES #######################################################






####################################ADITHYA ROUTES########################################################






#####################ARMAND'S ROUTES#################################################
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/product_details_{prod}', [PagesController::class, 'productDetails'])->name('productdets');
Route::get('/subcategories_{prod}', [PagesController::class, 'subcategory'])->name('subcat');
Route::get('/{prod}', [PagesController::class, 'generalsub'])->name('generalsub');

/**General user routes **/
Route::middleware(['auth', 'verified'])->get('/dashboard', [DashboardController::class, 'generalUserDashboard'])->name('dashboard');

/**Admin routes **/
Route::middleware('adminAuth')->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboardShow');
});
Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminAuthController::class, 'login'])->name('adminLogin');
    Route::post('/loginSubmit', [AdminAuthController::class, 'loginSubmit'])->name('adminLoginSubmit');
    Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
});

/**Super Admin routes **/
Route::middleware('superAdminAuth' )->prefix('superAdmin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'superAdminDashboard'])->name('superAdminDashboardShow');
});
Route::prefix('superAdmin')->group(function(){
    Route::get('/login', [SuperAdminAuthController::class, 'login'])->name('superAdminLogin');
    Route::post('/loginSubmit', [SuperAdminAuthController::class, 'loginSubmit'])->name('superAdminLoginSubmit');
    Route::get('/logout', [SuperAdminAuthController::class, 'superAdminLogout'])->name('superAdminLogout');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
##########################################################################################################
