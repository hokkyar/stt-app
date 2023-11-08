@extends('layouts.admin')
@section('content')
    <style>
        .bg-berita {
            background-size: cover;
            background-position-y: -80px;
            background-image: url('{{ $berita->sampul }}');
        }
    </style>

    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/admin/berita" class="text-dark"
                    style="text-decoration: none;">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $berita->id }}</li>
        </ol>
    </nav>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card w-75 mx-auto">
        <div class="w-100 border bg-berita" style="height: 200px;">
            <div class="d-flex justify-content-end">
                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning" style="width: 120px;">Edit</a>
                <button class="btn btn-danger" style="width: 120px;">Hapus</button>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $berita->judul }}</h5>
            <p class="card-text">{{ $berita->isi }}</p>
        </div>
    </div>
@endsection
