<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;



Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/location', function () {
    return view('location');
})->name('location');


Route::get('/MyBookings', [BookingController::class, 'myBookings'])->name('booking.myBookings');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');




Route::group(['middleware' => ['auth', 'prevent_back']], function () {

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/services', [AdminServiceController::class, 'index'])->name('admin.services.index');
Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
});


Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.admin-login');
Route::post('admin/login', [LoginController::class, 'login']);
Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::patch('/booking/{id}', [BookingController::class, 'update'])->name('booking.update');

Route::get('/admin/services', [AdminServiceController::class, 'index'])->name('admin.services.index');
Route::post('/admin/services', [AdminServiceController::class, 'store'])->name('service.store');    
Route::get('/admin/services/{service}/edit', [AdminServiceController::class, 'edit'])->name('admin.services.edit');
Route::put('/admin/services/{service}', [AdminServiceController::class, 'update'])->name('services.update');
Route::delete('/admin/services/{service}', [AdminServiceController::class, 'destroy'])->name('services.destroy');



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile/edit', [HomeController::class, 'profileEdit'])->name('profile.edit');
    Route::post('/profile/update', [HomeController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/profile/change-password', [HomeController::class, 'changePasswordForm'])->name('profile.change-password');
    Route::post('/profile/change-password', [HomeController::class, 'changePassword'])->name('profile.change-password.update');
});




// Route::get('/services', function () {
//     $services = Service::all();
//     return view('services', ['services' => $services]);
// });


// Route::get('/booknow', function () {
//     return view('booknow');
// })->name('booknow');

// Route::post('/add-service', [ServiceController::class, 'store']);

// Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
// Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');

// Route::get('/admin/dashboard', 'HomeController@index')->name('dashboard');
// Route::get('/profile', 'HomeController@profile')->name('profile');
// Route::get('/profile/edit', 'HomeController@profileEdit')->name('profile.edit');
// Route::put('/profile/update', 'HomeController@profileUpdate')->name('profile.update');
// Route::get('/profile/changepassword', 'HomeController@changePasswordForm')->name('profile.change.password');
// Route::post('/profile/changepassword', 'HomeController@changePassword')->name('profile.changepassword');

// Route::get('/admin-dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
// Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
// Route::get('/profile/edit', [HomeController::class, 'profileEdit'])->name('profile.edit');
// Route::post('/profile/update', [HomeController::class, 'profileUpdate'])->name('profile.update');
// Route::get('/profile/change-password', [HomeController::class, 'changePasswordForm'])->name('profile.change-password');
// Route::post('/profile/change-password', [HomeController::class, 'changePassword'])->name('profile.change-password.update');




// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');



// Route::get('/admin-login', function () {
//     return view('/admin.admin-login');
// })->name('admin-login');

// Route::post('/admin-login', [LoginController::class, 'login'])->name('admin-login');








// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('admin-login');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');


// Route::prefix('admin')->group(function () {
//     Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
//     Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');

//     Route::middleware('admin')->group(function () {
//         Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
//         Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
//         Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
//     });
// });



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
