@extends('layouts.admin')

@section('main-content')
<main>

    <style>
        .profile-pic {
            width: 100px;
            height: 100px;
            object-fit: cover;
            /* Maintain aspect ratio and cover the entire container */
            border-radius: 50%;
        }
    </style>
    <div class="container">
        <div class="row"></div>
        <div class="card px-4">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/petugas/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile User</li>
                    </ol>
                </nav>
               
                <hr>
                <h5>Edit Data</h5>
                <div class="row mt-4 align-items-center justify-content-sm-start justify-content-center">
                    <div class="col-auto col-sm-auto">
                        @if ($siswa['foto'])
                            <!-- Jika ada foto profil, tampilkan foto profil -->
                            <img class="profile-pic" alt="avatar1" src="{{ asset('/foto_siswa/' . $siswa['foto']) }}" style="width: 100px; border-radius: 50%;" />
                        @else
                            <!-- Jika tidak ada foto profil, tampilkan default profile picture -->
                            <img class="profile-pic" alt="default-avatar" src="{{ asset('/foto_siswa/default_profile.jpg') }}" style="width: 100px; border-radius: 50%;" />
                        @endif
                    </div>
                    <div class=" col-auto col-sm-6">
                        <h4>{{ $siswa['name'] }}</h4>
                    </div>
                </div>
                <form action="{{ route('siswa.update', ['id' => $siswa->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name" value="{{ $siswa['name'] }}">
                            </div>
                            <div class="col-auto col-sm-6">
                                <label for="telp" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $siswa['email'] }}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="telp" class="form-label">No Telp</label>
                                <input type="tel" class="form-control" name="no_telp" value="{{ $siswa['no_telp'] }}">
                            </div>
                            <div class="col-auto col-sm-6">
                                <label for="telp" class="form-label">Alamat</label>
                                <input type="tel" class="form-control" name="alamat" value="{{ $siswa['alamat'] }}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="fotoProfil" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" name="foto" accept="image/*" >
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</main>

@endsection