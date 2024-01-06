<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Dosen::latest()->paginate(5);

        return view('mahasiswa.index',compact('mahasiswa'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dosen' => 'required|string|max:255',
            'matkul' => 'required|string|max:255',
            'jambelajar' => 'required|string|max:255',
            'rangkuman' => 'required|string|max:255',
        ]);

        Dosen::create([
        'dosen' => $request->input('dosen'),
        'matkul' => $request->input('matkul'),
        'jambelajar' => $request->input('jambelajar'),
        'rangkuman' => $request->input('rangkuman'),
        ]);

        return redirect()->route('mahasiswa.index')
                        ->with('success','Rangkuman created successfully.');
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
        $mahasiswa = Dosen::find($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'dosen' => 'required|string|max:255',
            'matkul' => 'required|string|max:255',
            'jambelajar' => 'required|string|max:255',
            'rangkuman' => 'required|string|max:255',
        ]);

        $mahasiswa = Dosen::find($id);

        $mahasiswa->dosen = $request->input('dosen');
        $mahasiswa->matkul = $request->input('matkul');
        $mahasiswa->jambelajar = $request->input('jambelajar');
        $mahasiswa->rangkuman = $request->input('rangkuman');
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success','Rangkuman berhasil diperbaharui.');
    }


    public function destroy($id)
    {
        $mahasiswa = Dosen::find($id);

        if ($mahasiswa) {
            $mahasiswa->delete();

            return redirect()->route('mahasiswa.index')->with('success', 'Rangkuman telah dihapus.');
        } else {
            return redirect()->route('mahasiswa.index')->with('error', 'Rangkuman tidak ditemukan.');
        }
    }

    public function show(Dosen $mahasiswa)
    {
        return view('mahasiswa.show',compact('mahasiswa'));
    }
}



