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
Route::post('/cart', [PagesController::class, 'submitcart'])->name('submit.cart');
Route::get('/delete_cart_{id}', [PagesController::class, 'deleteCart'])->name('delete.cart');


//superAdmin

//Route::get('/prodcut-list', [CartController::class, 'index']);
//Route::get('/cart-list', [CartController::class, 'cartList']);
//Route::post('add-to-cart', [CartController::class, 'addProductToCart'])->name('add-product-to-shopping-cart');
//Route::delete('/delete-cart-product', [CartController::class, 'deleteItem'])->name('delete.cart.product');
//


#####################################SIDDHARTH ROUTES####################################
Route::get('/sport', [PagesController::class, 'sport'])->name('sportcat');
Route::get('/categories_{cat}', [PagesController::class, 'catpage'])->name('categories');
############################################ARPIT ROUTES###########################################




####################################CYPRIAN ROUTES###################################################
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/orderhistory', [PagesController::class, 'orderhistory'])->name('orderhistory');
Route::get('/invoicepage_{id}', [PagesController::class, 'invoicepage'])->name('invoicepage');


####################################AHBIN ROUTES #######################################################






####################################ADITHYA ROUTES########################################################






#####################ARMAND'S ROUTES#################################################
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/product_details_{prod}', [PagesController::class, 'productDetails'])->name('productdets');
Route::post('/buy_now{prod}', [PagesController::class, 'buyNow'])->name('buy.now');
Route::get('/subcategories_{prod}', [PagesController::class, 'subcategory'])->name('subcat');
Route::get('/all_{prod}', [PagesController::class, 'generalsub'])->name('generalsub');

/**General user routes **/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'generalUserDashboard'])->name('dashboard');
    Route::get('/reset_user_password_{verify}', [PasswordController::class, 'resetUserPassword'])->name('reset.userpassword');

    Route::get('/user/profile/edit', [DashboardController::class, 'editUserProfilePage'])->name('userProfileEditPage');
    Route::post('/user/profile/edit', [DashboardController::class, 'editUserProfile'])->name('userProfileEdit');
});

/**Admin routes **/
Route::middleware(['adminAuth','verified'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboardShow');

    Route::post('/edit_profile{id}', [DashboardController::class, 'editProfile'])->name('submit.editprofile');
    Route::get('/add_category', [DashboardController::class, 'addCategory'])->name('addCategory');
    Route::get('/edit_category_{id}', [DashboardController::class, 'editCategory'])->name('editCategory');
    Route::post('/edit_category_{id}', [DashboardController::class, 'submitEditCategory'])->name('submit.editCategory');
    Route::get('/delete_category_{id}', [DashboardController::class, 'deleteCategory'])->name('deleteCategory');
    Route::post('/add_category', [DashboardController::class, 'submitCategory'])->name('submit.addcategory');
    Route::get('/add_product', [DashboardController::class, 'addProduct'])->name('addProduct');
    Route::post('/add_product', [DashboardController::class, 'submitProduct'])->name('submit.addproduct');
    Route::get('/edit_product_{id}', [DashboardController::class, 'editProduct'])->name('editProduct');
    Route::post('/edit_product_{id}', [DashboardController::class, 'submitEditProduct'])->name('submit.editproduct');
    Route::get('/delete_product_{id}', [DashboardController::class, 'deleteProduct'])->name('deleteProduct');


});


Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminAuthController::class, 'login'])->name('adminLogin');
    Route::post('/loginSubmit', [AdminAuthController::class, 'loginSubmit'])->name('adminLoginSubmit');
    Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
});


Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminAuthController::class, 'login'])->name('adminLogin');
    Route::post('/loginSubmit', [AdminAuthController::class, 'loginSubmit'])->name('adminLoginSubmit');
    Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
});

/**Super Admin routes **/
Route::middleware('superAdminAuth' )->prefix('superAdmin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'superAdminDashboard'])->name('superAdminDashboardShow');

    //add and edit routes
    Route::get('/add-seller', [DashboardController::class, 'addSellerPage'])->name('add.seller');
    Route::post('/addseller', [DashboardController::class, 'addSeller'])->name('addseller');
    Route::get('/edit-seller-{id}', [DashboardController::class, 'editSellerPage'])->name('edit.seller');
    Route::post('/edit-seller-{id}', [DashboardController::class, 'editSeller'])->name('editseller');
    Route::delete('/deleteseller/{id}', [DashboardController::class, 'deleteSeller'])->name('delete.seller');
    Route::get('/add_product', [DashboardController::class, 'addSuperProduct'])->name('addsuperProduct');
    Route::post('/add_product', [DashboardController::class, 'submitSupperProduct'])->name('submit.addsuperproduct');
    Route::delete('/add_product-{id}', [DashboardController::class, 'deletesuperProduct'])->name('delete.superproduct');
    Route::get('/edit-super-admin-{id}', [DashboardController::class, 'editsuperadmin'])->name('edit.superadmin');
    Route::post('/edit-super-admin-{id}', [DashboardController::class, 'editsuperadmindeds'])->name('editsuperadmin');



});
Route::prefix('superAdmin')->group(function(){
    Route::get('/login', [SuperAdminAuthController::class, 'login'])->name('superAdminLogin');
    Route::post('/loginSubmit', [SuperAdminAuthController::class, 'loginSubmit'])->name('superAdminLoginSubmit');
    Route::delete('/logout', [SuperAdminAuthController::class, 'superAdminLogout'])->name('superAdminLogout');


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

