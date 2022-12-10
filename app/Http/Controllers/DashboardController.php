<?php
namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Guru;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller

{
    public function index()
    {
        $ar_jenis_kelamin = DB::table('siswa')
                ->selectRaw('jenis_kelamin, count(jenis_kelamin) as jumlah')
                ->groupBy('jenis_kelamin')
                ->get();
        $ar_agama = DB::table('siswa')
                ->selectRaw('agama, count(agama) as agamasiswa')
                ->groupBy('agama')
                ->get();
        $ar_gender = DB::table('guru')
                ->selectRaw('gender, count(gender) as genderguru')
                ->groupBy('gender')
                ->get();
        $ar_agamaguru = DB::table('guru')
                ->selectRaw('agama, count(agama) as agamaguru')
                ->groupBy('agama')
                ->get();
        $ar_nilai = DB::table('nilai')
                ->selectRaw('nilai, count(nilai) as hasilnilai')
                ->groupBy('nilai')
                ->get();
        return view('dashboard.index', compact('ar_jenis_kelamin','ar_agama','ar_gender','ar_agamaguru','ar_nilai'));
    }
}
