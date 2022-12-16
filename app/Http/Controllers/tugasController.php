<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tugas;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

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
        $ar_perihal = ['Quis', 'Tugas Harian', 'UTS', 'UAS', 'Lainnya'];

        return view('tugas.form_tugas', compact('ar_perihal'));
        return view('tugas.form_edit_tugas', compact('ar_perihal'));
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
                'upload' => $nameTugas,
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
        $data = DB::table('tugas')->where('id', '=', $id)->get();
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
        // if (!empty($request->file('upload'))) {
        //     $nameTugas = 'tugas-' . $request->perihal . '.' . $request->file('upload')->extension();
        //     //$nameTugas = $request->foto->getClientOriginalName();
        //     $request->file('upload')->move(public_path('admin/images/tugas'), $nameTugas);
        // } else {
        //     $nameTugas = '';
        // }

        if (!empty($request->upload)) {
            //ambil isi kolom upload lalu hapus file uploadnya di folder images
            $upload = DB::table('tugas')->select('upload')
                ->where('id', '=', $id)->get();
            foreach ($upload as $f) {
                $namaFile = $f->upload;
            }
            File::delete(public_path('admin/images/tugas/' . $namaFile));
            //proses upload file baru 
            $request->validate([
                'upload' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            // tugas-' . $request->perihal . '.' . $request->file('upload')->extension();
            $fileName = $request->perihal . '-' . $request->file('upload')->extension();
            $request->upload->move(public_path('admin/images/tugas/'), $fileName);
        } else {
            //ambil isi kolom upload lalu hapus file uploadnya di folder images
            $upload = DB::table('tugas')->select('upload')
                ->where('id', '=', $id)->get();
            foreach ($upload as $f) {
                $namaFile = $f->upload;
            }
            $fileName = $namaFile;
        }

        DB::table('tugas')->where('id', '=', $id)->update(
            [
                'keterangan' => $request->keterangan,
                'jam' => $request->jam,
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'perihal' => $request->perihal,
                'upload' => $fileName
            ]
        );

        // return redirect('/tugas.update');
        return redirect()->route('tugas.edit', $id);
        // Tinggal return message
        // ->with('success', 'Data Tugas Berhasil Disimpan');
        //     ->with('success', 'Data Tugas Berhasil Disimpan');
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

    public function search_tugas(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $tugas = Tugas::where('perihal', 'like', "%" . $keyword . "%")->paginate(25);
        return view('tugas.index', compact('tugas'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
