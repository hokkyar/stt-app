@extends('layouts.admin')
@section('content')
    <style>
        .bg-berita {
            background-size: cover;
            background-position-y: -80px;
            background-image: url('https://cdn.wallpapersafari.com/99/16/LpX0Gl.jpg');
        }
    </style>

    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/admin/berita" class="text-dark"
                    style="text-decoration: none;">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">id-berita</li>
        </ol>
    </nav>

    <div class="card w-75 mx-auto">
        <div class="w-100 border bg-berita" style="height: 200px;">
            <div class="d-flex justify-content-end">
                <button class="btn btn-danger" style="width: 120px;">Hapus</button>
                <button class="btn btn-warning" style="width: 120px;">Edit</button>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Judul Berita</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, neque. Dolorem possimus
                et enim vitae. Dolore harum dolorem cum illum eos repellendus voluptatum, aut voluptas esse deserunt
                aliquid, non, sunt omnis! Eveniet, pariatur. Autem dolor reiciendis rerum, in reprehenderit nisi repudiandae
                ea mollitia nulla, maiores cum ratione accusamus? Vero maxime, incidunt fugit eos ut cupiditate? Id sit
                nesciunt nostrum ipsum aspernatur veritatis voluptatibus magni quae aliquid. Repudiandae aliquam officiis
                repellat veniam excepturi perspiciatis quos error aperiam, iste beatae incidunt repellendus quam magni
                assumenda eligendi cupiditate, autem facere architecto sit? Quasi, minus eius! Cupiditate eius minus, quo
                ipsam mollitia in vero!
            </p>
        </div>
    </div>
@endsection