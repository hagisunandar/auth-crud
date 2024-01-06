<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::latest()->paginate(5);

        return view('prodi.index',compact('prodi'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'si' => 'required|string|max:255',
            'mi' => 'required|string|max:255',
            'ak' => 'required|string|max:255',
            'if' => 'required|string|max:255',
        ]);

        Prodi::create([
        'si' => $request->input('si'),
        'mi' => $request->input('mi'),
        'ak' => $request->input('ak'),
        'if' => $request->input('if'),
        ]);

        return redirect()->route('prodi.index')
                        ->with('success','Penambahan Mahasiswa ke Prodi created successfully.');
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
        $prodi = Prodi::find($id);

        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'si' => 'required|string|max:255',
            'mi' => 'required|string|max:255',
            'ak' => 'required|string|max:255',
            'if' => 'required|string|max:255',
        ]);

        $prodi = Prodi::find($id);

        $prodi->si = $request->input('si');
        $prodi->mi = $request->input('mi');
        $prodi->ak = $request->input('ak');
        $prodi->if = $request->input('if');
        $prodi->save();

        return redirect()->route('prodi.index')->with('success','Data berhasil diperbaharui.');
    }


    public function destroy($id)
    {
        $prodi = Prodi::find($id);

        if ($prodi) {
            $prodi->delete();

            return redirect()->route('prodi.index')->with('success', 'Data telah dihapus.');
        } else {
            return redirect()->route('prodi.index')->with('error', 'Data tidak ditemukan.');
        }
    }

    public function show(Prodi $prodi)
    {
        return view('prodi.show',compact('prodi'));
    }
}
