@extends('Master_Layout.master')
@section('title')
    Password Generator
@endsection

@section('body')
    <section class="py-5 bg-success-subtle ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 lineUp mx-auto">
                    <div class="card shadow bg-beguni text-white card-body">
                        <form action="{{route('create-password')}}" method="POST">
                            <h3 class="text-center fw-bold">Password Generator Form</h3>
                            <hr>
                            <form action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password Length</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{session('password_length')}}" name="password_length" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Your Password</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{session('result')}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input  type="submit" class="btn btn-danger" value="Create Password"/>
                                    </div>
                                </div>


                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
