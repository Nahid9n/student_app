@extends('master_layout/master')

@section('title')
    Student Info
@endsection

@section('body')
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="col-md-6  lineUp mx-auto">
                <div class="card bg-beguni text-white card-body">
                    <form action="{{route('student-information')}}" method="POST">
                        @csrf
                        <h3 class="text-center fw-bold">Student Form</h3>
                        <hr>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Student Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="student_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Subject Name</label>
                            <div class="col-md-9">
                                <label for="Bangla"><input id="Bangla" type="checkbox" class="" name="subject[]" value="Bangla"> Bangla</label>
                                <label for="English"><input id="English" type="checkbox" class="" name="subject[]" value="English"> English</label>
                                <label for="Math"><input id="Math" type="checkbox" class="" name="subject[]" value="Math"> Math</label>
                                <label for="Physics"><input id="Physics" type="checkbox" class="" name="subject[]" value="Physics"> Physics</label>
                                <label for="Biology"><input id="Biology" type="checkbox" class="" name="subject[]" value="Biology"> Biology</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-warning" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Subject List</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{session('name')}}</td>
                                <td>
                                    <ul>
                                        @if(session('subject'))
                                        @foreach(session('subject') as $subject )
                                        <li>{{$subject}}</li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
