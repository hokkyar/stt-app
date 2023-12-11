@extends('layouts.app')
@section('title', 'Home')
@section('body')
    <style>
        .bg-berita {
            background-size: cover;
            background-position-y: -80px;
            background-image: url('{{ asset($berita->sampul) }}');
        }
    </style>
    <nav class="navbar navbar-expand-lg fixed-top" style="background: rgb(255, 223, 182);">
        <div class="container">
            <a class="navbar-brand fw-bold" style="color: #3b3b0d;" href="/"><i class="bi bi-flower2"></i> Sekaa Teruna
                Teruni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="margin-right: 10px">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <a class="btn btn-success btn-sm" href="/login">
                    <i class="bi bi-person-lock" style="font-size: 15px;"></i>
                    <span>Login</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="container py-2 mt-5">
        <div class="card w-75 mx-auto my-3">
            <div class="w-100 bg-berita" style="height: 200px;">
                <div class="d-flex justify-content-start">
                    <a href="/" class="btn btn-primary" style="width: 120px;">
                        <i class="bi bi-arrow-left-circle"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text">{!! $berita->isi !!}</p>
                <p class="card-text">Diperbarui oleh Admin: {{ $berita->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection
