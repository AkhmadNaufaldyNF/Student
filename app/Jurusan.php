<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    protected $fillable = ['deskripsi'];

    protected $primaryKey = 'idjurusan';

    public $timestamps = false;
}
