<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = DB::table('nilai')
            ->join('guru', 'guru.id', '=', 'nilai.id')
            ->join('tugas', 'tugas.id', '=', 'nilai.id')
            ->join('siswa', 'siswa.id', '=', 'nilai.id')
            ->select('nilai.*', 'guru.nama AS guru', 'tugas.perihal AS tugas', 'siswa.nama_siswa AS siswa')->get();
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search_nilai(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $nilai = DB::table('nilai')
            ->join('guru', 'guru.id', '=', 'nilai.id')
            ->join('tugas', 'tugas.id', '=', 'nilai.id')
            ->join('siswa', 'siswa.id', '=', 'nilai.id')
            ->select('nilai.*', 'guru.nama AS guru', 'tugas.perihal AS tugas', 'siswa.nama_siswa AS siswa')->where('siswa.nama_siswa', 'like', "%" . $keyword . "%")->paginate(25);
        return view('nilai.index', compact('nilai'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
