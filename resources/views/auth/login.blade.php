@extends('layouts.authlayout')
@section('content')
    <!-- Outer Row -->
    @php
        if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){
            $login_email = $_COOKIE['login_email'];
            $login_pwd = $_COOKIE['login_pwd'];
            $remember_check = "checked = 'checked'";
        }else{
            $login_email = "";
            $login_pwd = "";
            $remember_check = "";
        }
    @endphp
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block  bg-login-image">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome back to <span
                                            style="color: rgb(18, 8, 106);font-size:2rem;font-weight:bolder;">LEKHEKA
                                        </span><span
                                        style="color: rgb(203, 27, 27);font-size:2rem;font-weight:bolder;">PANAHARU
                                    </span></h1>
                                </div>
                                {{-- @if ($errors->any())
                                    <div class="mb-4">
                                        <div class="font-medium text-red-600">
                                            {{ __('Whoops! Something went wrong.') }}
                                        </div>

                                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{session('status')}}
                                    </div>
                                @endif
                                <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..." value="{{ $login_email }}" required
                                            autofocus>
                                        @error('email')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" required value="{{$login_pwd}}"
                                            autocomplete="current-password">
                                        @error('password')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="remember" value="1" {{$remember_check}} class="custom-control-input"
                                                id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="{{route('google.redirect')}}" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="{{route('facebook.redirect')}}"  class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
