<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NK-Library</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Ukuran teks default */


        .body-landing .text-landing {
            font-size: 30px;
            /* Atur ukuran teks default untuk layar besar */
        }

        .body-landing p {
            font-size: 100px;
            /* Atur ukuran teks default untuk layar besar */
        }

        .body-landing h2 {
            font-size: 50px;
            /* Atur ukuran teks default untuk layar besar */
        }

        /* Media query untuk layar kecil (di bawah 768px) */
        @media (max-width: 800px) {
            .body-landing .text-landing {
                font-size: 15px;
                /* Atur ukuran teks default untuk layar besar */
            }

            .body-landing p {
                font-size: 30px;
                /* Atur ukuran teks default untuk layar besar */
            }

            .single-line-text br {
                display: none;
            }

            .body-landing h2 {
                font-size: 20px;
                /* Atur ukuran teks default untuk layar besar */
            }
        }

        .footer {
            background-color: darkslategray;
            padding: 50px 0;
        }

        .footer h4 {
            color: white;
        }

        .footer p {
            color: white;
        }

        .footer .footer-links li,
        .footer .social-links li {
            list-style: none;
            display: inline-block;
            margin-right: 10px;
        }

        .footer .footer-links a,
        .footer .social-links a {
            color: white;
            text-decoration: none;
        }

        .footer .footer-links a:hover,
        .footer .social-links a:hover {
            color: #333;
        }

        .social-links i {
            font-size: 24px;
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
    <div class="container-fluid">
        <div class="row justify-content-lg-end justify-content-md-center align-items-center">
            <div class="col-lg-6 col-sm-12 d-flex">
                <div class="body-landing justify-content-between text-lg-start  text-sm-center mt-5 ms-5 me-5">
                    <p class="fw-bold single-line-text order-md-first" style="color: darkslategray;">Learn and <br>Share</br> With Other</p>
                    <h2 style="color: coral;" class="fw-bold">Online Book Club</h2>
                    <p class="text-landing mt-3" style="text-align: justify;font-weight: 500;">Selamat datang di <span class="fw-bold">NK-Library</span> Di sini, kami membuka pintu menuju dunia pengetahuan yang tak terbatas. Dengan koleksi buku yang kaya akan ragam topik, kami hadir untuk memenuhi dahaga pengetahuan Anda. Temukan beragam judul, mulai dari sastra hingga ilmu pengetahuan, sejarah, dan banyak lagi. Dengan akses yang mudah dan nyaman, kami menghadirkan kemudahan eksplorasi dan pembelajaran tanpa batas. Bergabunglah dengan kami untuk menggali harta karun ilmu pengetahuan, menemukan inspirasi baru, dan memperluas wawasan Anda. Segera mulai petualangan Anda di dunia literasi digital bersama kami!
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex">
                <div class="justify-content-between">
                    <img class="img img-fluid" src="img/landing-removebg.png" alt="">
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-end justify-content-md-center align-items-center">
            <div class="col-lg-6 col-sm-12 d-flex order-last order-lg-first">
                <div class="justify-content-between">
                    <img class="img img-fluid" src="img/landing2.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex">
                <div class="body-landing justify-content-between text-lg-start text-sm-center mt-5 ms-5 me-5">
                    <h2 class="fw-bold" style="color: darkslategray;">Popular Books</h2>
                    <p class="text-landing mt-3" style="text-align: justify; font-weight: 500;">
                        Popular book atau buku populer adalah karya yang berhasil memikat jutaan pembaca dengan cerita yang mendalam,
                        karakter yang kuat, dan pengalaman membaca yang tak terlupakan.
                        Dengan daya tarik universal, menjadikannya jembatan menuju dunia imajinasi yang tak terbatas.
                    </p>
                    <h2 class="fw-bold" style="color: coral;">Books Collections</h2>
                    <p class="text-landing mt-3" style="text-align: justify; font-weight: 500;">
                        Koleksi buku kami memadukan kekayaan pengetahuan dari berbagai genre, memenuhi setiap selera pembaca.
                        Dari sastra klasik hingga tren terbaru, koleksi kami menjadi tempat yang menginspirasi untuk menjelajahi dunia literasi yang tak terbatas.
                    </p>
                    <button class="btn mt-3 mb-5" style="background-color:darkslategray;border-radius: 22px;"><a href="{{url('loginSiswa')}}" class="fs-3 fw-bold text-decoration-none" style="color: white;">Got it Now</a></button>

                </div>
            </div>
        </div>
    </div>
    <footer class="footer pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Tentang e-Library</h4>
                    <p>e-Library adalah platform untuk akses mudah terhadap berbagai koleksi buku dan sumber belajar.</p>
                </div>
                <div class="col-md-4">
                    <h4>Link Terkait</h4>
                    <ul class="footer-links ps-0">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Ikuti Kami</h4>
                    <ul class="social-links ps-2">
                        <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr style="color: white;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2023 e-Library. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>