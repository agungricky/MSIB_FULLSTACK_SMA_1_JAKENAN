<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->select('*')->get();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert(
            [
                 'name' => $request->name,
                 'email' => $request->email,
                 'role' => $request->role,
                 'password' => Hash::make($request['password'])
             ]
        );
        return redirect()->route('user.store')
            ->with('success', 'Data user Baru Berhasil Disimpan');
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
        $role = ['administrator', 'staff', 'guru', 'siswa'];
        $data = DB::table('users')->where('id', '=', $id)->get();
        return view('user.user_edit', compact('data', 'role'));
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
        //$validateData = $request->validate([
        //    'name' => 'Required',
        //    'email' => 'Required',
        //    'role' => 'Required',
        //    'password' => 'Required'
        //]);

        //DB::table('users')->where('id', '=', $id)->dd();

        DB::table('users')->where('id', '=', $id)->update(
            [
                 'name' => $request->name,
                 'email' => $request->input ('email'),
                 'role' => $request->role,
                 'password' => Hash::make($request['password'])
             ]
        );
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('user.index')
            ->with('success', 'Data Berhasil Dihapus');
    }

    public function search_user(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $user = DB::table('users')->select('*')->where('name', 'like', "%" . $keyword . "%")->paginate(25);
        return view('user.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
