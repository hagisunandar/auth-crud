<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DosenController extends Controller
{

    public function index()
    {
        $dosen = Mahasiswa::latest()->paginate(5);

        return view('dosen.index',compact('dosen'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        Mahasiswa::create([
        'nim' => $request->input('nim'),
        'nama' => $request->input('nama'),
        'prodi' => $request->input('prodi'),
        'email' => $request->input('email'),
        ]);

        return redirect()->route('dosen.index')
                        ->with('success','Mahasiswa created successfully.');
    }

    public function search(Request $request)
    {
        if($request->has('search')); {
        $dosen = Mahasiswa::where('nim', 'like','%'.$request->search.'%')->get();
        }

        return view('dosen.index', compact('dosen'));
    }


    public function edit($id)
    {
        $dosen = Mahasiswa::find($id);

        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'email' => 'required|string|max:255'
        ]);

        $dosen = Mahasiswa::find($id);

        $dosen->nim = $request->input('nim');
        $dosen->nama = $request->input('nama');
        $dosen->prodi = $request->input('prodi');
        $dosen->email = $request->input('email');
        $dosen->save();

        return redirect()->route('dosen.index')->with('success','Biodata Mahasiswa berhasil diperbaharui.');
    }


    public function destroy($nim)
    {
        $dosen = Mahasiswa::find($nim);

        if ($dosen) {
            $dosen->delete();

            return redirect()->route('dosen.index')->with('success', 'Diodata Mahasiswa telah dihapus.');
        } else {
            return redirect()->route('dosen.index')->with('error', 'Diodata Mahasiswa tidak ditemukan.');
        }
    }

    public function show(Mahasiswa $dosen)
    {
        return view('dosen.index',compact('dosen'));
    }
}

