<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = ["nama_siswa", "nama_guru", "jurusan", "wakasek" ,"kepsek",];
    public $timestamps = true;
}
