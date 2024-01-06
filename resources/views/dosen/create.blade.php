@extends('layouts.main')

@section('container')
<h1>Biodata Mahasiswa</h1>
<!-- START FORM -->
<form action='{{ url('dosen') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nim' id="nim"
                placeholder="Nomor Induk Mahasiswa">
                @if ($errors->has('nim'))
                    <span class="text-danger"> NIM belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama"
                placeholder="Nama Lengkap">
                @if ($errors->has('nama'))
                    <span class="text-danger"> Nama belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='prodi' id="prodi"
                placeholder="Prodi">
                @if ($errors->has('prodi'))
                    <span class="text-danger"> Prodi belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='email' id="email"
                placeholder="E-Mail">
                @if ($errors->has('email'))
                    <span class="text-danger"> Email belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </div>
        @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> { { $error } } </li>
        @endforeach
    </ul>
@endif
      </form>
    </div>
    <a href='/posts'> Kembali </font>
    <!-- AKHIR FORM -->
@endsection
