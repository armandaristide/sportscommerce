<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\SuperAdminAuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;

########################################################################
##########################SHERWIN ROUTES#######################################
Route::get('/about_us', [PagesController::class, 'about'])->name('about');








############################Habib routes#########################################3
Route::get('/home', [PagesController::class, 'home'])->name('homePage');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');


Route::get('/prodcut-list', [CartController::class, 'index']);
Route::get('/cart-list', [CartController::class, 'cartList']);
Route::post('add-to-cart', [CartController::class, 'addProductToCart'])->name('add-product-to-shopping-cart');
Route::delete('/delete-cart-product', [CartController::class, 'deleteItem'])->name('delete.cart.product');



#####################################SIDDHARTH ROUTES####################################
Route::get('/sport', [PagesController::class, 'sport'])->name('sportcat');
Route::get('/categories_{cat}', [PagesController::class, 'catpage'])->name('categories');
Route::get('/productdetails_{product}', [PagesController::class,'product_details'])->name('productdetails');

############################################ARPIT ROUTES###########################################




####################################CYPRIAN ROUTES###################################################
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/orderhistory', [PagesController::class, 'orderhistory'])->name('orderhistory');
Route::get('/invoicepage', [PagesController::class, 'invoicepage'])->name('invoicepage');


####################################AHBIN ROUTES #######################################################






####################################ADITHYA ROUTES########################################################






#####################ARMAND'S ROUTES#################################################
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/product_details_{prod}', [PagesController::class, 'productDetails'])->name('productdets');
Route::get('/subcategories_{prod}', [PagesController::class, 'subcategory'])->name('subcat');
Route::get('/p_{prod}', [PagesController::class, 'generalsub'])->name('generalsub');

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
    Route::get('/add_category', [DashboardController::class, 'addCategory'])->name('addCategory');
    Route::post('/add_category', [DashboardController::class, 'submitCategory'])->name('submit.addcategory');
    Route::get('/add_product', [DashboardController::class, 'addProduct'])->name('addProduct');
    Route::post('/add_product', [DashboardController::class, 'submitProduct'])->name('submit.addproduct');
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

