@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <div class="d-flex border border-danger rounded w-75 mx-auto align-items-center mt-3">
        <div class="p-3 w-25 text-center bg-danger">
            <h5 class="card-title">
                <i class="bi bi-disc-fill text-white"></i>
            </h5>
        </div>
        <div class="p-3 w-75">
            <h5 class="card-title mx-2">Nama STT : {{ $nama_stt }}</h5>
        </div>
    </div>

    <div class="d-flex border border-danger rounded w-75 mx-auto align-items-center mt-3">
        <div class="p-3 w-25 text-center bg-danger">
            <h5 class="card-title">
                <i class="bi bi-person-lines-fill text-white"></i>
            </h5>
        </div>
        <div class="p-3 w-75">
            <h5 class="card-title mx-2">Jumlah Anggota : {{ $jumlah_anggota }} orang</h5>
        </div>
    </div>

    <div class="d-flex border border-danger rounded w-75 mx-auto align-items-center mt-3">
        <div class="p-3 w-25 text-center bg-danger">
            <h5 class="card-title">
                <i class="bi bi-activity text-white"></i>
            </h5>
        </div>
        <div class="p-3 w-75">
            <h5 class="card-title mx-2">Kegiatan Terbaru : <a href="/admin/kegiatan/view/{{ $kegiatan_terbaru->id }}"
                    style="text-decoration: none;">{{ $kegiatan_terbaru->nama_kegiatan }}</a></h5>
        </div>
    </div>

    <div class="d-flex border border-danger rounded w-75 mx-auto align-items-center mt-3">
        <div class="p-3 w-25 text-center bg-danger">
            <h5 class="card-title">
                <i class="bi bi-newspaper text-white"></i>
            </h5>
        </div>
        <div class="p-3 w-75">
            <h5 class="card-title mx-2">Berita Terkini : <a href="/admin/berita/view/{{ $berita_terkini->id }}"
                    style="text-decoration: none;">{{ $berita_terkini->judul }}</a></h5>
        </div>
    </div>
@endsection
