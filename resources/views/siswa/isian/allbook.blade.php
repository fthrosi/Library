@extends('siswa.dashboard.navbar')

@section('main-content')
<style>

</style>
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
@if($rak->jumlah_buku != 0)
<div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-10 col-md-6 mt-3" style="background-color: white;border-bottom: 1px darkslategray solid;">
        <div class="row me-1">
            <div class="col ps-0">
                <h4 class="d-flex justify-content-start align-items-start mt-3 ps-1" style="border-left: solid 5px darkslategray">
                    {{$rak->jenis_rak}}
                </h4>
            </div>
        </div>
        <div class="row">
            @forelse ($bukuPadaRak as $item)
            @if($item->rak == $rak->id_rak)
            <div class="card col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-2 mb-2" style="background-color:white ;border:none;">
                <img src="/foto_buku/{{ $item->foto_buku }}" alt="" , style="border-radius: 10px;width: 180px; height: 230px;" class="card-image-top">
                <div class="card-body ps-0">
                    <p class="card-title fw-bold">{{Str::limit($item->nama_buku, 20)}}</p>
                    <p>
                    <ul class="d-flex align-items-start justify-content-start p-0" style="list-style: none;">
                        <li class="d-flex align-items-start justify-content-start ">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#book_{{$item->id_buku}}" style="background-color: darkslategray;color: white;" {{ $item->id_pinjam != null ? 'disabled' : ''}}>
                                Borrow
                            </button>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="modal fade" id="book_{{$item->id_buku}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            @endif
            @empty
            <div class="alert alert-danger">
                Data buku belum tersedia.
            </div>
            @endforelse
        </div>
    </div>
</div>
@endif
@endsection