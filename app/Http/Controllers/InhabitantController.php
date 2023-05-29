<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Inhabitant;

class InhabitantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inhabitant = Inhabitant::all();
        return view('inhabitant/index', compact('inhabitant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inhabitant/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_kk',
            'nik',
            'nama_lengkap',
            'jenis_kelamin',
            'tempat_lahir',
            'ttl',
            'golongan_darah',
            'alamat',
            'status_perkawinan',
            'pendidikan_terakhir',
            'status_pekerjaan'
        ]);
        Inhabitant::create([
            'no_kk' => request('no_kk'),
            'nik' => request('nik'),
            'nama_lengkap' => request('nama_lengkap'),
            'jenis_kelamin' => request('jenis_kelamin'),
            'tempat_lahir' => request('tempat_lahir'),
            'ttl' => request('ttl'),
            'golongan_darah' => request('golongan_darah'),
            'alamat' => request('alamat'),
            'status_perkawinan' => request('status_perkawinan'),
            'pendidikan_terakhir' => request('pendidikan_terakhir'),
            'status_pekerjaan' => request('status_pekerjaan')
        ]);
        return redirect('/')->with('success', 'Data Berhasil Di Tambah!');
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
        $inhabitant = DB::table('inhabitants')->where('id', $id)->get();
        return view('inhabitant/update', ['inhabitant' => $inhabitant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('inhabitants')->where('id', $request->id)->update([
            'no_kk' => request('no_kk'),
            'nik' => request('nik'),
            'nama_lengkap' => request('nama_lengkap'),
            'jenis_kelamin' => request('jenis_kelamin'),
            'tempat_lahir' => request('tempat_lahir'),
            'ttl' => request('ttl'),
            'golongan_darah' => request('golongan_darah'),
            'alamat' => request('alamat'),
            'status_perkawinan' => request('status_perkawinan'),
            'pendidikan_terakhir' => request('pendidikan_terakhir'),
            'status_pekerjaan' => request('status_pekerjaan')
        ]);
        return redirect()->route('inhabitant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        DB::table('inhabitants')->where('id', $id)->delete();
        return redirect()->route('inhabitant');
    }
}
