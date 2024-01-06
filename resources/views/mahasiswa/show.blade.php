@extends('layouts.submain')

@section('container1')
@if (session('success'))
<div class="alert alert-success">session('success')</div>
@endif

<h1>Dashboard Rangkuman Pembelajaran Mahasiswa</h1>
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('/mahasiswa/create') }}' class="btn btn-primary">Rangkuman Perkuliahan hari ini</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th class="col-md-1">No</th> --}}
                            <th class="col-md-3">Dosen Pengampu</th>
                            <th class="col-md-2">Mata Kuliah</th>
                            <th class="col-md-2">Jam Belajar</th>
                            <th class="col-md-2">Rangkuman</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                    <tr>
                        @foreach($mahasiswa as $mahasiswa)
                            <tr>
                                {{-- <td>{{ $posts->id }}</td> --}}
                                <td>{{ $mahasiswa->dosen }}</td>
                                <td>{{ $mahasiswa->matkul }}</td>
                                <td>{{ $mahasiswa->jambelajar }}</td>
                                <td>{{ $mahasiswa->rangkuman }}</td>
                                <td>
                                    <a href={{ route('mahasiswa.edit', $mahasiswa->id) }} class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action={{ route('mahasiswa.destroy', $mahasiswa->id) }} method="POST">
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
