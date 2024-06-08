@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard Perpustakaan') }}</h1>

<!-- Informasi Perpustakaan -->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 my-2">
            <div class="card shadow bg-white text-dark rounded">
                <div class="card-body">
                    <h1 class="py-3"><span class="alert alert-info p-2">📖</span></h1>
                    <div class="ps-3">
                        <h4 class="font-weight-bold">{{ count($buku)}}</h4>
                        <p>Books</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 my-2">
            <div class="card shadow-lg bg-white text-dark rounded">
                <div class="card-body">
                    <h1 class="py-3"><span class="alert alert-danger p-2">📝</span></h1>
                    <div class="ps-3">
                        <h4 class="font-weight-bold">{{ count($peminjaman)}}</h4>
                        <p>Pinjaman</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 my-2">
            <div class="card shadow bg-white text-dark rounded">
                <div class="card-body">
                    <h1 class="py-3"><span class="alert alert-primary p-2">🔄</span></h1>
                    <div class="px-3">
                        <h4 class="font-weight-bold">{{ count($history)}}</h4>
                        <p>Renewals</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 my-2">
            <div class="card shadow bg-white text-dark rounded">
                <div class="card-body">
                    <h1 class="py-3"><span class="alert alert-success p-2">✅</span></h1>
                    <div class="ps-3">
                        <h4 class="font-weight-bold">{{ count($siswa)}}</h4>
                        <p>Siswa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
