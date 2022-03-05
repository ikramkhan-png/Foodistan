<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Category;
use App\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =Product::get();
        return view('admin-views.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNotNull('category_id')->get();
        return view('admin-views.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'price'=>$request->price,
            'total_items'=>$request->total_items,
        );
        if($request->hasFile('image')){
            $image =$request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads/products"),$fileName);
            $data['image']=$fileName;

        }
        $create = Product::create($data);
        return redirect(route('product.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =Product::findOrFail($id);
        $categories = Category::whereNotNull('category_id')->get();
        return view('admin-views.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    
        $product =Product::findOrFail($id);
        $data = array(
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
        );
        if($request->hasFile('image')){
            $image =$request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads/products"),$fileName);
            $data['image']=$fileName;

        }
        
        $create = Product::where('id',$id)->update($data);
        return redirect(route('product.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product =Product::findOrFail($id);
        $product->delete();
        return back();
    }  

}
