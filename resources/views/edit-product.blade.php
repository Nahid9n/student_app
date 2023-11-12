@extends('master_layout/master')

@section('title')
    Update Product
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 lineUp">
                    <div class="card shadow text-white bg-beguni card-body">
                        <p class="text-center text-white">{{session('message')}}</p>
                        <form action="{{route('update-product',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="text-center fw-bold">Edit Product</h3>
                            <hr>
                            <div class="row mb-3">
                                <label for="productName" class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input id="productName" type="text" value="{{$product->product_name}}" name="product_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="categoryName" class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input id="categoryName" type="text" value="{{$product->category_name}}" name="category_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-3">Price</label>
                                <div class="col-md-9">
                                    <input id="price" type="text" value="{{$product->price}}" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input id="image" type="file" value="" name="image" class="form-control mb-1">
                                    <img src="{{asset($product->image)}}" class="img-fluid" height="70px" width="70px" alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="longDescription" class="col-md-3">Long Description</label>
                                <div class="col-md-9">
                                    <input id="longDescription" type="text" value="{{$product->long_description}}" name="long_description" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Status</label>
                                <div class="col-md-9">
                                    <label for="publish">&nbsp;<input id="publish" type="radio" name="status" {{$product->status == 1 ? 'checked' :''}} value="1"> Publish </label>
                                    <label for="unpublish">&nbsp;<input id="unpublish" type="radio" name="status" {{$product->status == 0 ? 'checked' :''}} value="0"> Unpublish </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Update Product Info" class="btn btn-success rounded-0 px-5">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
