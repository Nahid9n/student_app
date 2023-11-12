<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<nav class="py-2 shadow navbar navbar-expand-md">
    <div class="container">
        <a href="" class="navbar-brand fs-3 fw-bold">STUDENT ARENA</a>
        <button class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li><a href="{{route('home')}}" class="nav-link text-center">home</a></li>
                <li><a href="{{route('about')}}" class="nav-link text-center">About</a></li>
                <li><a href="{{route('contact')}}" class="nav-link text-center">Contact</a></li>
                <li><a href="{{route('password-generator')}}" class="nav-link text-center">Password Generator</a></li>
                <li><a href="{{route('student-info')}}" class="nav-link text-center">Student Info</a></li>
                <li><a href="{{route('add-product')}}" class="nav-link text-center">Add Product</a></li>
                <li><a href="{{route('manage-product')}}" class="nav-link text-center">Manage Product</a></li>
            </ul>
        </div>
    </div>
</nav>


