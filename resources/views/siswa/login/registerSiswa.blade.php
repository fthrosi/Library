<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head')
    <style>
        body {
            background-image: url('/img/background.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: darkslategray;">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="/">
                <img src="{{ asset('img/logo-removebg.png') }}" alt="" style="max-width: 70px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active fw-semibold" aria-current="page" href="/" style="color: white; font-size: 25px;">Home</a>
                    <a class="nav-link fw-semibold" href="{{url('loginSiswa')}}" style="color: white; font-size: 25px;">Sign In</a>
                    <a class="nav-link fw-semibold" href="{{route('registerSiswa')}}" style="color: white; font-size: 25px;">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container center-container">
        <div class="col-md-4 login-box" style="background-color: rgba(255, 255, 255, 0.5);">
            <h2 class="text-center"><b>Register</b></h2>
            <hr>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{route('registerSiswaAction')}}" method="post">
                @csrf
                <div class="form-group">
                    <label><i class="fas fa-user ms-1 me-2"></i>Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" required>
                    @error('nama')
                    <div class="invalid-feedback">x
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label><i class="fas fa-envelope ms-1 me-2"></i>Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                    @error('email')
                    <div class="invalid-feedback">x
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label><i class="fas fa-key ms-1 me-2"></i>Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">x
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label><i class="fa fa-phone"></i> No Telepon</label>
                    <input class="form-control @error('no_telp') is-invalid @enderror" type="number" name="no_telp" placeholder="No Telepon" required>
                    @error('no_telp')
                    <div class="invalid-feedback">x
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label><i class="fa fa-location"></i> Alamat</label>
                    <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" placeholder="Alamat" required>
                    @error('alamat')
                    <div class="invalid-feedback">x
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user me-2"></i>Register</button>
                <hr>
                <p class="text-center">Sudah punya akun? <a href="{{url('loginSiswa')}}">Login disini</a></p>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>