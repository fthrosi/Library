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
            <h2 class="text-center"><b>Login</b></h2>
            <hr>
            @if(Session('error'))
            <div class="alert alert-danger">
                <b>Oops!</b> {{ Session('error') }}
            </div>
            @endif
            <form action="{{route('loginAction')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="{{route('register')}}">Register disini</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>