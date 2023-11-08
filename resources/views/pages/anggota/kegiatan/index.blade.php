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

    <div class="d-flex flex-wrap gap-3 justify-content-center my-3">
        @foreach ($all_kegiatan as $kegiatan)
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('img/background.jpg') }}" class="card-img-top" alt="picture">
                <div class="card-body">
                    <h5 class="card-title"><a
                            href="/anggota/kegiatan/view/{{ $kegiatan->id }}">{{ $kegiatan->nama_kegiatan }}</a></h5>
                    <p class="card-text">{{ $kegiatan->deskripsi }}</p>
                    <p class="card-text">{{ Str::upper($kegiatan->kategori->nama_kategori) }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
