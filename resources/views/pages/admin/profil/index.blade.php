@extends('layouts.admin')
@section('content')
    <style>
        .bg-stt {
            background-size: cover;
            background-position-y: -170px;
            background-image: url({{ asset($profile->struktur) }});
            /* https://i.pinimg.com/originals/eb/e8/95/ebe895592a44af8acfeee32aa4fc8555.jpg */
        }
    </style>

    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page">Profil STT</li>
        </ol>
    </nav>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card w-75 mx-auto">
        <div class="w-100 bg-stt" style="height: 200px;">
            <div class="d-flex justify-content-end">
                <a href="/admin/profil/edit" class="btn btn-warning rounded-0" style="width: 120px;">Edit</a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $profile->nama_stt }}</h5>
            <p class="text-muted m-0"><i class="bi bi-geo-alt-fill"></i> Desa Bondalem, Kec. Tejakula, Buleleng, Bali</p>
            <p class="text-muted my-2"><i class="bi bi-telephone-inbound-fill"></i> {{ $profile->kontak }}</p>
            <p class="card-text">{{ $profile->deskripsi_lain }}</p>
        </div>
    </div>
@endsection
