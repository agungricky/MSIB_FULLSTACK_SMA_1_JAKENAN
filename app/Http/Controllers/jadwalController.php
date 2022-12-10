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
        $jadwal = Jadwal::all();
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

        // $request->validate(
        //     [
        //         'Hari' => 'required',
        //         'Jam' => 'required',
        //         'Kelas' => 'required',
        //         'Mapel' => 'required'
        //     ]
        // );

        DB::table('jadwal')->insert(
            [
                'hari' => $request->hari,
                'Jam' => $request->jam,
                'Kelas' => $request->kodeKelas,
                'Mapel' => $request->mapel,
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
        $data = DB::table('jadwal')->where('id', '=', $id)->get();
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
                'Jam' => $request->jam,
                'Kelas' => $request->kodeKelas,
                'Mapel' => $request->mapel,
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
        return redirect()->route('tugas.index')
            ->with('success', 'Data Siswa Berhasil Dihapus');
    }
}
