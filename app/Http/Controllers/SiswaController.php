<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Jurusan;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.tabel', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Jurusan::all();
        return view('siswa.simpan', compact('items'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswas = new Siswa([
            'nis'    =>  $request -> get('nis'),
            'nama'    =>  $request -> get('nama'),
            'kelas'    =>  $request -> get('kelas'),
            'idjurusan'    =>  $request -> get('item'),
        ]);

        $siswas -> save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsiswa)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idsiswa)
    {
        $items = Jurusan::all();

        $siswas = Siswa::find($idsiswa);
        return view('siswa.ubah', compact('siswas','items', 'idsiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idsiswa)
    {
        $siswas = Siswa::find($idsiswa);

        $siswas -> idjurusan = $request -> get('item');
        $siswas -> nama = $request -> get('nama');
        $siswas -> nis = $request -> get('nis');
        $siswas -> kelas = $request -> get('kelas');
        $siswas -> save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idsiswa)
    {
        $siswas = Siswa::find($idsiswa);
        $siswas->delete();

        return redirect('/');
    }
}
