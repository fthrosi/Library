@extends('siswa.dashboard.navbar')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Profile</h1>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<div class="row">
    <div class="col-lg-4 order-lg-2">
        <div class="card shadow mb-4 d-flex justify-content-center align-items-center">
            <img src="{{ Auth::guard('siswa')->user()->foto ? asset('foto_siswa/'.Auth::guard('siswa')->user()->foto) : asset('img/default.png') }}" alt="{{ Auth::guard('siswa')->user()->foto ? 'Profile' : 'Default' }}" style="border-radius: 50%; height: 200px; width: 200px;" class="mt-5 mb-3">
            <form action="{{ route('editPhoto') }}" method="POST" enctype="multipart/form-data" id="editPhotoForm">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="foto" accept="image/*" class="mb-2" id="inputFoto" style="display: none;">
                <button type="button" class="btn btn-primary mb-2" id="editPhotoBtn">Edit Photo</button>
                <button type="submit" class="btn btn-primary mb-2" style="display: none;">Save</button>
            </form>
        </div>
    </div>

    <div class="col-lg-8 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">My Account</h6>
            </div>

            <div class="card-body">
                <form method="POST" autocomplete="off" action="{{ route('profileUpdate') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="_method" value="PUT">

                    <h6 class="heading-small text-muted mb-4">User information</h6>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{Auth::guard('siswa')->user()->name}}">
                                    @error('name')
                                    <div class="invalid-feedback">x
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="email">Email address<span class="small text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="example@example.com" value="{{Auth::guard('siswa')->user()->email}}" readonly>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="no_telp">Phone Number<span class="small text-danger">*</span></label>
                                    <input type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="Phone Number" value="{{Auth::guard('siswa')->user()->no_telp}}">
                                    @error('no_telp')
                                    <div class="invalid-feedback">x
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="alamat">Address<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Address" value="{{Auth::guard('siswa')->user()->alamat}}">
                                    @error('alamat')
                                    <div class="invalid-feedback">x
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save change</button>
                                </div>
                            </div>
                        </div>
                </form>

            </div>

        </div>

    </div>

</div>
<script>
    const editPhotoBtn = document.getElementById('editPhotoBtn');
    const inputFoto = document.getElementById('inputFoto');
    const editPhotoForm = document.getElementById('editPhotoForm');

    editPhotoBtn.addEventListener('click', function() {
        inputFoto.click();
    });

    inputFoto.addEventListener('change', function() {
        editPhotoForm.submit();
    });
</script>
@endsection