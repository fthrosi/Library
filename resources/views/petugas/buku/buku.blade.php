@extends('layouts.admin')
@section('main-content')
<div class="container-fluid px-xxl-65 px-xl-20 mt-20">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-book"></i></span>Buku</h4>
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-wth-icon fade show" role="alert">
        <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span>
        {{ session('success') }}
    </div>
    @elseif (session('fail'))
    <div class="alert alert-danger alert-wth-icon fade show" role="alert">
        <span class="alert-icon-wrap"><i class="zmdi zmdi-block"></i></span>
        {{ session('fail') }}
    </div>
    @endif

    <div class="row">
        <div class="container-fluid">
            <div class="card mt-4">
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <div class="col-auto">
                        <a href="{{ route('buku.create') }}">
                            <span class="btn btn-success btn-wth-icon btn-lg rounded-pill shadow mt-3 ms-3">Tambah Buku Baru</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="font-size: 18px">Kode Buku</th>
                                        <th class="text-center" style="font-size: 18px">Judul Buku</th>
                                        <!-- <th class="">Penerbit</th> -->
                                        <th class="text-center" style="font-size: 18px">Penulis</th>
                                        <!-- <th class="">Sinopsis</th> -->
                                        <th class="text-center" style="font-size: 18px">Kategori</th>
                                        <th class="text-center" style="font-size: 18px">Stok Buku</th>
                                        <th class="text-center" style="font-size: 18px">Foto Buku</th>
                                        <th class="text-center" style="font-size: 18px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buku as $data)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle; text-align: center;">
                                            <div style="display: inline-block;">
                                                {!! DNS1D::getBarcodeHTML($data->kode_buku, 'C39') !!}
                                            </div>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle; font-size: 16px;">{{ Str::title($data->nama_buku) }}</td>
                                            <td class="text-center" style="vertical-align: middle; font-size: 16px;">{{ Str::upper($data->penulis) }}</td>
                                            <td class="text-center" style="vertical-align: middle; font-size: 16px;">{{ Str::title($data->jenis_rak) }}</td>
                                            <td class="text-center" style="vertical-align: middle; font-size: 16px;">
                                                @if ($data->stok_buku < 1)
                                                    <span class="badge badge-danger" style="font-size: 16px;">Stok Buku Habis</span>
                                                @else
                                                    <span class="badge badge-success" style="font-size: 16px;">Sisa Stok : {{ $data->stok_buku }}</span>
                                                @endif
                                            </td>
                                        <td class="text-center" >
                                            <img src="/foto_buku/{{ $data->foto_buku }}" width="15%" alt="">
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{ route('buku.edit', $data->id_buku) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fas fa-edit"></i> Edit Buku
                                            </a>
                                            <a href="{{ route('buku.destroy', $data->id_buku) }}" class="btn btn-danger btn-sm mt-1" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="event.preventDefault(); document.getElementById('buku-delete-form-{{ $data->id_buku }}').submit();">
                                                <i class="fas fa-trash"></i> Hapus Buku
                                            </a>
                                            <form id="buku-delete-form-{{ $data->id_buku }}" action="{{ route('buku.destroy', $data->id_buku) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</div>
@endsection