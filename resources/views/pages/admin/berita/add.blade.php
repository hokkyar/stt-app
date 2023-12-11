@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/admin/berita" class="text-dark"
                    style="text-decoration: none;">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
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

        <img style="max-height: 350px;" id="sampul_berita" src="https://images6.alphacoders.com/860/860645.png"
            class="card-img-top mb-3" alt="picture">

        <form action="{{ route('berita.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input required name="judul" type="text" class="form-control" id="judul">
            </div>
            <div class="mb-3">
                <label for="sampul" class="form-label">Cover</label><br>
                <input type="file" class="form-control" id="sampul" name="sampul" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="editor" class="form-label">Konten</label>
                <textarea id="editor" name="isi" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Tambah</button>
        </form>
    </div>

    <script>
        const editor = Jodit.make('#editor');
    </script>

    <script>
        $(document).ready(function() {
            $('#sampul').change(function() {
                const input = this;
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#sampul_berita').attr('src', e.target.result);
                };
                if (input.files && input.files[0]) {
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    </script>
@endsection
