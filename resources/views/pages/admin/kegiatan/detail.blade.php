@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/admin/kegiatan" class="text-dark"
                    style="text-decoration: none;">Kegiatan</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $kegiatan->id }}</li>
        </ol>
    </nav>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card w-75 mx-auto">
        <div class="w-100 border bg-kegiatan" style="height: 200px;">
            <div class="d-flex justify-content-end">
                <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning" style="width: 120px;">Edit</a>
                <form action="{{ route('kegiatan.delete', $kegiatan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus data ini?')" class="btn btn-danger"
                        style="width: 120px;">Hapus</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $kegiatan->nama_kegiatan }}</h5>
            <p class="card-title">Kategori: {{ Str::upper($kegiatan->kategori->nama_kategori) }}</p>
            <p class="card-text">Deskripsi: {{ $kegiatan->deskripsi }}</p>
            <p class="card-text">Tanggal Mulai: {{ $kegiatan->tanggal_mulai }}</p>
            <p class="card-text">Tanggal Selesai: {{ $kegiatan->tanggal_selesai }}</p>
            <p class="card-text">Tempat: {{ $kegiatan->tempat }}</p>
            @if ($kegiatan->meet_link)
                <p class="card-text">Link: <a href="{{ $kegiatan->meet_link }}">{{ $kegiatan->meet_link }}</a></p>
            @endif
            @if (count($anggota) == 0)
                <p class="text-primary">Belum ada yang bergabung</p>
            @else
                <p>Anggota yang bergabung ({{ count($anggota) }}): </p>
                <ul>
                    @foreach ($anggota as $a)
                        <li>{{ $a->anggota->nama_anggota }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
