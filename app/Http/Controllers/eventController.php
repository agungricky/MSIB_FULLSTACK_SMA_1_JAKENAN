<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\event;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DB::table('event')->select('*')->get();
        return view('event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('event')->insert(
            [
                'nama' => $request->nama,
                'tgl' => $request->tgl,
                'deskripsi' => $request->deskripsi,
            ]
        );
        return redirect()->route('event.store')
            ->with('success', 'Data event Baru Berhasil Disimpan');
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
        $data = DB::table('event')->where('id', '=', $id)->get();
        return view('event.form_edit_event', compact('data'));
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
        DB::table('event')->where('id', '=', $id)->update(
            [
                'nama' => $request->nama,
                'tgl' => $request->tgl,
                'deskripsi' => $request->deskripsi,
                
            ]

        );
        return redirect('/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = event::find($id);
        event::where('id', $id)->delete();
        return redirect()->route('event.index')
            ->with('success', 'Data Siswa Berhasil Dihapus');
    }

    public function search_event(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $event = DB::table('event')->select('*')->where('nama', 'like', "%" . $keyword . "%")->paginate(25);
        return view('event.index', compact('event'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
