<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\DasboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



// Route::get('/guru', function () {
//     return view('admin.guru');
// });

Route::get('/form_siswa', function () {
    return view('siswa.form_siswa');
});
Route::get('/form_guru', function () {
    return view('guru.form_guru');
});

// Route::get('/siswa', function () {
//     return view('admin.siswa');
// });
Route::get('/mapel', function () {
    return view('mapel.mapel');
});
Route::get('/form_mapel', function () {
    return view('mapel.form_mapel');
});
Route::get('/kalender', function () {
    return view('kalender_akademik.kalender');
});


Route::resource('staff', StaffController::class);

Route::resource('siswa', siswaController::class);

Route::resource('guru', guruController::class);



// Route::resource('mapel', mapelController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', function () {
    return view('Layout.user');
});
