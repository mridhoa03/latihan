<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulama extends Model
{
    protected $fillable = ["nama", "alamat", "usia" ,"sekolah", "no_telp"];
    public $timestamps = true;
}
