<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $table = 'soals17';

    protected $fillable = ['nama_mk', 'dosen', 'jumlah_soal', 'keterangan'];


    // protected $primaryKey = 'id_soal';
    // protected $KeyType = 'string';
    // protected $table = 'soals';

}
