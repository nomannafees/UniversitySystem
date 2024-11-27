@extends('frontend.layouts.app')
@section('title','Login')
@section('content')
    <div class="login-hero d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col-md-9 col-offset-3">
                <div class="container login-container ">
                    <div class="bg-dark py-4 rounded">
                        <h1 class="text-center">
                            <span class="text-white"> Login</span><span class="yellow"> Finder</span>
                        </h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mx-5 py-4 text-white">
                                <div class="col-md-12 mt-3">
                                    <label for="your-marks" class="form-label">Email</label>
                                    <input type="email" id="your-marks" class="form-control" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="total-marks" class="form-label">Password</label>
                                    <input type="password" id="total-marks" class="form-control" name="password" placeholder="Enter your password" required>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-warning w-100">Login</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
