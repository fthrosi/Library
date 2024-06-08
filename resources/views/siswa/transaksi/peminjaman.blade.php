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
<div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-10 col-md-6 mt-3" style="background-color: white;">
        <div class="row">
            @forelse ($peminjaman as $item)
            <div class="card col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-2 mb-2" style="background-color:white ;border:none;">
                <img src="/foto_buku/{{ $item->buku->foto_buku }}" alt="" , style="border-radius: 10px;width: 180px; height: 230px;" class="card-image-top ms-3">
                <div class="card-body">
                    <p class="card-title fw-bold">{{Str::limit($item->buku->nama_buku, 20)}}</p>
                    <p class="fw-bold">Kembali: <span  style="color: red;">{{$item->tanggal_kembali}}</span></p>
                    <p>
                    <ul class="d-flex align-items-start justify-content-start p-0" style="list-style: none;">
                        <li class="d-flex align-items-start justify-content-start ">
                            <form method="POST" action="{{ route('history', ['id' => $item->buku->id_buku])}}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Return</button>
                            </form>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Data Peminjaman buku belum tersedia.
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection