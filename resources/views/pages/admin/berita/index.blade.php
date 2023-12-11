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
        <input id="search-input" type="text" class="form-control">
    </div>

    <div class="d-flex flex-wrap gap-3 justify-content-center my-3">
        @foreach ($all_berita as $berita)
            <a href="/admin/berita/view/{{ $berita->id }}">
                <div class="card item-list" style="width: 18rem;">
                    <img src="{{ asset($berita->sampul) }}" class="card-img-top" alt="picture" style="min-height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title"><a class="item-title" style="text-decoration: none;"
                                href="/admin/berita/view/{{ $berita->id }}">{{ $berita->judul }}</a>
                        </h5>
                        <p class="card-text">{{ $berita->created_at }}</p>
                    </div>
                </div>
            </a>
        @endforeach
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
