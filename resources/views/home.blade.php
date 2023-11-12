@extends('master_layout/master')

@section('title')
    Home Page
@endsection

@section('body')
    <section class="py-5 animation">
        <div class="container ">
            <h1 class="text-center text-white lineUp fw-bold">Our <span class="bg-beguni rounded-2 text-white p-2">Students</span></h1>
            <div class="row ">
                @foreach($students as $student)
                    <div class="col-md-4 lineUp cardhover2">
                        <a href="{{route('details',['id'=>$student['id']])}}" class="text-decoration-none text-dark">
                            <div class="position-relative z-1" style="left: 13%; top: 10%">
                                <img src="{{asset($student['image'])}}" class="img-fluid w-75 rounded-4 img-thumbnail" alt="">
                            </div>
                            <div class="position-relative  bg-beguni d-grid align-content-center rounded-5 pt-4" style="height: 270px">
                                <h4 class="text-white text-center fw-bold pt-3">{{$student['name']}}</h4>
                                <p class="px-4 text-white text-center">Class : {{$student['Class']}}</p>
                                <p class="px-4 text-white text-center">Age :{{$student['age']}}</p>
                                <p class="px-4 text-white text-center">{{$student['description']}}</p>
                                <!--                        <p class="px-4 text-white text-center">--><?php //echo $service['time']?><!--</p>-->
                            </div>
                            <div class="position-relative" style="top: -20px; left: 30%">
                                <a href="{{route('details',['id'=>$student['id']])}}" class="btn btn-danger btnhover1 rounded-4 px-4 py-2">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
