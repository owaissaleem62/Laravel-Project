<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newcontroller;


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

// Route::get('/about-us', function () {
//     return view('about-us');
// });

Route::controller(newcontroller::class)->group(function(){
    Route::get('/', "homePg");
    Route::get('/about-us', "about");
    Route::get('/blogLeft', "blogLeft");
    Route::get('/cart', "cart");
    Route::get('/checkout', "chackOut");
    //
    Route::get('/compare', "compare");
    Route::get('/contact', "contact");
    Route::get('/faq', "faq");
    Route::get('/Login-Register', "loginRegister");
    Route::get('/product-Details', "productDetail");
    Route::get('/shopping-cart', "shoppingCart");
    Route::get('/Single-Product', "singleProduct");
    Route::get('/Wishlist', "wishlist");
    Route::get('/Shop', "shopLeft");


    //
    // Route::get('/Affiliate', "singleAffiliate");
    // Route::get('/Single-product-Carousal', "singleCarousal");
    // Route::get('/Single-Gallery-Left', "singleGalleryLeft");
    //
    // Route::get('/Single-Gallery-Right', "singleGalleryRight");
    // Route::get('/Single-Product-Group', "singleProductGroup");
    // Route::get('/Single-Product-Normal', "singleProductNormal");
    // Route::get('/Single-Product-Sale', "singleProductSale");
    //
    // Route::get('/Single-Product-Tab-Left', "singleProductTabLeft");
    // Route::get('/Single-Product-Tab-Right', "singleProductTabRight");
    // Route::get('/Single-Product-Tab-Top', "singleProductTabTop");

}
);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
