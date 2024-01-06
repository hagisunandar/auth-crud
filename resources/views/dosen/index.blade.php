@extends('layouts.main')

@section('container')
@if (session('success'))
<div class="alert alert-success">session('success')</div>
@endif

<h1>List Mahasiswa</h1>
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="card-tools">
                    {{-- <form action={{ route('dosen.search') }} method="get">
                    <div class="input-group" class="form-outline">
                        <div class="form-outline">
                            <input type="search" name="search" class="form-control me-1" placeholder="Masukkan NIM">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search">Cari</i>
                        </button>
                    </div>
                    </form> --}}
                </div>
        </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('/dosen/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th class="col-md-1">No</th> --}}
                            <th class="col-md-2">NIM</th>
                            <th class="col-md-3">Nama</th>
                            <th class="col-md-3">Prodi</th>
                            <th class="col-md-3">Email</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                    <tr>
                        @foreach($dosen as $dosen)
                            <tr>
                                {{-- <td>{{ $posts->id }}</td> --}}
                                <td>{{ $dosen->nim }}</td>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->prodi }}</td>
                                <td>{{ $dosen->email }}</td>
                                <td>
                                    <a href={{ route('dosen.edit', $dosen->id) }} class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action={{ route('dosen.destroy', $dosen->id) }} method="POST">
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
