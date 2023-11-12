@extends('Master_Layout.master')
@section('title')
    About
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 lineUp">
                    <div class="card shadow text-white bg-beguni card-body">
                        <form action="{{route('make-series')}}" method="POST">
                            @csrf
                            <h3 class="text-center fw-bold">Number Series</h3>
                            <hr>
                            <div class="row mb-3">
                                <label for="firstNumber" class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input id="firstNumber" type="number" value="{{session('start_number')}}" name="start_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="endNumber" class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input id="endNumber" type="number" value="{{session('end_number')}}" name="end_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Your Choice Number</label>
                                <div class="col-md-9">
                                    <label for="odd">&nbsp;<input id="odd" type="radio" name="choice" value="odd"> Odd </label>
                                    <label for="even">&nbsp;<input id="even" type="radio" name="choice" value="even"> even </label>
                                    <label for="all">&nbsp;<input id="all" type="radio" name="choice" value="all"> All </label>
                                    <label for="add">&nbsp;<input id="add" type="radio" name="choice" value="add"> + </label>
                                    <label for="sub">&nbsp;<input id="sub" type="radio" name="choice" value="sub"> - </label>
                                    <label for="mul">&nbsp;<input id="mul" type="radio" name="choice" value="mul"> * </label>
                                    <label for="div">&nbsp;<input id="div" type="radio" name="choice" value="div"> / </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="result" class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea id="result" class="form-control" cols="30" rows="5">{{session('result')}}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Create Series" class="btn btn-success rounded-0 px-5">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
