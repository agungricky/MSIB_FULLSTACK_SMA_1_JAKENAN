<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tugas;

class tugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tugas = Tugas::all();
        return view('tugas.index', compact('tugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tugas.form_tugas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ============================= Fergi : Upload Tugas =========================
        if (!empty($request->file('upload'))) {
            $nameTugas = 'tugas-' . $request->perihal . '.' . $request->file('upload')->extension();
            //$nameTugas = $request->foto->getClientOriginalName();
            $request->file('upload')->move(public_path('admin/images/tugas'), $nameTugas);
        } else {
            $nameTugas = '';
        }

        DB::table('tugas')->insert(
            [
                'keterangan' => $request->keterangan,
                'jam' => $request->jam,
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'perihal' => $request->perihal,
                'upload' => $nameTugas
            ]
        );

        
        // return redirect('/tugas');
        return redirect()->route('tugas.store')
            ->with('success', 'Data Tugas Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Tugas::find($id);
        return view('tugas.detail_tugas', compact('row'));
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
        $row = Tugas::find($id);
        Tugas::where('id', $id)->delete();
        return redirect()->route('tugas.index')
            ->with('success', 'Data Siswa Berhasil Dihapus');
    }
}
