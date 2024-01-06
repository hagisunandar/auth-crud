@extends('layouts.main3')

@section('container3')
@if (session('success'))
<div class="alert alert-success">session('success')</div>
@endif

<h1>List Prodi Mahasiswa</h1>
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('/prodi/create') }}' class="btn btn-primary">+ Mahasiswa Prodi</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th class="col-md-1">No</th> --}}
                            <th class="col-md-3">Sistem Informatika</th>
                            <th class="col-md-3">Manajemen Informatika</th>
                            <th class="col-md-3">Komputer Akutansi</th>
                            <th class="col-md-3">Informatika</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                    <tr>
                        @foreach($prodi as $prodi)
                            <tr>
                                {{-- <td>{{ $posts->id }}</td> --}}
                                <td>{{ $prodi->si }}</td>
                                <td>{{ $prodi->mi }}</td>
                                <td>{{ $prodi->ak }}</td>
                                <td>{{ $prodi->if }}</td>
                                <td>
                                    <a href={{ route('prodi.edit', $prodi->id) }} class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action={{ route('prodi.destroy', $prodi->id) }} method="POST">
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
          <!-- AKHIR DATA -->
@endsection
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
