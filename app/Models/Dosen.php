<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'soal17';

    protected $fillable = ['id', 'nama_mk', 'dosen', 'jumlah_soal', 'keterangan', 'created_at', 'update_at'];
}
