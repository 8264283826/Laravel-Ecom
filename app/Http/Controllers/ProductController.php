<?php

namespace App\Http\Controllers;
use App\ProductCategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
       
        return view('website.backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productcategory=ProductCategory::all();
        return view('website.backend.product.create',compact('productcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $slug = Str::slug($request->product_name,'-');
        Product::create([
         'category_id'=>$request->category_id,
         'product_name'=>$request->product_name,
         'product_desc'=>$request->product_desc,
         'price'=>$request->price,
         'slug'=>$slug

        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $productcategory = ProductCategory::all();
        return view('website.backend.product.update',compact('product','productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $slug = Str::slug($request->product_name,'-');
        $product->update([
           'category_id'=>$request->category_id,
         'product_name'=>$request->product_name,
         'product_desc'=>$request->product_desc,
         'price'=>$request->price,
         'slug'=>$slug
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index');

    }
}
