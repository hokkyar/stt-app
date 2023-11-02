@extends('layouts.anggota')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Anggota</li>
            <li class="breadcrumb-item"><a class="text-dark" href="/anggota" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Anggota</li>
        </ol>
    </nav>

    <div id="home" class="my-3 input-group mx-auto">
        <span style="background: rgb(255, 223, 182);" class="input-group-text" id="basic-addon1"><i
                class="bi bi-search"></i></span>
        <input type="text" class="form-control">
    </div>

    <div class="d-flex flex-wrap gap-3 justify-content-center my-3">
        @for ($i = 0; $i < 6; $i++)
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('img/background.jpg') }}" class="card-img-top" alt="picture">
                <div class="card-body">
                    <h5 class="card-title"><a href="/anggota/kegiatan/view/1">Judul Kegiatan</a></h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos veritatis
                        saepe....
                    </p>
                </div>
            </div>
        @endfor
    </div>
@endsection
