<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusan::all();

        return view('jurusan.tabel', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.simpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jurusans = new Jurusan([
            'deskripsi'    =>  $request -> get('jurusan')
        ]);

        $jurusans -> save();
        return redirect('jurusan');
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
    public function edit($idjurusan)
    {
        $jurusans = Jurusan::find($idjurusan);
        return view('jurusan.ubah', compact('jurusans', 'idjurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idjurusan)
    {
        $jurusans = Jurusan::find($idjurusan);

        $jurusans -> deskripsi = $request -> get('jurusan');
        $jurusans -> save();

        return redirect('jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idjurusan)
    {
        $jurusans = Jurusan::find($idjurusan);
        $jurusans->delete();

        return redirect('jurusan');
    }
}
