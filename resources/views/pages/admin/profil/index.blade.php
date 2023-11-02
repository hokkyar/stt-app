@extends('layouts.admin')
@section('content')
    <style>
        .bg-stt {
            background-size: cover;
            background-position-y: -170px;
            background-image: url('https://i.pinimg.com/originals/eb/e8/95/ebe895592a44af8acfeee32aa4fc8555.jpg');
        }
    </style>

    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page">Profil STT</li>
        </ol>
    </nav>

    <div class="card w-75 mx-auto">
        <div class="w-100 border bg-stt" style="height: 200px;">
            <div class="d-flex justify-content-end">
                <a href="/admin/profil/edit" class="btn btn-secondary" style="width: 120px;">Edit</a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Nama STT</h5>
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
