@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/admin/kegiatan" class="text-dark"
                    style="text-decoration: none;">Kegiatan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kegiatan</li>
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
        <form action="{{ route('kegiatan.create') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                <input required name="nama_kegiatan" type="text" class="form-control" id="nama_kegiatan">
            </div>
            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select required id="kategori_id" name="kategori_id" class="form-select">
                    @foreach ($all_kategori as $kategori)
                        <option value="{{ $kategori->id }}">{{ Str::title($kategori->nama_kategori) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
            </div>
            <div class="mb-3 d-flex">
                <div class="col-6">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input required type="date" name="tanggal_mulai" class="form-control" id="tanggal_mulai">
                </div>
                <div class="col-6">
                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                    <input required type="date" name="tanggal_selesai" class="form-control" id="tanggal_selesai">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat</label>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="onlineCheckbox">
                    <label class="form-check-label" for="onlineCheckbox">Online</label>
                </div>
                <input id="link_meet" type="text" class="form-control" name="link_meet" placeholder="Masukkan link meet">
                <input required id="tempat" type="text" class="form-control" name="tempat"
                    placeholder="Masukkan lokasi kegiatan">
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Tambah</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#link_meet").hide();
            $("#onlineCheckbox").change(function() {
                if ($(this).is(":checked")) {
                    $("#link_meet").show();
                    $("#link_meet").attr('required', true);
                    $("#tempat").hide();
                    $("#tempat").val('Online');
                } else {
                    $("#link_meet").hide();
                    $("#tempat").show();
                    $("#tempat").val('');
                    $("#link_meet").attr('required', false);
                }
            });
        });

        $("#tanggal_mulai").on("change", function() {
            const tanggalMulai = $(this).val();
            $("#tanggal_selesai").attr("min", tanggalMulai);
        });

        $("#tanggal_mulai").on("change", function() {
            const tanggalMulai = new Date($(this).val());
            const tanggalSelesai = new Date($("#tanggal_selesai").val());
            if (tanggalMulai > tanggalSelesai) {
                $("#tanggal_selesai").val($(this).val());
            }
        });

        $("#tanggal_selesai").on("change", function() {
            const tanggalSelesai = new Date($(this).val());
            const tanggalMulai = new Date($("#tanggal_mulai").val());
            if (tanggalSelesai < tanggalMulai) {
                $("#tanggal_mulai").val($(this).val());
            }
        });
    </script>
@endsection
