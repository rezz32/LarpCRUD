<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::all();

        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'nis'=> 'required|unique:tb_siswa,nis',
            'nama' => 'required', 
            'rombel' => 'required',
            'rayon' => 'required',
            'no_telp'=> 'required',
            'alamat' => 'required',
        ]);
    

     siswa::create($request->only([
        'nis', 'nama', 'rombel',
        'rayon', 'no_telp', 'alamat'
    ]));

    return redirect ('/siswa');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis'=> 'required|unique:tb_siswa,nis,' . $siswa->id,
            'nama' => 'required', 
            'rombel' => 'required',
            'rayon' => 'required',
            'no_telp'=> 'required',
            'alamat' => 'required',
        ]);

        $siswa->update($request->only([
            'nis', 'nama', 'rombel',
            'rayon', 'no_telp', 'alamat'
        ]));

        return redirect('/siswa');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect('/siswa');
    }
}
