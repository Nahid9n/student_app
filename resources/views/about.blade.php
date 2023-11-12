@extends('Master_Layout.master')
@section('title')
    About
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 lineUp mx-auto">
                    <div class="card shadow card-body bg-beguni text-white">
                        <h3 class="text-center fw-bold">Student Form</h3>
                        <hr>
                        <form action="{{route('make-full-name')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('first_name')}}" name="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('last_name')}}" name="last_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('full_name')}}" name="full_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input  type="submit" class="btn btn-danger" value="Make Full Name"/>
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
