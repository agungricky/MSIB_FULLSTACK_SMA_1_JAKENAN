<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;
use PDF;

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
        $ar_gender = ['L', 'P'];
        $ar_agama = ['Islam', 'Hindu', 'Budha', 'Kristen', 'Lainya'];
        return view('guru.form_guru', compact('ar_gender', 'ar_agama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
                'foto' => $request->foto,
            ]
        );
        return redirect('/guru');
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
        return view('admin.ditail_guru', compact('row'));
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
        DB::table('guru')->where('id', '=', $id)->update(
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

    // public function generatePDF()
    // {
    //     // $users = User::get();
    //     $data = [
    //         'title' => 'Welcome to Generate PDF',
    //         'date' => date('m/d/Y'),
    //         // 'users' => $users
    //     ];

    //     $pdf = PDF::loadView('guru.myPDF', $data);
    //     return $pdf->download('FilePDF.pdf');
    // }

    public function guruPDF()
    {
        $data = [
            'title' => 'SMA 1 Jakenan',
            'date' => date('m/d/Y'),
            // 'users' => $users
        ];


        $ar_guru = DB::table('guru')->select('guru.*')->get();

        $pdf = PDF::loadView('guru.myPDF', ['ar_guru' => $ar_guru], $data);
        return $pdf->download('FilePDF.pdf');
    }
}
