@extends('layouts.anggota')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Anggota</li>
            <li class="breadcrumb-item"><a class="text-dark" href="/anggota" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
        </ol>
    </nav>

    <div id="home" class="my-3 input-group mx-auto">
        <span style="background: rgb(255, 223, 182);" class="input-group-text" id="basic-addon1"><i
                class="bi bi-search"></i></span>
        <input type="text" class="form-control">
    </div>

    <div class="w-100 card mb-3 px-4 py-2">
        <table id="table-list" class="display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($all_kegiatan as $kegiatan)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $kegiatan->nama_kegiatan }}</td>
                        <td>{{ Str::title($kegiatan->kategori->nama_kategori) }}</td>
                        <td>{{ Str::limit($kegiatan->deskripsi, 15, '...') }}</td>
                        <td>
                            <a href="/anggota/kegiatan/view/{{ $kegiatan->id }}" style="text-decoration: none;"
                                class="btn text-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
