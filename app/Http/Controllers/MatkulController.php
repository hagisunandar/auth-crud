<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::latest()->paginate(5);

        return view('matkul.index',compact('matkul'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pbo' => 'required',
            'pw' => 'required',
            'metlit' => 'required',
            'psi' => 'required',
        ]);

        Matkul::create([
        'pbo' => $request->input('pbo'),
        'pw' => $request->input('pw'),
        'metlit' => $request->input('metlit'),
        'psi' => $request->input('psi'),
        ]);

        return redirect()->route('matkul.index')
                        ->with('success','Mata Kuliah created successfully.');
    }

    // public function search(Request $request)
    // {
    //     if($request->has('search')); {
    //     $dosen = Mahasiswa::where('nim', 'like','%'.$request->search.'%')->get();
    //     }

    //     return view('dosen.index', compact('dosen'));
    // }


    public function edit($id)
    {
        $matkul = Matkul::find($id);

        return view('matkul.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pbo' => 'required',
            'pw' => 'required',
            'metlit' => 'required',
            'psi' => 'required',
        ]);

        $matkul = Matkul::find($id);

        $matkul->pbo = $request->input('pbo');
        $matkul->pw = $request->input('pw');
        $matkul->metlit = $request->input('metlit');
        $matkul->psi = $request->input('psi');
        $matkul->save();

        return redirect()->route('matkul.index')->with('success','Matakuliah berhasil diperbaharui.');
    }


    public function destroy($id)
    {
        $matkul = Matkul::find($id);

        if ($matkul) {
            $matkul->delete();

            return redirect()->route('matkul.index')->with('success', 'Mata Kuliah telah dihapus.');
        } else {
            return redirect()->route('matkul.index')->with('error', 'Mata Kuliah tidak ditemukan.');
        }
    }

    public function show(Matkul $matkul)
    {
        return view('matkul.show',compact('matkul'));
    }
}
