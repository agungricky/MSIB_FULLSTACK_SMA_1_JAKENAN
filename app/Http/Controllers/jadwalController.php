<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = DB::table('jadwal')
            ->join('guru', 'jadwal.guru_id', '=', 'guru.id')
            ->join('kelas', 'jadwal.kelas_id', '=', 'kelas.id')
            ->select('jadwal.*', 'guru.nama AS guru', 'kelas.kelas AS kelas')
            ->orderBy('kelas', 'ASC')
            ->orderBy('Jam', 'ASC')->get();
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr_hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        return view('jadwal.form_jadwal', compact('arr_hari'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('jadwal')->insert(
            [
                'Hari' => $request->hari,
                'Jam' => $request->Jam,
                'kelas_id' => $request->kelas,
                'Mapel' => $request->mapel,
                'guru_id' => $request->guru
            ]
        );
        return redirect()->route('jadwal.store')
            ->with('success', 'Data Jadwal Baru Berhasil Disimpan');
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
        $data = DB::table('jadwal')
            ->join('guru', 'jadwal.guru_id', '=', 'guru.id')
            ->join('kelas', 'jadwal.kelas_id', '=', 'kelas.id')
            ->select('jadwal.*', 'guru.nama AS guru', 'kelas.kelas AS kelas')
            ->where('jadwal.id', '=', $id)->get();
        return view('jadwal.form_edit_jadwal', compact('data'));
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
        DB::table('jadwal')->where('id', '=', $id)->update(
            [
                'Hari' => $request->hari,
                'Jam' => $request->Jam,
                'mapel' => $request->Mapel,
                'guru' => $request->guru,
                'kelas' => $request->kelas,
            ]

        );
        return redirect('/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Jadwal::find($id);
        Jadwal::where('id', $id)->delete();
        return redirect()->route('jadwal.index')
            ->with('success', 'Data Siswa Berhasil Dihapus');
    }

    public function search_jadwal(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;

        $jadwal = DB::table('jadwal')
            ->join('guru', 'jadwal.guru_id', '=', 'guru.id')
            ->join('kelas', 'jadwal.kelas_id', '=', 'kelas.id')
            ->select('jadwal.*', 'guru.nama AS guru', 'kelas.kelas AS kelas')
            ->orderBy('kelas', 'ASC')
            ->orderBy('Jam', 'ASC')->where('Mapel', 'like', "%" . $keyword . "%")->paginate(25);
        return view('jadwal.index', compact('jadwal'));

        return view('jadwal.index', compact('jadwal'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
