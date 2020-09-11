<?php

namespace App\Http\Controllers;

use App\ProductImage;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product_img = ProductImage::all();

        return view('website.backend.productimage.index',compact('product_img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product = Product::all();
        return view('website.backend.productimage.create',compact('product'));
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
        $slug = Str::slug($request->image_title,'-');
        $image=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$image);
         ProductImage::create([
           'product_id'=>$request->product_id,
           'image_title'=>$request->image_title,
           'image'=>$image,

           'slug'=>$slug
          

         ]);
         return redirect()->route('productimage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImage $productimage)
    {
        //
        $pro_img = Product::all();
        return view('website.backend.productimage.update',compact('productimage','pro_img'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductImage $productImage)
    {
        
         $slug = Str::slug($request->image_title,'-');
           // if($request->image)
           // {
             if($request->img)
             {
              $image=time().'.'.$request->img->extension();
             $request->img->move(public_path('images'),$image);
             }
         else
         {
            $image=$productImage->img;
         }
        
        $productImage->update([
          'product_id'=>$request->product_id,
          'image_title'=>$request->image_title,
          'image'=>$image,
          'slug'=>$slug

        ]);
        return redirect()->route('productimage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImage $productImage)
    {
        //
    }
}
