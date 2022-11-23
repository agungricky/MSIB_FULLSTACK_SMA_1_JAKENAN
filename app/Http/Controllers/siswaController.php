<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan seluruh data siswa
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $ar_gender = ['L', 'P'];
        $ar_agama = ['Islam', 'Hindu', 'Khatolik', 'Budha', 'Kristen', 'Lainya'];
        $ar_status = ['Lulus', 'Aktif', 'Pindah', 'Keluar'];
        return view('siswa.form_siswa', compact('ar_gender', 'ar_agama', 'ar_status'));
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
            'NIS' => 'required|unique:siswa|max:11',
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'nullable|string|min:10',
            'status_siswa' => 'required',
            'foto' => 'required',
        ]);
        //------------apakah user  ingin upload foto-----------
        //yang diedit fiki new
        if (!empty($request->file('foto'))) {
            $fileName = 'foto-' . $request->NIS . '.' . $request->file('foto')->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->file('foto')->move(public_path('admin/images/siswa'), $fileName);
        } else {
            $fileName = '';
        }

        //lakukan insert data dari request form
        DB::table('siswa')->insert(
            [
                'NIS' => $request->NIS,
                'nama_siswa' => $request->nama_siswa,
                'tempat_lahir' => $request->tempat_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'status_siswa' => $request->status_siswa,
                'foto' => $fileName,
                'created_at' => now()

            ]
        );

        return redirect()->route('siswa.store')
            ->with('success', 'Data Siswa Baru Berhasil Disimpan');
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

    //=================================  Ricky Update =======================================
    public function edit($id)
    {
        //
        $data = DB::table('siswa')->where('id', '=', $id)->get();
        return view('siswa.form_edit_siswa', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //======================================== Ricky Update ==================================
    public function update(Request $request, $id)
    {
        DB::table('siswa')->where('id', '=', $id)->update(
            [
                'NIS' => $request->NIS,
                'nama_siswa' => $request->nama_siswa,
                'tempat_lahir' => $request->tempat_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'status_siswa' => $request->status_siswa,
                'foto' => $request->foto,
                'created_at' => now()
            ]
        );
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Siswa::find($id);
        Siswa::where('id', $id)->delete();
        return redirect()->route('siswa.index')
            ->with('success', 'Data Siswa Berhasil Dihapus');
    }
}
