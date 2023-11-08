@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a class="text-dark" href="/admin/anggota"
                    style="text-decoration: none;">Anggota</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>

    <div class="w-50 mx-auto card mb-3 px-4 py-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('anggota.create') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="nama_anggota" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="peran" class="form-label">Peran</label>
                <input type="text" class="form-control" id="peran" name="peran" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select" name="status">
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Non-Aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Tambah</button>
        </form>
    </div>
@endsection
