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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_stt" class="form-label">Nama STT</label>
                <input type="text" class="form-control" id="nama_stt" name="nama_stt" value="{{ $profile->nama_stt }}">
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $profile->kontak }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi_lain" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi_lain" id="deskripsi_lain">{{ $profile->deskripsi_lain }}</textarea>
            </div>
            <div class="mb-3">
                <label for="struktur" class="form-label">Upload Struktur STT</label><br>
                <img id="image_struktur" src="{{ asset($profile->struktur) }}" alt="image" width="100" class="mb-3">
                <input type="file" class="form-control" id="struktur" name="struktur" accept="image/*">
            </div>
            <button type="submit" class="btn btn-warning w-100 mt-3">Update</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#struktur').change(function() {
                var input = this;
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image_struktur').attr('src', e.target.result);
                };
                if (input.files && input.files[0]) {
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    </script>
@endsection
