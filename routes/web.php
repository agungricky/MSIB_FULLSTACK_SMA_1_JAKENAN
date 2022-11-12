<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

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
//     return view('welcome');
// });


// ------------- Routing LandingPage ------------
Route::get('/', function () {
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/portofolio', function () {
    return view('landingpage.portofolio');
});

Route::get('/contact', function () {
    return view('landingpage.contact');
});

// ------------- Routing Admin Page ------------
Route::get('/administrator', function () {
    return view('admin.dasboard');
});

Route::get('/form', function () {
    return view('admin.form');
});

Route::get('/guru', function () {
    return view('admin.guru');
});

Route::get('/form_siswa', function () {
    return view('admin.form_siswa');
});
Route::get('/form_guru', function () {
    return view('admin.form_guru');
});

Route::get('/siswa', function () {
    return view('admin.siswa');
});
Route::get('/mapel', function () {
    return view('admin.mapel');
});
Route::get('/form_mapel', function () {
    return view('admin.form_mapel');
});
Route::get('/kalender', function () {
    return view('admin.kalender');
});

Route::resource('staff', StaffController::class);
