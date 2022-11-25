<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller

{
    public function index()
    {
        $ar_NIS = DB::table('siswa')->select('nama_siswa', 'NIS')->get();
        $ar_jenis_kelamin = DB::table('siswa')
            ->selectRaw('jenis_kelamin, count(jenis_kelamin) as jumlah')
            ->groupBy('jenis_kelamin')
            ->get();
        return view('dashboard.index', compact('ar_NIS', 'ar_jenis_kelamin'));
    }
}
