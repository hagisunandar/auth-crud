@extends('layouts.main3')

@section('container3')
<div class="container">
    <h1>Edit Mahasiswa</h1>
        <form action={{ route('prodi.update', $prodi->id) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="si">Nama:</label>
                <input type="text" name="dosen" id="si" class="form-control" value="{{ $prodi->si }}">
                @if ($errors->has('si'))
                <span class="text-danger"> Nama belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="mi">Nama:</label>
                <input type="text" name="mi" id="mi" class="form-control" value="{{ $prodi->mi }}">
                @if ($errors->has('mi'))
                <span class="text-danger"> Nama belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="ak">Nama:</label>
                <input type="text" name="ak" id="ak" class="form-control" value="{{ $prodi->ak }}">
                @if ($errors->has('ak'))
                <span class="text-danger"> Nama belum di isi </span>
                @endif
            </div>
            <div class="form-group">
                <label for="if">Nama:</label>
                <input type="text" name="if" id="if" class="form-control" value="{{ $prodi->if }}">
                @if ($errors->has('if'))
                <span class="text-danger"> Nama belum di isi </span>
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
