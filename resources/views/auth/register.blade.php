@extends('frontend.layouts.app')
@section('title','Register')
@section('content')
    <div class="login-hero d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col-md-9 col-offset-3">
                <div class="container login-container ">
                    <div class="bg-dark py-4 rounded">
                        <h1 class="text-center">
                            <span class="text-white"> Register</span><span class="yellow"> Finder</span>
                        </h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mx-5 py-4 text-white">
                                <div class="col-md-12 mt-3">
                                    <label for="your-marks" class="form-label">Name</label>
                                    <input type="text" id="your-marks" class="form-control" name="name" placeholder="Enter your name" required autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="your-marks" class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your valid email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-warning w-100">Register</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
