<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Product;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private $product,$products,$image,$imageName,$directory;
    public function addProduct(){
        return view('add-product');
    }
    public function createProduct(Request $request){

        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'img/uploads/';
        $this->image->move($this->directory,$this->imageName);

        $this->product = new Product();
        $this->product->product_name = $request->product_name;
        $this->product->category_name = $request->category_name;
        $this->product->price = $request->price;
        $this->product->image = $this->directory.$this->imageName;
        $this->product->short_description = $request->short_description;
        $this->product->long_description = $request->long_description;
        $this->product->status = $request->status;
        $this->product->save();

        return back()->with('message','Product info create successfully.');

//        DB::table('products')->insert([
//            'product_name' => $request->product_name,
//            'category_name' => $request->category_name,
//            'price' => $request->price,
//            'image' => $request->image,
//            'short_description' => $request->short_description,
//            'long_description' => $request->long_description,
//            'status' => $request->status,
//        ]);

    }

    public function manageProduct(){

        $this->products = Product::all();
//        return $this->products;
        return view('manage-product',['products'=> $this->products]);
    }
    public function edit($id){

        $this->product = Product::find($id);
//        return $this->products;
        return view('edit-product',['product' => $this->product]);
    }
    public function update(Request $request,$id){

        $this->product = Product::find($id);
        if($request->file('image')){

            $this->image = $request->file('image');
            $this->imageName = $this->image->getClientOriginalName();
            $this->directory = 'img/uploads/';
            $this->image->move($this->directory,$this->imageName);
            $this->product->image = $this->directory.$this->imageName;
        }

        $this->products = new Product();
        $this->product->product_name = $request->product_name;
        $this->product->category_name = $request->category_name;
        $this->product->price = $request->price;
        $this->product->long_description = $request->long_description;
        $this->product->status = $request->status;
        $this->product->save();

        return redirect('/manage-product')->with('message','Product info Update successfully.');
    }

    public function delete(){

        $this->product = Product::find($id);
        $this->product->delete();
    }


}
