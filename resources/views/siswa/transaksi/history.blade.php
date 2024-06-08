@extends('siswa.dashboard.navbar')

@section('main-content')
<style>

</style>
<div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-10 col-md-6 mt-3" style="background-color: white;">
        <div class="row">
            @forelse ($history as $item)
            <div class="card col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-2 mb-2" style="background-color:white ;border:none;">
                <img src="/foto_buku/{{ $item->buku->foto_buku }}" alt="" , style="border-radius: 10px;width: 180px; height: 230px;" class="card-image-top">
                <div class="card-body ps-0">
                    <p class="card-title fw-bold">{{Str::limit($item->buku->nama_buku, 20)}}</p>
                    <p class="fw-bold">Kembali: <span  style="color: red;">{{$item->tanggal_kembali}}</span></p>
                    <button type="button" class="rounded" data-bs-toggle="modal" data-bs-target="#ulasan_{{$item->buku->id_buku}}" style="background-color: darkslategray;color: white;">
                        Ulasan
                    </button>
                </div>
            </div>
            <div class="modal fade" id="ulasan_{{$item->buku->id_buku}}" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                    <form method="POST" action="{{ route('ulasanPost', ['id' => $item->id_buku]) }}">
                        <div class="modal-body">
                            <textarea name="ulasan" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                @csrf
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
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