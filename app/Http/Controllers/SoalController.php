<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $data = Soal::all();
        return view('soal.index', compact('data'));
    }

    public function create()
    {
        return view('soal.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
        ]);

        Soal::create($request->all());
        // return redirect()->route('soal.index');
        return redirect('soal');

    }

    public function destroy(Soal $id)
    {
        $id->delete();
        return redirect('soal');
    }

    public function edit(Soal $soal)
    {
        return view('soal.edit', compact('soal'));
    }

    public function update(Request $request, Soal $soal)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
        ]);

        $soal->update($request->all());
        return redirect('soal');
    }
}
