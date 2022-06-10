@extends('layouts.auth.guestlayout')
@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block  bg-reset-image">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Password Reset  <span
                                            style="color: rgb(18, 8, 106);font-size:2rem;font-weight:bolder;">LEKHEKA
                                        </span><span
                                        style="color: rgb(203, 27, 27);font-size:2rem;font-weight:bolder;">PANAHARU
                                    </span></h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    {{-- password reset token --}}
                                    <input type="hidden" name="token" value="{{$request->route('token')}}">

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..." value="{{ old('email',$request->email) }}" required
                                            autofocus>
                                        @error('email')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- password --}}
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                            placeholder="Password" name="password">
                                            @error('password')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- Confirm password --}}
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                            placeholder="Confirm Password" name="password_confirmation">
                                            @error('password_confirmation')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection