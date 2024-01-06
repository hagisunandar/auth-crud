@extends('layouts.main2')

@section('container2')
<h1>Mata Kuliah Mahasiswa</h1>
<!-- START FORM -->
<form action='{{ url('matkul') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="pbo" class="col-sm-2 col-form-label">Pemograman Berorientasi Objek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pbo' id="pbo"
                placeholder="PBO">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pw" class="col-sm-2 col-form-label">Pemograman Web</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pw' id="pw"
                placeholder="PW">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="metlit" class="col-sm-2 col-form-label">Metodologi Penelitian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='metlit' id="metlit"
                placeholder="Metlit">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="psi" class="col-sm-2 col-form-label">Perancangan Sistem Informasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='psi' id="psi"
                placeholder="PSI">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Matkul belum di isi </span>
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
