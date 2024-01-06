@extends('layouts.main3')

@section('container3')
<h1>Penambahan Mahasiswa ke Prodi</h1>
<!-- START FORM -->
<form action='{{ url('prodi') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="si" class="col-sm-2 col-form-label">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='si' id="si"
                placeholder="Sistem Informatika">
                @if ($errors->has('si'))
                    <span class="text-danger"> Nama Belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="mi" class="col-sm-2 col-form-label">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='mi' id="mi"
                placeholder="Manajemen Informatika">
                @if ($errors->has('mi'))
                    <span class="text-danger"> Nama belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ak" class="col-sm-2 col-form-label">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='ak' id="ak"
                placeholder="Komputer Akutansi">
                @if ($errors->has('ak'))
                    <span class="text-danger"> Nama belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="if" class="col-sm-2 col-form-label">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='if' id="if"
                placeholder="Informatika">
                @if ($errors->has('if'))
                    <span class="text-danger"> Nama belum di isi </span>
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
