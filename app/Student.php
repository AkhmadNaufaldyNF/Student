<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'jurusan';

    protected $fillable = ['deskripsi'];

    public $timestamps = false;
}
