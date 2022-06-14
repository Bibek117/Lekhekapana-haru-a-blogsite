@extends('layouts.authlayout')
@section('content')
    <div class="row justify-content-center mt-5">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <!-- Nested Row within Card Body -->
                        <div class="col-lg-6 d-none d-lg-block  bg-login-image">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                </div>
                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" required 
                                            autocomplete="current-password">
                                        @error('password')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        {{__('Confirm')}}
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
