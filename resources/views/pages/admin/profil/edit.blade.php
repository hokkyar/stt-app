@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="/admin/profil"
                    style="text-decoration: none;">Profil STT</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="w-75 mx-auto card mb-3 px-4 py-4">
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama STT</label>
                <input type="text" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="kontak">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi">
            </div>
            <div class="mb-3">
                <label for="struktur" class="form-label">Upload Struktur STT</label>
                <input type="file" class="form-control" id="struktur">
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Edit</button>
        </form>
    </div>
@endsection
