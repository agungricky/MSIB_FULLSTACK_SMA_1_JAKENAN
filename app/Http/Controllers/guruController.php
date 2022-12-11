<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;
use File;
use PDF;
use App\Exports\guruExport;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Search;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


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

    public function apiGuru()
    {
        $guru = Guru::all();
        return response()->json(
            [
                'success' => true,
                'massage' => 'Data Guru',
                'data' => $guru,
            ],
            200
        );
    }

    public function apiGuruDetail($id)
    {
        $guru = Guru::find($id);
        if ($guru) {
            return response()->json(
                [
                    'success' => true,
                    'massage' => 'Detail Guru',
                    'data' => $guru,
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'massage' => 'Detail Guru Tidak di Temukan',
                ],
                404
            );
        }
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

        // $validateDate = $request->validate([
        //     'nip' => 'required|max:11',
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'tgl_lahir' => 'required',
        //     'geder' => 'required',
        //     'tempat_lahir' => 'required',
        //     'no_telp' => 'required',
        //     'email' => 'required',
        //     'agama' => 'required',
        //     'foto' => 'image|file'
        // ]);
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
        // return view('guru.ditail_guru', compact('row'));
        return view('guru.ditail_guru1', compact('row'));
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
        $rules = [
            'nip' => 'required|unique:guru|max:11',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'geder' => 'required',
            'tempat_lahir' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'agama' => 'required',
            'foto' => 'image|file'
        ];
        // Wes Beres no error masseh
        //proses upload,dicek ketika edit data ada upload file/tidak
        if (!empty($request->foto)) {
            //ambil isi kolom foto lalu hapus file fotonya di folder images
            $foto = DB::table('guru')->select('foto')
                ->where('id', '=', $id)->get();
            foreach ($foto as $f) {
                $namaFile = $f->foto;
            }
            File::delete(public_path('admin/images/guru/' . $namaFile));
            //proses upload file baru 
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            $fileName = $request->nama . '.' . $request->foto->extension();
            //$fileName = $request->nama.'.jpg'; 
            $request->foto->move(public_path('admin/images/guru/'), $fileName);
        } else {
            //ambil isi kolom foto lalu hapus file fotonya di folder images
            $foto = DB::table('guru')->select('foto')
                ->where('id', '=', $id)->get();
            foreach ($foto as $f) {
                $namaFile = $f->foto;
            }
            $fileName = $namaFile;
        }

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
                'foto' => $fileName,
                // 'foto' => $request->foto
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

    //  Belum terpakai
    public function deleteImg($id)
    {
        // hapus file
        $foto = Guru::where('id', $id)->first();
        File::delete('admin/images/guru/' . $foto->file);

        // hapus data
        guru::where('id', $id)->delete('foto');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $row = Guru::find($id);
        Guru::where('id', $id)->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Data Guru Berhasil Dihapus');
    }

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

    public function guruExcel()
    {
        return Excel::download(new guruExport, 'daftar_guru.xlsx');
    }

    public function search(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $guru = Guru::where('nama', 'like', "%" . $keyword . "%")->paginate(25);
        return view('guru.index', compact('guru'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
