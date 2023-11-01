@extends('layouts.app')
@section('title', 'Login')
@section('body')
    <nav class="navbar navbar-expand-lg" style="background: rgb(255, 223, 182);">
        <div class="container">
            <a class="navbar-brand fw-bold" style="color: #3b3b0d;" href="/">Sekaa Teruna Teruni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container mb-3">
        <div class="d-flex align-items-center mt-3 gap-3">
            <div class="w-50">
                <div class="card p-3">
                    <p class="card-text fs-4">Silahkan login untuk melanjutkan</p>
                    <form action="" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" type="text" class="form-control" id="username"
                                placeholder="Masukkan username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Masukkan password">
                        </div>
                        <button type="submit" class="btn btn-secondary">
                            <i class="bi bi-person-lock" style="font-size: 15px;"></i>
                            Login
                        </button>
                    </form>
                </div>
            </div>
            <div class="card w-50">
                <img src="https://images.pexels.com/photos/1694621/pexels-photo-1694621.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    style="height: 85vh;" class="card-img-top" alt="picture">
            </div>
        </div>
    </div>
@endsection
