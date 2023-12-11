@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita</li>
        </ol>
    </nav>

    @if (session('success'))
        <div class="alert alert-success my-2">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('berita.add') }}" class="btn btn-primary">Tambah Berita</a>


    <div id="home" class="my-3 input-group mx-auto">
        <span style="background: rgb(255, 223, 182);" class="input-group-text" id="basic-addon1"><i
                class="bi bi-search"></i></span>
        <input type="text" class="form-control">
    </div>

    <div class="d-flex flex-wrap gap-3 justify-content-center my-3">
        @foreach ($all_berita as $berita)
            <a href="/admin/berita/view/{{ $berita->id }}">
                <div class="card" style="width: 20rem;">
                    <img src="{{ asset($berita->sampul) }}" class="card-img-top" alt="picture" style="max-height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title"><a style="text-decoration: none;"
                                href="/admin/berita/view/{{ $berita->id }}">{{ $berita->judul }}</a>
                        </h5>
                        <p class="card-text">{{ Str::limit($berita->isi, 30, '...') }}</p>
                        <p class="card-text">{{ $berita->created_at }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
