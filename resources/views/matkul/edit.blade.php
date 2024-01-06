@extends('layouts.main2')

@section('container2')
<div class="container">
    <h1>Edit Mata Kuliah Mahasiswa</h1>
        <form action={{ route('matkul.update', $matkul->id) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pbo">Nama:</label>
                <input type="text" name="pbo" id="pbo" class="form-control" value="{{ $matkul->pbo }}">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="pw">Nama:</label>
                <input type="text" name="pw" id="pw" class="form-control" value="{{ $matkul->pw }}">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="metlit">Nama:</label>
                <input type="text" name="metlit" id="metlit" class="form-control" value="{{ $matkul->metlit }}">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="psi">Nama:</label>
                <input type="text" name="psi" id="psi" class="form-control" value="{{ $matkul->psi }}">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
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
