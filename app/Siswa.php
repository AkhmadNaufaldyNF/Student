<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = ['idjurusan', 'nis', 'nama', 'kelas'];

    protected $primaryKey = 'idsiswa';

    public $timestamps = false;

    public function jurusan(){
        return $this->belongsTo('App\Jurusan', 'idjurusan');
    }
}
