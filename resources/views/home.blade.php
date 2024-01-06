@extends('layouts.index')

@section('index')

<!doctype html>
  <head>
  </head>
  <body>
    <p></p>
    <h1></h1>
    <a href={{ url('/mahasiswa') }} class="btn btn-warning btn-sm">Mahasiswa</a>
    <a href={{ url('/dosen') }} class="btn btn-danger btn-sm">Dosen</a>
    <a href={{ url('/prodi') }} class="btn btn-success btn-sm">Prodi</a>
    <a href={{ url('/matkul') }} class="btn btn-primary btn-sm">Mata Kuliah</a>
</body>
</html>

@endsection
