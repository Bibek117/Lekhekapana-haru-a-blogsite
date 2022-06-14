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
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>
                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <div>
                                    <button class="btn btn-danger btn-user btn-block mb-3">
                                        {{ __('Resend Verification Email') }}
                                    </button>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-primary btn-user btn-block">
                                    Logout
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
