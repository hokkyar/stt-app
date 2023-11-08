@extends('layouts.anggota')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Anggota</li>
            <li class="breadcrumb-item"><a class="text-dark" href="/anggota" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item"><a class="text-dark" href="/anggota/kegiatan"
                    style="text-decoration: none;">Kegiatan</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $kegiatan->id }}</li>
        </ol>
    </nav>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->has('error') || $is_joined)
        <div class="alert alert-info">Anda sudah bergabung pada kegiatan ini</div>
    @endif

    <div class="card w-75 mx-auto">
        <div class="w-100 border bg-kegiatan" style="height: 200px;">
            <div class="d-flex justify-content-end gap-1">
                <form action="{{ route('kegiatan.join_anggota', $kegiatan->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button class="btn btn-primary" type="submit" style="width: 120px;"
                        {{ $is_joined ? 'disabled' : '' }}>Bergabung</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $kegiatan->nama_kegiatan }}</h5>
            <p class="card-text">Deskripsi: {{ $kegiatan->deskripsi }}</p>
            <p>Tanggal Mulai: {{ $kegiatan->tanggal_mulai }}</p>
            <p>Tanggal Selesai: {{ $kegiatan->tanggal_selesai }}</p>
            <p>Tempat: {{ $kegiatan->tempat }}</p>
            <p>Kategori: {{ $kegiatan->kategori->nama_kategori }}</p>
        </div>
    </div>
@endsection
