@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Edit Diodata Mahasiswa</h1>
        <form action={{ route('dosen.update', $dosen->id) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" name="nim" id="nim" class="form-control" value="{{ $dosen->nim }}">
                @if ($errors->has('nim'))
                <span class="text-danger"> NIM belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $dosen->nama }}">
                @if ($errors->has('nama'))
                <span class="text-danger"> Nama belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" name="prodi" id="prodi" class="form-control" value="{{ $dosen->prodi }}">
                @if ($errors->has('prodi'))
                <span class="text-danger"> Prodi belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $dosen->email }}">
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
