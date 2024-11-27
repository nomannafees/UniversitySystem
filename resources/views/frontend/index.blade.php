@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
    <div class="hero">
        <h1>
            <span class="yellow">Find</span> best university<br>for your <span class="yellow">Future</span>
        </h1>

    </div>

    <div class="container merit-finder-container">
        <div class="bg-dark py-4">
            <h1 class="text-center">
                <span class="text-white"> Merit</span><span class="yellow"> Finder</span>
            </h1>
            <form>
                <div class="row mx-5 py-4 text-white align-items-end">
                    <!-- Your Marks Field -->
                    <div class="col-md-3 t-m">
                        <label for="your-marks" class="form-label">Your marks</label>
                        <input type="number" id="your-marks" class="form-control" placeholder="Your marks" required>
                    </div>

                    <!-- Total Marks Field -->
                    <div class="col-md-3 t-m">
                        <label for="total-marks" class="form-label">Total marks</label>
                        <input type="number" id="total-marks" class="form-control" placeholder="Total marks" required>
                    </div>

                    <!-- City Field -->
                    <div class="col-md-3 t-m">
                        <label for="city" class="form-label">City</label>
                        <input type="text" id="city" class="form-control" placeholder="City" required>
                    </div>

                    <!-- Search Button -->
                    <div class="col-md-3  t-m-3">
                        <button type="submit" class="btn btn-warning w-100">Search</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

    <div class="container-fluid mt-5">
        <div class="row mx-2 m-top-7">
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid " src="{{asset('frontend/assets/img/uni_1.jpeg')}}" alt="">
                    </div>
                    <div class="card-footer p-4 bg-dark text-white text-center">
                        <h4 class="mt-2">BZU</h4>
                        <span class="fs-5">20 results found</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-sm-5 mt-md-0">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/uni_2.jpg')}}" alt="">
                    </div>
                    <div class="card-footer p-4 bg-dark text-white text-center">
                        <h4 class="mt-2">MNSUAM</h4>
                        <span class="fs-5">30 results found</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-sm-5 mt-md-0">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/uni_3.png')}}" alt="">
                    </div>
                    <div class="card-footer p-4 bg-dark text-white text-center">
                        <h4 class="mt-2">ISP</h4>
                        <span class="fs-5">2 results found</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-2 mt-5 mb-5 m-top-7">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/uni_1.jpeg')}}" alt="">
                    </div>
                    <div class="card-footer p-4 bg-dark text-white text-center">
                        <h4 class="mt-2">MNSUET</h4>
                        <span class="fs-5">8 results found</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-sm-5 mt-md-0">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/uni_2.jpg')}}" alt="">
                    </div>
                    <div class="card-footer p-4 bg-dark text-white text-center">
                        <h4 class="mt-2">AIR UNIVERSITY</h4>
                        <span class="fs-5">3 results found</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-sm-5 mt-md-0"">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/uni_3.png')}}" alt="">
                    </div>
                    <div class="card-footer p-4 bg-dark text-white text-center">
                        <h4 class="mt-2">NFCUET</h4>
                        <span class="fs-5">10 results found</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
