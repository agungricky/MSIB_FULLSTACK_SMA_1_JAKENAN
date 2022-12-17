<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\tugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\sppController;
use App\Http\Controllers\userController;
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

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/portofolio', function () {
    return view('landingpage.portofolio');
});

Route::get('/contact', function () {
    return view('landingpage.contact');
});

Route::get('/prestasi', function () {
    return view('landingpage.prestasi');
});

Route::get('/siswabaru', function () {
    return view('landingpage.siswabaru');
});

// ------------- Routing Admin Page ------------
Route::get('/administrator', function () {
    return view('admin.dasboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::get(
    'dashboard',
    [DashboardController::class, 'index']
);


Route::get('/laporan_akademik', function () {
    return view('admin.laporan_akademik');
});

// Route::get('/guru', function () {
//     return view('admin.guru');
// });

Route::get('/form_siswa', function () {
    return view('siswa.form_siswa1');
});
Route::get('/form_siswa', [App\Http\Controllers\siswaController::class, 'create']);

Route::get('/form_guru', function () {
    return view('guru.form_guru');
});

// Route::get('/form_siswa', 'siswaController::class');

// Route::get('/siswa', function () {
//     return view('admin.siswa');
// });
Route::get('/tugas', function () {
    return view('tugas.index');
});

Route::get('/form_tugas', function () {
    return view('tugas.form_tugas');
});

// Route::get('/tugas/{id}/edit', [App\Http\Controllers\tugasController::class, 'create']);

// Route::get('/form_edit_tugas', [App\Http\Controllers\tugasController::class, 'create']);

Route::get('/form_jadwal', function () {
    return view('jadwal.form_jadwal');
});

Route::get('/jadwal', function () {
    return view('jadwal.index');
});

Route::get('/spp', function () {
    return view('spp.index');
});


Route::get('/form_spp', function () {
    return view('spp.form_spp');
});

// Route::get('/mapel', function () {
//     return view('mapel.mapel');
// });
// Route::get('/form_mapel', function () {
//     return view('mapel.form_mapel');
// });
Route::get('/kalender', function () {
    return view('kalender_akademik.kalender');
});


Route::get('/event', function () {
    return view('event.index');
});


// Route::get('/kalender', function () {
//     return view('admin.kalender');
// });

// Route::get('/mapel', function () {
//     return view('mapel.mapel');
// });
// Route::get('/form_mapel', function () {
//     return view('mapel.form_mapel');
// });
Route::get('/kalender', function () {
    return view('kalender_akademik.kalender');
});


Route::get('/form_kelas', function () {
    return view('kelas.form_kelas');
});

Route::get('/nilai', function () {
    return view('nilai.index');
});

Route::get('/form_nilai', function () {
    return view('nilai.form_nilai');
});

// Route::resource('staff', StaffController::class);

Route::resource('siswa', siswaController::class);
Route::get('/search_siswa', [siswaController::class, 'search_siswa'])->name('search_siswa');

Route::resource('guru', guruController::class);
Route::get('/search', [guruController::class, 'search'])->name('search');

Route::resource('/nilai', nilaiController::class);
Route::get('/search_nilai', [nilaiController::class, 'search_nilai'])->name('search_nilai');

Route::resource('/user', userController::class);
Route::get('/search_user', [userController::class, 'search_user'])->name('search_user');


Route::resource('tugas', tugasController::class);
Route::get('/search_tugas', [tugasController::class, 'search_tugas'])->name('search_tugas');

Route::resource('jadwal', jadwalController::class);
Route::get('/search_jadwal', [jadwalController::class, 'search_jadwal'])->name('search_jadwal');

Route::resource('spp', sppController::class);
Route::get('/search_spp', [sppController::class, 'search_spp'])->name('search_spp');

Route::get('generate-pdf', [guruController::class, 'generatePDF']);
Route::get('guru-pdf', [guruController::class, 'guruPDF']);

Route::get('exportguru', [guruController::class, 'guruExcel']);

Route::resource('kelas', kelasController::class);

Route::resource('event', eventController::class);
Route::get('/search_event', [eventController::class, 'search_event'])->name('search_event');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/api-guru', [guruController::class, 'apiGuru']);
Route::get('/api-guru/{id}', [guruController::class, 'apiGuruDetail']);

Route::get('/api-kelas', [kelasController::class, 'apiKelas']);
Route::get('/admin/image/guru', [guruController::class . 'deleteImg']);
