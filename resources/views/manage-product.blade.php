@extends('master_layout/master')

@section('title')
    Manage Product
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table bg-danger table-hover table-dark table-border">
                        <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->price}}</td>
                            <td><img src="{{asset($product->image)}}" class="img-fluid" height="70px" width="70px" alt=""></td>
                            <td>{{$product->long_description}}</td>
                            <td>{{$product->status}}</td>
                            <td>
                                <a href="{{route('edit-product',['id' => $product->id])}}" class="btn btn-success btn-sm mb-2">Edit</a>
                                <a href="" class="btn btn-danger btn-sm mb-2">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
