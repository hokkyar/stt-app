@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
        </ol>
    </nav>

    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <a href="{{ route('kegiatan.add') }}" class="btn btn-primary">Tambah Kegiatan</a>

    <div id="home" class="my-3 input-group mx-auto">
        <span style="background: rgb(255, 223, 182);" class="input-group-text" id="basic-addon1"><i
                class="bi bi-search"></i></span>
        <input id="search-input" type="text" class="form-control">
    </div>

    <div class="w-100 card mb-3 px-4 py-2">
        <table id="table-list" class="display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($all_kegiatan as $kegiatan)
                    <tr class="item-list">
                        <td>{{ $i++ }}</td>
                        <td class="item-title">{{ $kegiatan->nama_kegiatan }}</td>
                        <td class="item-category">{{ Str::title($kegiatan->kategori->nama_kategori) }}</td>
                        <td>{{ Str::limit($kegiatan->deskripsi, 15, '...') }}</td>
                        <td>
                            <a href="/admin/kegiatan/view/{{ $kegiatan->id }}" style="text-decoration: none;"
                                class="btn text-primary">View</a> |
                            <form class="d-inline-block" action="{{ route('kegiatan.delete', $kegiatan->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus data ini?')" type="submit"
                                    class="text-danger btn m-0">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                let searchTextTitle = $('#search-input').val().toLowerCase();
                $('.item-list').each(function() {
                    let title = $(this).find('.item-title').text().toLowerCase();
                    let category = $(this).find('.item-category').text().toLowerCase();

                    let showTitle = title.includes(searchTextTitle);
                    let showCategory = category.includes(searchTextTitle);
                    if (showTitle || showCategory) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
@endsection
