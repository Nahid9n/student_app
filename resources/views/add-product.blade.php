@extends('master_layout/master')

@section('title')
    Add Product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 lineUp">
                    <div class="card shadow text-white bg-beguni card-body">
                        <p class="text-center text-white">{{session('message')}}</p>
                        <form action="{{route('createProduct')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="text-center fw-bold">Add Product</h3>
                            <hr>
                            <div class="row mb-3">
                                <label for="productName" class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input id="productName" type="text" value="" name="product_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="categoryName" class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input id="categoryName" type="text" value="" name="category_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-3">Price</label>
                                <div class="col-md-9">
                                    <input id="price" type="text" value="" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input id="image" type="file" value="" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="shortDescription" class="col-md-3">Short Description</label>
                                <div class="col-md-9">
                                    <input id="shortDescription" type="text" value="" name="short_description" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="longDescription" class="col-md-3">Long Description</label>
                                <div class="col-md-9">
                                    <input id="longDescription" type="text" value="" name="long_description" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Status</label>
                                <div class="col-md-9">
                                    <label for="publish">&nbsp;<input id="publish" type="radio" name="status" value="1"> Publish </label>
                                    <label for="unpublish">&nbsp;<input id="unpublish" type="radio" name="status" value="0"> Unpublish </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Add Product" class="btn btn-success rounded-0 px-5">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
