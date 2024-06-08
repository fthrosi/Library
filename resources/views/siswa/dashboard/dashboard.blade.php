@extends('siswa.dashboard.navbar')

@section('main-content')
<style>

</style>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
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
@if(Auth::guard('siswa')->user()->denda != null)
<div>
    <div class="row bg-danger">
        <div class="col mt-2 mb-2 text-white">Anda memiliki denda sebesar Rp. {{Auth::guard('siswa')->user()->denda}}</div>
        <div class="col d-flex justify-content-end align-items-end mt-2 mb-2">
            <form method="POST" action="{{ route('bayar')}}">
                @csrf
                <button type="submit" class="btn-danger">Bayar</button>
            </form>
        </div>
    </div>
</div>
@endif
<div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-10 col-md-6 mt-3" style="background-color: white;border-radius: 10px; height: 300px;">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://e0.pxfuel.com/wallpapers/28/283/desktop-wallpaper-bible-quotes-landscape-motivational-quotes-aesthetic.jpg" class="d-block w-100" alt="..." style="width: 180px; height: 280px; margin-top: 10px; ">
                </div>
                <div class="carousel-item">
                    <img src="https://content.wepik.com/statics/10456821/preview-page0.jpg" class="d-block w-100" alt="..." style="width: 180px; height: 280px; margin-top: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/736x/05/16/1a/05161a906b61abc4f513434663308dc3.jpg" class="d-block w-100" alt="..." style="width: 180px; height: 280px; margin-top: 10px;">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-10 col-md-6 mt-3" style="background-color: white;border-bottom: 1px darkslategray solid;">
        <div class="row me-1">
            <div class="col ps-0">
                <h4 class="d-flex justify-content-start align-items-start mt-3 ps-1" style="border-left: solid 5px darkslategray">
                    Trending Books
                </h4>
            </div>
        </div>
        <div class="row">
            @forelse ($trend as $item)
            <div class="card col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-2 mb-2" style="background-color:white ;border:none;">
                <img src="/foto_buku/{{ $item->foto_buku }}" alt="" , style="border-radius: 10px;width: 180px; height: 230px;" class="card-image-top">
                <div class="card-body ps-0">
                    <p class="card-title fw-bold">{{Str::limit($item->nama_buku, 20)}}</p>
                    <p>
                    <ul class="d-flex align-items-start justify-content-start p-0" style="list-style: none;">
                        <li class="d-flex align-items-start justify-content-start ">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#pinjam_{{$item->id_buku}}" style="background-color: darkslategray;color: white;" {{ $item->id_pinjam != null ? 'disabled' : ''}}>
                                Borrow
                            </button>

                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="modal fade" id="pinjam_{{$item->id_buku}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="/foto_buku/{{ $item->foto_buku }}" alt="Gambar Buku" style="width: 100%; height: 100%; border-radius: 10px;">
                                </div>
                                <div class="col-lg-6">
                                    <p><span class="fw-bold fs-5">Judul Buku</span> : {{$item->nama_buku}}</p>
                                    <p><span class="fw-bold fs-5">Penulis Buku</span> : {{$item->penulis}}</p>
                                    <p><span class="fw-bold fs-5">Penerbit Buku</span>: {{$item->penerbit}}</p>
                                    <p class="fw-bold fs-5">Sinopsis : </p>
                                    <p>{{$item->sinopsis}}</p>
                                    <hr>
                                    <h4 class="fw-bold">Review Buku</h4>
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @php $first = true @endphp
                                                @foreach($ulasan as $review)
                                                @if($review->id_buku == $item->id_buku)
                                                <div class="carousel-item @if($first) active @endif">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{$review->siswa->name}}</h5>
                                                            <p class="card-text">{{$review->ulasan}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php $first = false @endphp 
                                                @endif
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="POST" action="{{ route('pinjam', ['id' => $item->id_buku]) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Pinjam</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Data buku belum tersedia.
            </div>
            @endforelse
        </div>
    </div>
</div>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-10 col-md-6 mt-3" style="background-color: white;border-bottom: 1px darkslategray solid;">
        <div class="row me-1">
            <div class="col ps-0">
                <h4 class="d-flex justify-content-start align-items-start mt-3 ps-1" style="border-left: solid 5px darkslategray">
                    New Books
                </h4>
            </div>
        </div>
        <div class="row">
            @forelse ($new as $item)
            <div class="card col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-2 mb-2" style="background-color:white ;border:none;">
                <img src="/foto_buku/{{ $item->foto_buku }}" alt="" , style="border-radius: 10px;width: 180px; height: 230px;" class="card-image-top">
                <div class="card-body ps-0">
                    <p class="card-title fw-bold">{{Str::limit($item->nama_buku, 20)}}</p>
                    <p>
                    <ul class="d-flex align-items-start justify-content-start p-0" style="list-style: none;">
                        <li class="d-flex align-items-start justify-content-start ">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#pinjam_{{$item->id_buku}}" style="background-color: darkslategray;color: white;" {{ $item->id_pinjam != null ? 'disabled' : ''}}>
                                Borrow
                            </button>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="modal fade" id="pinjam_{{$item->id_buku}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="/foto_buku/{{ $item->foto_buku }}" alt="Gambar Buku" style="width: 100%; height: 100%; border-radius: 10px;">
                                </div>
                                <div class="col-lg-6">
                                    <p><span class="fw-bold fs-5">Judul Buku</span> : {{$item->nama_buku}}</p>
                                    <p><span class="fw-bold fs-5">Penulis Buku</span> : {{$item->penulis}}</p>
                                    <p><span class="fw-bold fs-5">Penerbit Buku</span>: {{$item->penerbit}}</p>
                                    <p class="fw-bold fs-5">Sinopsis : </p>
                                    <p>{{$item->sinopsis}}</p>
                                    <hr>
                                    <h4 class="fw-bold">Review Buku</h4>
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @php $first = true @endphp
                                                @foreach($ulasan as $review)
                                                @if($review->id_buku == $item->id_buku)
                                                <div class="carousel-item @if($first) active @endif">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{$review->siswa->name}}</h5>
                                                            <p class="card-text">{{$review->ulasan}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php $first = false @endphp 
                                                @endif
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form method="POST" action="{{ route('pinjam', ['id' => $item->id_buku]) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Pinjam</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Data buku belum tersedia.
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection