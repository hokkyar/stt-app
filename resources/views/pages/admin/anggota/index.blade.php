@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb" class="my-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="/admin" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Anggota</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between">
        <a href="{{ route('anggota.add') }}" class="btn btn-primary">Tambah Anggota</a>
        <button onclick="downloadPDF()" class="btn btn-secondary"><i class="bi bi-file-earmark-pdf"></i> Unduh
            Daftar
            Anggota
        </button>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

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
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th class="action-header">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($all_anggota as $anggota)
                    <tr class="item-list">
                        <td>{{ $i++ }}</td>
                        <td class="username">{{ $anggota->username }}</td>
                        <td class="nama_anggota">{{ $anggota->anggota->nama_anggota }}</td>
                        <td class="alamat">{{ $anggota->anggota->alamat }}</td>
                        <td class="{{ $anggota->anggota->status == 'aktif' ? 'text-success' : 'text-danger' }}">
                            {{ Str::title($anggota->anggota->status) }}</td>
                        <td class="actions">
                            <button onclick="viewData({{ json_encode($anggota) }})" class="btn text-primary m-0"
                                data-bs-toggle="modal" data-bs-target="#viewModal">View</button> |
                            <form class="d-inline-block" action="{{ route('anggota.delete', $anggota->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus data ini?')" type="submit"
                                    class="text-primary btn m-0">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Anggota STT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Username: <span id="username-modal"></span></p>
                    <p>Nama Lengkap: <span id="nama-modal"></span></p>
                    <p>Alamat: <span id="alamat-modal"></span></p>
                    <p>Status: <span id="status-modal"></span></p>
                    <p>Peran: <span id="peran-modal"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        function viewData(data) {
            $('#username-modal').text(data.username);
            $('#nama-modal').text(data.anggota.nama_anggota);
            $('#alamat-modal').text(data.anggota.alamat);
            $('#status-modal').text(data.anggota.status);
            $('#peran-modal').text(data.anggota.peran);
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                let searchTextTitle = $('#search-input').val().toLowerCase();
                $('.item-list').each(function() {
                    let username = $(this).find('.username').text().toLowerCase();
                    let nama_anggota = $(this).find('.nama_anggota').text().toLowerCase();
                    let alamat = $(this).find('.alamat').text().toLowerCase();

                    let showUsername = username.includes(searchTextTitle);
                    let showNama = nama_anggota.includes(searchTextTitle);
                    let showAlamat = alamat.includes(searchTextTitle);

                    if (showUsername || showNama || showAlamat) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script>
        function downloadPDF() {
            var table = document.getElementById('table-list');
            var opt = {
                margin: 10,
                filename: 'Daftar Anggota STT.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };
            html2pdf(table, opt);
        }
    </script>
@endsection
