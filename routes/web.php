<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
};
use App\Http\Controllers\PropluspaypalcheckoutController;
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
//     return view('Sections.home');
// });

Route::get('/', [App\Http\Controllers\FrontuserController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontuserController::class, 'about']);
Route::get('/product', [App\Http\Controllers\FrontuserController::class, 'products']);
Route::get('/team', [App\Http\Controllers\FrontuserController::class, 'team']);
Route::get('/whyus', [App\Http\Controllers\FrontuserController::class, 'whyus']);
Route::get('/contect', [App\Http\Controllers\FrontuserController::class, 'contect']);

Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/frontdashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
// Route::get('/admin/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});




Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'], // You may need to customize the middleware name
], function () {

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');



    
//Products 
Route::get('/createproducts', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/storeproducts', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/viewproducts', [App\Http\Controllers\ProductController::class, 'view']);
Route::get('/editproducts/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/updateproducts/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('/deleteproducts/{id}', [App\Http\Controllers\ProductController::class, 'delete']);


//Courses 
Route::get('/createcourses', [App\Http\Controllers\CoursesController::class, 'create']);
Route::post('/storecourses', [App\Http\Controllers\CoursesController::class, 'store']);
Route::get('/viewcourses', [App\Http\Controllers\CoursesController::class, 'view']);
Route::get('/editcourses/{id}', [App\Http\Controllers\CoursesController::class, 'edit']);
Route::post('/updatecourses/{id}', [App\Http\Controllers\CoursesController::class, 'update']);
Route::get('/deletecourses/{id}', [App\Http\Controllers\CoursesController::class, 'delete']);



//Hireus 
Route::get('/createhireus', [App\Http\Controllers\HireusController::class, 'create']);
Route::post('/storehireus', [App\Http\Controllers\HireusController::class, 'store']);
Route::get('/viewhireus', [App\Http\Controllers\HireusController::class, 'view']);
Route::get('/edithireus/{id}', [App\Http\Controllers\HireusController::class, 'edit']);
Route::post('/updatehireus/{id}', [App\Http\Controllers\HireusController::class, 'update']);
Route::get('/deletehireus/{id}', [App\Http\Controllers\HireusController::class, 'delete']);


//Users 
Route::get('/createusers', [App\Http\Controllers\AdminController::class, 'create']);
Route::post('/storeusers', [App\Http\Controllers\AdminController::class, 'store']);
Route::get('/viewusers', [App\Http\Controllers\AdminController::class, 'view']);
Route::get('/editusers/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
Route::post('/updateusers/{id}', [App\Http\Controllers\AdminController::class, 'update']);
Route::get('/deleteusers/{id}', [App\Http\Controllers\AdminController::class, 'delete']);



});



// paypal


Route::get('/add-to-cart/{id}', [App\Http\Controllers\PropluspaypalcheckoutController::class, 'addToCart'])->name('add-to-cart');


Route::get('/viewCart', [App\Http\Controllers\PropluspaypalcheckoutController::class, 'view']);


Route::get('/incCart/{id}', [App\Http\Controllers\PropluspaypalcheckoutController::class, 'increaseByone'])->name('increase');
Route::get('/decCart/{id}', [App\Http\Controllers\PropluspaypalcheckoutController::class, 'decreaseByOne'])->name('decrease');

Route::get('/checkout-page', [App\Http\Controllers\PropluspaypalcheckoutController::class, 'checkOut'])->name('checkout');

Route::post('pay', [PropluspaypalcheckoutController::class, 'pay'])->name('payment');

Route::get('success', [PropluspaypalcheckoutController::class, 'success']); 

 Route::get ('error', [PropluspaypalcheckoutController::class, 'error']);


//  google

Route::get ('/googlelogin', [App\Http\Controllers\MailsettingController::class, 'googlelogin'])->name('googlelogin');

Route::get ('/front/auth/google/callback', [App\Http\Controllers\MailsettingController::class, 'googlehandel']);