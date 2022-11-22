<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;

// use App\Models\Staff

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query Mengambil Select guru *
        $guru = Guru::all();
        // Melempar data melalui compact $guru ke guru.index
        return view('guru.index', compact('guru'));

        // $ar_guru = DB::table('guru')->select('guru.*')->get();
        // return view('guru.index', compact('ar_guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //arahkan ke form input data
        return view('guru.form_guru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ============================= Fergi : Upload foto =========================
        if (!empty($request->file('foto'))) {
            $nameFoto = 'guru-' . $request->nip . '.' . $request->file('foto')->extension();
            //$nameFoto = $request->foto->getClientOriginalName();
            $request->file('foto')->move(public_path('admin/images/guru'), $nameFoto);
        } else {
            $nameFoto = '';
        }

        DB::table('guru')->insert(
            [
                'nip' => $request->nip,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl_lahir,
                'gender' => $request->gender,
                'tempat_lahir' => $request->tempat_lahir,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'agama' => $request->agama,
                'foto' => $nameFoto
            ]
        );

        
        // return redirect('/guru');
        return redirect()->route('guru.store')
            ->with('success', 'Data Guru Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Guru::find($id);
        return view('guru.ditail_guru', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ============================= Ricky Update =========================
        $data = DB::table('guru')->where('id', '=', $id)->get();
        return view('guru.form_edit_guru', compact('data'));
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
        // ============================= Ricky Update =========================
        DB::table('guru')->update(
            [
                'nip' => $request->nip,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl_lahir,
                'gender' => $request->gender,
                'tempat_lahir' => $request->tempat_lahir,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'agama' => $request->agama,
                'foto' => $request->foto,
            ]
        );
        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Guru::find($id);
        Guru::where('id', $id)->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Data Guru Berhasil Dihapus');
    }
}
