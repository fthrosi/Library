@extends('layouts.admin')
@section('main-content')
<div class="container-fluid px-xxl-65 px-xl-20 mt-20">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon">
                <i class="material-icons"></i></span>Data Peminjam
        </h4>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Book Review</th>
                                        <th class="text-center">Book Title</th>
                                        <th class="text-center">Borrower</th>
                                        <th class="text-center">Loan Date</th>
                                        <th class="text-center">Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peminjaman as $data)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('foto_buku/' . $data['buku']['foto_buku']) }}"  width="150" alt="">
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">{{ Str::title($data['buku']['nama_buku']) }}</td>
                                        <td class="text-center" style="vertical-align: middle;">{{ Str::title($data['siswa']['name']) }}</td>
                                        <td class="text-center" style="vertical-align: middle;">{{ Str::title($data['tanggal_pinjam']) }}</td>
                                        <td class="text-center" style="vertical-align: middle;">{{ Str::title($data['tanggal_kembali']) }}</td>
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
