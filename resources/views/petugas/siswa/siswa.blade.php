@extends('layouts.admin')

@section('main-content')
<div class="container-fluid">

    <!-- Page Heading -->
    <main>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                    </div>
                    <div class="row justify-content-center justify-content-md-start align-items-center">
                    </div>

                    <hr>
                    <h4 class="mt-4">List User</h4>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $data)
                                    <tr>
                                        <td>{{ $data['name'] }}</td>
                                        <td>{{ $data['email'] }}</td>
                                        <td>{{ $data['alamat'] }}</td>
                                        <td>{{ $data['no_telp'] }}</td>
                                        <td>
                                            <a href="{{ route('edit.siswa', ['id' => $data['id']]) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <button class="btn btn-danger btn-sm btn-delete" data-toggle="modal" data-target="#deleteModal{{ $data['id'] }}" data-id="{{ $data['id'] }}">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   <!-- Modal -->
                   @foreach ($siswa as $data)
                        <div class="modal fade" id="deleteModal{{ $data['id'] }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $data['id'] }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{ __('Konfirmasi Hapus User') }}</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus user ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('Batal') }}</button>
                                        <!-- Form untuk penghapusan dengan action yang dinamis -->
                                        <!-- <a href="{{ route('siswa.destroy', $data['id']) }}">Hapus</a> -->
                                        <form id="siswa-delete-form-{{ $data['id'] }}" action="{{ route ('siswa.destroy', $data['id']) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">{{ __('Hapus') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>

@endsection