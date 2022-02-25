<?php

namespace App\Http\Controllers;

use App\Base;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }
    public function productView()
    {
        return view('front.productView');
    }
    public function cart()
    {
        return view('front.cart');
    }
    public function checkOut()
    {
        return view('front.checkout');
    }
    public function rough()
    {
        return view('front.rough');
    }
    public function groceries()
    {
        return view('front.groceries');
    }
    public function recipes()
    {
        return view('front.recipes');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.about');
    }
    public function wishlist()
    {
        return view('front.wishlist');
    }
    public function sellerHome()
    {
        return view('front.sellerHome');
    }
     public function register()
    {
        return view('front.register');
    }
     public function login()
    {
        return view('front.login');
    }
    public function specialOffer()
    {
        return view('front.specialOffer');
    }
    public function sellerOrders()
    {
        return view('front.sellerOrders');
    }
    public function sellerGrocery()
    {
        return view('front.sellerGrocery');
    }
    public function sellerRecipe()
    {
        return view('front.sellerRecipe');
    }
    public function orders()
    {
        return view('front.orders');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function show(Base $base)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function edit(Base $base)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Base $base)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Base  $base
     * @return \Illuminate\Http\Response
     */
    public function destroy(Base $base)
    {
        //
    }
}
