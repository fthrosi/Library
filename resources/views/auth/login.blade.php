@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Login Admin') }}</h1>
                                </div>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            {{ $error }}<br>
                                        @endforeach
                                    </div>
                                @endif

                                <form method="POST" class="user" action="{{ route('login') }}">
                                    @csrf
                                    @if(Session::has('error'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('error') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user" name="nip" placeholder="{{ __('NIP') }}" value="{{ old('nip') }}" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Password') }}" required>
                                    </div>

                                    <div class="row g-2">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('loginSiswa')}}" class="btn btn-success btn-user btn-block"><i class="fa-solid fa-user-tie" style="color: #ffffff;"></i></a>
                                        </div>
                                    </div>
                                </form>

                                <hr>
                                @if (Route::has('register'))
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">{{ __('Create an Account!') }}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
