<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tugas;
use Illuminate\Support\Facades\File;

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
            $request->file('upload')->move(public_path('admin/images/tugas/'), $nameTugas);
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
        // $row = Tugas::find($id);
        // return view('tugas.detail_tugas', compact('row'));
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
        // $validate = validate [
        //     'perihal' => 'required|max:11',
        //     'jam' => 'required',
        //     'hari' => 'required',
        //     'tanggal' => 'required',
        //     'keterangan' => 'required',
        //     'upload' => 'file',
        // ];
        // Wes Beres no error masseh
        //proses upload,dicek ketika edit data ada upload file/tidak
        if (!empty($request->upload)) {
            //ambil isi kolom foto lalu hapus file fotonya di folder images
            $upload = DB::table('tugas')->select('upload')
                ->where('id', '=', $id)->get();
            foreach ($upload as $u) {
                $namaFile = $u->upload;
            }
            File::delete(public_path('admin/images/tugas/' . $namaFile));
            //proses upload file baru 
            $request->validate([
                'upload' => 'file|mimes:word,pptx,pdf,jpg,png|max:5024',
            ]);
            $fileName = $request->perihal . '.' . $request->upload->extension();
            $request->upload->move(public_path('admin/images/tugas/'), $fileName);
        } else {
            //ambil isi kolom foto lalu hapus file fotonya di folder images
            $upload = DB::table('tugas')->select('upload')
                ->where('id', '=', $id)->get();
            foreach ($upload as $u) {
                $namaFile = $u->upload;
            }
            $fileName = $namaFile;
        }

        DB::table('tugas')->where('id', '=', $id)->update(
            [
                'perihal' => $request->perihal,
                'jam' => $request->jam,
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
                'upload' => $fileName,
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
            ->with('success', 'Data Siswa Berhasil Dihapus');
    }

    public function hapusFile(Request $file)
    {
        $recentTugas = public_path('admin/images/tugas' . $file);
        FILE::delete($recentTugas);
    }

    public function search_tugas(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $tugas = Tugas::where('perihal', 'like', "%" . $keyword . "%")->paginate(25);
        return view('tugas.index', compact('tugas'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
