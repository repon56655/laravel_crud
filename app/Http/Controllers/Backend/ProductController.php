<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("backend.index");
    }

    public function addproduct()
    {
       return view("backend.addproduct");
    }

    public function viewproduct()
    {
        $products = Product::all();
       return view("backend.viewproduct",compact("products"));
    }


    public function storeproduct(Request $request)
    {
        $product = new Product;

        $product->pname = $request->pname;
        $product->pdes = $request->pdes;
        $product->cat = $request->cat;
        $product->scat = $request->scat;
        $product->price = $request->price;
        $product->status = $request->status;

        $product->save();

        return redirect()->route("viewproduct");
        
    }

    public function editproduct($productId)
    {
        $product = Product::find($productId);
       return view("backend.editproduct",compact("product"));
    }

    public function update(Request $request, $id){

        $product = Product::find($id);

        $product->pname = $request->pname;
        $product->pdes = $request->pdes;
        $product->cat = $request->cat;
        $product->scat = $request->scat;
        $product->price = $request->price;
        $product->status = $request->status;

        $product->update();

        return redirect()->route("viewproduct");


        
    }

    public function delete($id){

        $product = Product::find($id);

        $product->delete();
        
        return redirect()->route("viewproduct");


        
    }




    
}
