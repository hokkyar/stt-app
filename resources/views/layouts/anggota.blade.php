@extends('layouts.app')
@section('title', 'Anggota')
@section('body')
    <nav class="navbar navbar-expand-lg py-3" style="background: rgb(255, 223, 182);">
        <div class="container-fluid px-3">
            <a class="navbar-brand fw-bold" style="color: #3b3b0d;" href="/anggota"><i class="bi bi-flower2"></i> STT
                Anggota</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mx-3" id="navbarNav">
                <a class="btn btn-danger btn-md ms-auto" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-left" style="font-size: 13px;"></i>
                    <span style="font-size: 14px;">Logout</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <div class="sidebar p-0" style="background: rgb(255, 223, 182);">
            <div class="px-3 py-2 text-center" style="background-color: rgb(182, 54, 54);">
                <img style="display: inline-block; vertical-align: middle;" class="rounded-circle mx-auto mt-3"
                    src="https://i.pinimg.com/736x/01/11/53/011153d1cc99a9f4c45feb71fa18a38b.jpg" alt="picture"
                    width="65">
                <p class="text-white text-center fs-6 my-2">{{ '@' . session('user')->username }}</p>
            </div>
            <div>
                <a class="{{ Request::is('anggota') ? 'active-nav' : '' }}" href="/anggota/"><i
                        class="bi bi-speedometer2 mx-3"></i></i> Dashboard</a>
                <a class="{{ Request::is('anggota/kegiatan*') ? 'active-nav' : '' }}" href="/anggota/kegiatan"><i
                        class="bi bi-activity mx-3"></i> Kegiatan</a>
            </div>
        </div>
        <div class="w-100 p-5">
            <h2>Selamat datang di Halaman Anggota!</h2>
            <p>Berikut ini adalah konten dari halaman anggota.</p>
            <div class="pb-3">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
