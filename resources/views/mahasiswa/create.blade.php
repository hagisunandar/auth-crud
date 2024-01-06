@extends('layouts.main2')

@section('container2')
<h1>Rangkuman Mata Kuliah Mahasiswa</h1>
<!-- START FORM -->
<form action='{{ url('mahasiswa') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="dosen" class="col-sm-2 col-form-label">Mata Kuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='dosen' id="dosen"
                placeholder="Dosen Pengampu">
                @if ($errors->has('dosen'))
                    <span class="text-danger"> Dosen belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='matkul' id="matkul"
                placeholder="Mata Kuliah">
                @if ($errors->has('matkul'))
                    <span class="text-danger"> Mata Kuliah belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jambelajar" class="col-sm-2 col-form-label">Jam Pembelajaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jambelajar' id="jambelajar"
                placeholder="Jam Belajar">
                @if ($errors->has('jambelajar'))
                    <span class="text-danger"> Jam Pembelajaran belum di isi </span>
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="rangkuman" class="col-sm-2 col-form-label">Rangkuman</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='rangkuman' id="rangkuman"
                placeholder="rangkuman">
                @if ($errors->has('rangkuman'))
                    <span class="text-danger"> Rangkuman belum di isi </span>
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
