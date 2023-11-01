@extends('layouts.app')
@section('title', 'Admin')
@section('body')
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-align: left;
            text-decoration: none;
            font-size: 18px;
            color: #000000;
            /* color: #fff; */
            display: block;
            transition: .2s;
        }

        .sidebar a:hover {
            background-color: rgb(207, 59, 59);
            color: #fff;
        }
    </style>

    <nav class="navbar navbar-expand-lg" style="background: rgb(255, 223, 182);">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" style="color: #3b3b0d;" href="/admin">STT Admin Panel</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="btn btn-danger btn-sm ms-auto" href="#">
                    <i class="bi bi-box-arrow-left" style="font-size: 13px;"></i>
                    <span style="font-size: 14px;">Logout</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <div class="sidebar p-0" style="background: rgb(255, 223, 182);">
            <div class="px-3 py-4 d-flex gap-3 align-items-center" style="background-color: rgb(207, 59, 59);">
                <img class="rounded-circle" src="https://i.pinimg.com/736x/01/11/53/011153d1cc99a9f4c45feb71fa18a38b.jpg"
                    alt="picture" width="50">
                <p class="text-white fs-5 mt-3">Admin</p>
            </div>
            <div class="">
                <a href="#">Kegiatan</a>
                <a href="#">Anggota</a>
                <a href="#">Berita</a>
                <a href="#">Profil STT</a>
            </div>
        </div>
        <div class="w-100 p-5">
            <h2>Selamat datang di Halaman Admin!</h2>
            <p>Berikut ini adalah konten dari halaman admin.</p>
            <div class="pb-3">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
