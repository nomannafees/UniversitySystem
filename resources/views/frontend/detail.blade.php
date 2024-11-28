@extends('frontend.layouts.app')
@section('title',isset($university->name) ? $university->name : '')
@section('content')
    <style>
        body {
            background: #000000;
        }
    </style>
    <div class="hero">
        <h1>
            <span class="yellow">Find</span> best university<br>for your <span class="yellow">Future</span>
        </h1>

    </div>

    <div class="container merit-finder-container">
        <div class="bg-dark py-4 text-white">
            <h1 class="text-center">
                {{isset($university->name) ? $university->name : ''}}
            </h1>
        </div>

    </div>

    <div class="container-fluid my-5">
        <div class="row mx-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body p-0">
                        <img class="img-fluid"
                             src="{{ isset($university->image) && \Storage::exists('university_image/'.$university->image) ? url('storage/university_image/'.$university->image) : asset('frontend/assets/img/'.$university->image) }}"
                             alt="University Image">

                    </div>
                </div>
            </div>
            <div class="col-md-4 m-top-2">
                <p>Admission Info:</p>
                <p>{{isset($university->admission_info) ? $university->admission_info : ''}}</p>
                <p>Registrar Office:</p>
                <p>{{isset($university->registrar_office) ? $university->registrar_office : ''}}</p>
                <p>Phone: {{isset($university->phone) ? $university->phone : ''}}</p>
                <p>Email:</p>
                <p>{{isset($university->email) ? $university->email : ''}}</p>
                <p>Address:</p>
                <p>{{isset($university->address) ? $university->address : ''}}</p>

            </div>

        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row mx-2">
            <h1 class="text-center mt-4 mb-4"><span class="yellow"> High</span><span class="text-white"> Chances</span></h1>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered border-dark">
                        <tr class="bg-warning">
                            <td>Degree</td>
                            <td>Last Year Merit</td>
                            <td>Your Merit</td>
                            <td>Difference</td>
                            <td>Fee</td>
                        </tr>
                        @foreach($university->degreeProgramsHigh as $data )
                        <tr class="bg-light">
                            <td>{{isset($data->degree_name) ? $data->degree_name : ''}}</td>
                            <td>{{isset($data->last_year_merit) ? $data->last_year_merit : ''}}</td>
                            <td>{{ Session::has('merit') ? $data->degree_name : '0' }}</td>
                            <td>{{ Session::has('merit') ? $data->degree_name : '0' }}</td>
                            <td>{{isset($data->fees) ? $data->fees : ''}} RS</td>
                        </tr>
                     @endforeach
                    </table>
                </div>
            </div>

            </div>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row mx-2">
            <h1 class="text-center mt-4 mb-4"><span class="yellow"> Low</span><span class="text-white"> Chances</span></h1>
            <div class="col-md-12">
                <div class="table-responsive">
                <table class="table table-bordered border-dark">
                    <tr class="bg-warning">
                        <td>Degree</td>
                        <td>Last Year Merit</td>
                        <td>Your Merit</td>
                        <td>Difference</td>
                        <td>Fee</td>
                    </tr>
                    @foreach($university->degreeProgramsLow as $data )
                        <tr class="bg-light">
                            <td>{{isset($data->degree_name) ? $data->degree_name : ''}}</td>
                            <td>{{isset($data->last_year_merit) ? $data->last_year_merit : ''}}</td>
                            <td>{{ Session::has('merit') ? $data->degree_name : '0' }}</td>
                            <td>{{ Session::has('merit') ? $data->degree_name : '0' }}</td>
                            <td>{{isset($data->fees) ? $data->fees : ''}} RS</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
