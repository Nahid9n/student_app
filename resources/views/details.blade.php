@extends('master_layout/master')

@section('title')
    Details Page
@endsection

@section('body')
    <section class="py-5 bg-dark-subtle">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 lineUp mb-3">
                    <div class="card card-body cardhover2 shadow">
                        <div class="row ">
                            <div class="col-md-6 text-center">
                                <img src="{{asset($student['image'])}}" class="img-fluid w-100" alt="">
                            </div>
                            <div class="col-md-6 ">
                                <h3>{{$student['name']}}</h3>
                                <p>{{$student['description']}}</p>
                                <p>Class : {{$student['Class']}}</p>
                                <p>Age : {{$student['age']}}</p>
{{--                                <a href="" data-bs-toggle="modal" class="btn btnhover btn-outline-success px-4">Booked Now <i class="fa-solid fa-arrow-right"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
