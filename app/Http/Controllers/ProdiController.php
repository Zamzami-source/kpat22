<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index() {
        //echo 'Data Mahasiswa';

        //return view('prodi.index');


        $nama = "RPL";

        $prodis = [
            'ILKOM', 'TI', 'RPL', 'HUKUM', 'FARMASI'
        ];
        return view('prodi.index', compact('nama', 'prodis'));
    }
}
