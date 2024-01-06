@extends('layouts.main2')

@section('container2')
@if (session('success'))
<div class="alert alert-success">session('success')</div>
@endif

<h1>List Mata Kuliah Mahasiswa</h1>
<div class="my-3 p-3 bg-body rounded shadow-sm">
</div>


    <div class="pb-3">
        <a href='{{ url('/matkul/create') }}' class="btn btn-primary">+ Mata Kuliah</a>
    </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    {{-- <th class="col-md-1">No</th> --}}
                    <th class="col-md-4">Pemograman Berorientasi Objek</th>
                    <th class="col-md-2">Pemograman Web</th>
                    <th class="col-md-3">Metodologi Penelitian</th>
                    <th class="col-md-3">Perancangan Sistem Informasi</th>
                    <th class="col-md-1">Aksi</th>
                </tr>
            </thead>
            <tr>
                @foreach($matkul as $matkul)
                    <tr>
                        {{-- <td>{{ $posts->id }}</td> --}}
                        <td>{{ $matkul->pbo }}</td>
                        <td>{{ $matkul->pw }}</td>
                        <td>{{ $matkul->metlit }}</td>
                        <td>{{ $matkul->psi }}</td>
                        <td>
                            <a href={{ route('matkul.edit', $matkul->id) }} class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action={{ route('matkul.destroy', $matkul->id) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tr>
        </table>
  </div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
