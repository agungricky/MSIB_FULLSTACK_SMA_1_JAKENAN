<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

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
        $siswa = DB::table('siswa')
            ->join('kelas', 'kelas.id', '=', 'siswa.id')
            ->select('siswa.*', 'kelas.kelas')->get();
        return view('siswa.index', compact('siswa'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $ar_gender = ['L', 'P'];
        $ar_agama = ['Islam', 'Hindu', 'Khatolik', 'Budha', 'Kristen', 'Lainya'];
        $ar_status = ['Lulus', 'Aktif', 'Pindah', 'Keluar'];
        // return view::make('siswa.form_siswa')->with('ar_gender', $ar_gender);
        return view('siswa.form_siswa', compact('kelas'));
        // return View('siswa.form_siswa', ['ar_gender' => $ar_gender, 'ar_agama' => $ar_agama, 'ar_status' => $ar_status, 'kelas' => $kelas]);
        // return view('siswa.form_siswa', compact('kelas'));
        // return view('siswa.form_siswa', compact('ar_gender', 'kelas', 'ar_agama', 'ar_status'));
        // return view('siswa.form_siswa', ['ar_gender' => $ar_gender, 'ar_agama' => $ar_agama, 'ar_status' => $ar_status, 'kelas' => $kelas]);
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
            'kelas_id' => 'required',
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
            $nameFoto = $request->nama_siswa . '-' . $request->nip . '.' . $request->file('foto')->extension();
            //$nameFoto = $request->foto->getClientOriginalName();
            $request->file('foto')->move(public_path('admin/images/siswa'), $nameFoto);
        } else {
            $nameFoto = '';
        }

        //lakukan insert data dari request form
        DB::table('siswa')->insert(
            [
                'NIS' => $request->NIS,
                'nama_siswa' => $request->nama_siswa,
                'kelas_id' => $request->kelas_id,
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

        return redirect()->route('siswa.store')
            ->with('success', 'Data Siswa Baru Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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
        $ar_gender = ['L', 'P'];
        $ar_agama = ['Islam', 'Hindu', 'Khatolik', 'Budha', 'Kristen', 'Lainya'];
        $ar_status = ['Lulus', 'Aktif', 'Pindah', 'Keluar'];
        return view('siswa.form_edit_siswa', compact('ar_gender', 'data', 'ar_agama', 'ar_status'));
        // return View('siswa.form_siswa', ['ar_gender' => $ar_gender, 'ar_agama' => $ar_agama, 'ar_status' => $ar_status, 'data' => $data]);

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


        if (!empty($request->foto)) {
            //ambil isi kolom foto lalu hapus file fotonya di folder images
            $foto = DB::table('siswa')->select('foto')
                ->where('id', '=', $id)->get();
            foreach ($foto as $f) {
                $namaFile = $f->foto;
            }
            File::delete(public_path('admin/images/siswa/' . $namaFile));
            //proses upload file baru 
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,giff|max:2048',
            ]);
            $fileName = $request->NIS . '-' . $request->nama_siswa . '.' . $request->foto->extension();
            //$fileName = $request->nama.'.jpg'; 
            $request->foto->move(public_path('admin/images/siswa/'), $fileName);
        } else {
            //ambil isi kolom foto lalu hapus file fotonya di folder images
            $foto = DB::table('siswa')->select('foto')
                ->where('id', '=', $id)->get();
            foreach ($foto as $f) {
                $namaFile = $f->foto;
            }
            $fileName = $namaFile;
        }
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
                'foto' => $fileName,
                // panjang tipe data harus lebih lagi untuk menampung nama dan nis
                // 'created_at' => now()
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

    public function search_siswa(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $siswa = DB::table('siswa')
            ->join('kelas', 'kelas.id', '=', 'siswa.id')
            ->select('siswa.*', 'kelas.kelas')->where('nama_siswa', 'like', "%" . $keyword . "%")->paginate(25);
        return view('siswa.index', compact('siswa'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
