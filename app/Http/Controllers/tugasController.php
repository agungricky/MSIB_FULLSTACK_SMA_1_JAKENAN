<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $request->validate([
            'keterangan' => 'required',
            'jam' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'perihal' => 'required',
            'upload',
        ]);
        //------------apakah user  ingin upload foto-----------
        //yang diedit
        if (!empty($request->file('upload'))) {
            $fileName = 'upload-' . $request->keterangan . '.' . $request->file('upload')->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->file('upload')->move(public_path('admin/images'), $fileName);
        } else {
            $fileName = '';
        }


        // Insert tugas
        DB::table('tugas')->insert(
            [
                'keterangan' => $request->keterangan,
                'jam' => $request->jam,
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'perihal' => $request->perihal,
                'upload' => $request->upload,
            ]
        );
        return redirect()->route('tugas.store')
            ->with('success', 'Data Tugas Baru Berhasil Disimpan');
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
        $data = DB::table('tugas')->where('$id', '=', $id)->get();
        return view('tugas.form_edit_tugas', compact('data'));
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
        DB::table('tugas')->where('id', '=', $id)->update(
            [
                'keterangan' => $request->keterangan,
                'jam' => $request->jam,
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'perihal' => $request->perihal,
                'upload' => $request->upload,
            ]
        );
        return redirect('/tugas');
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
            ->with('success', 'Data Tugas Berhasil Dihapus');
    }
}
