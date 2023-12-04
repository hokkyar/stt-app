@extends('layouts.admin')
@section('content')
    <style>
        .bg-berita {
            background-size: cover;
            background-position-y: -80px;
            background-image: url('{{ asset($berita->sampul) }}');
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
                <form action="{{ route('berita.delete', $berita->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus data ini?')" class="btn btn-danger"
                        style="width: 120px;">Hapus</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $berita->judul }}</h5>
            <p class="card-text">{{ $berita->isi }}</p>
            <p class="card-text">Dibuat pada: {{ $berita->created_at }}</p>
            <p class="card-text">Diperbarui pada: {{ $berita->updated_at }}</p>
        </div>
    </div>
@endsection
