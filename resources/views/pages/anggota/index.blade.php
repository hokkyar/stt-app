@extends('layouts.anggota')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Anggota</li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <div class="d-flex border border-danger rounded w-75 mx-auto align-items-center mt-3">
        <div class="p-3 w-25 text-center bg-danger">
            <h5 class="card-title">
                <i class="bi bi-disc-fill text-white"></i>
            </h5>
        </div>
        <div class="p-3 w-75 text-center">
            <h5 class="card-title">Nama STT Anda : --</h5>
        </div>
    </div>

    <div class="d-flex border border-danger rounded w-75 mx-auto align-items-center mt-3">
        <div class="p-3 w-25 text-center bg-danger">
            <h5 class="card-title">
                <i class="bi bi-activity text-white"></i>
            </h5>
        </div>
        <div class="p-3 w-75 text-center">
            <h5 class="card-title">Kegiatan Terbaru : --</h5>
        </div>
    </div>
@endsection
