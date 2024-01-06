@extends('layouts.submain')

@section('container1')
<div class="container">
    <h1>Edit Rangkuman Pembelajaran Mahasiswa</h1>
        <form action={{ route('mahasiswa.update', $dosen->id) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="dosen">Dosen:</label>
                <input type="text" name="dosen" id="dosen" class="form-control" value="{{ $mahasiswa->dosen }}">
                @if ($errors->has('dosen'))
                <span class="text-danger"> Dosen belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="matkul">Mata Kuliah:</label>
                <input type="text" name="matkul" id="matkul" class="form-control" value="{{ $mahasiswa->matkul }}">
                @if ($errors->has('matkul'))
                <span class="text-danger"> Mata Kuliah belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="jambelajar">Jam Belajar:</label>
                <input type="text" name="jambelajar" id="jambelajar" class="form-control" value="{{ $mahasiswa->jamberlajar }}">
                @if ($errors->has('jambelajar'))
                <span class="text-danger"> Jam Belajar belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="rangkuman">Rangkuman</label>
                <input type="text" name="rangkuman" id="rangkuman" class="form-control" value="{{ $mahasiswa->rangkuman }}">
                @if ($errors->has('rangkuman'))
                <span class="text-danger"> Rangkuman belum di isi </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> { { $error } } </li>
        @endforeach
    </ul>
@endif
        </form>
    </div>
@endsection
