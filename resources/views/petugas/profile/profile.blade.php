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
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
                <div class="row mt-4 align-items-center justify-content-sm-start justify-content-center">
                    <div class="col-auto col-sm-auto">
                        <img class="profile-pic" alt="avatar1" src="{{$petugas['profile_picture']}}" style="width: 100px; border-radius: 50%;" />
                    </div>
                    <div class=" col-auto col-sm-6">
                        <h4>{{$petugas['nama']}}</h4>
                    </div>
                </div>
                <hr>
                <h5>Edit Data</h5>

                <form action="{{url('/petugas/dashboard')}}">
                    <div class="form-group">
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{$petugas['nama']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="number" class="form-control" value="{{$petugas['nip']}}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="telp" class="form-label">No Telp</label>
                                <input type="tel" class="form-control" value="{{$petugas['no_telp']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="fotoProfil" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <button class="btn btn-primary">Simpan</button>
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