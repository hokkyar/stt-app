@extends('layouts.app')
@section('title', 'Home')
@section('body')
    <nav class="navbar navbar-expand-lg fixed-top" style="background: rgb(255, 223, 182);">
        <div class="container">
            <a class="navbar-brand fw-bold" style="color: #3b3b0d;" href="/"> <i class="bi bi-flower2"></i> Sekaa Teruna
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
        <div id="home" class="my-4 input-group mx-auto">
            <span style="background: rgb(255, 223, 182);" class="input-group-text" id="basic-addon1"><i
                    class="bi bi-search"></i></span>
            <input id="search-input" type="text" class="form-control">
        </div>

        <div class="d-flex flex-wrap gap-3 justify-content-center my-3">
            @foreach ($all_berita as $berita)
                <a href="{{ route('homepage.show', $berita->id) }}">
                    <div class="card item-list" style="width: 20rem;">
                        <img src="{{ asset($berita->sampul) }}" class="card-img-top" alt="picture"
                            style="max-height: 260px;">
                        <div class="card-body">
                            <h5 class="card-title"><a class="item-title" style="text-decoration: none;"
                                    href="{{ route('homepage.show', $berita->id) }}">{{ $berita->judul }}</a>
                            </h5>
                            <p class="card-text item-desc">{{ Str::limit($berita->isi, 30, '...') }}</p>
                            <p class="card-text">{{ $berita->created_at }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                let searchTextTitle = $('#search-input').val().toLowerCase();
                $('.item-list').each(function() {
                    let title = $(this).find('.item-title').text().toLowerCase();
                    let desc = $(this).find('.item-desc').text().toLowerCase();
                    let showTitle = title.includes(searchTextTitle);
                    let showDesc = desc.includes(searchTextTitle);
                    if (showTitle || showDesc) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

@endsection
