<?php

namespace App\Http\Controllers;
use App\User;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::get();
        return view('admin-views.seller.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        
        return view('admin-views.seller.add',compact('users'));
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
            'email'=>$request->email,
            'shop_name'=>$request->shop_name,
            'description'=>$request->description,
            'user_id'=> $request->user_id,
            'address'=>$request->address,
        );
        if($request->hasFile('profile')){
            $profile =$request->file('profile');
            $fileName = date('dmY').time().'.'.$profile->getClientOriginalExtension();
            $profile->move(public_path("/uploads/profileimg"),$fileName);
            $data['profile']=$fileName;

        }
        if($request->hasFile('documents')){
            $documents =$request->file('documents');
            $fileName = date('dmY').time().'.'.$documents->getClientOriginalExtension();
            $documents->move(public_path("/uploads/shopDocuments"),$fileName);
            $data['documents']=$fileName;

        }
        $create = Seller::create($data);
        return redirect(route('seller.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
   
     public function edit($id)
    {
        $seller =Seller::findOrFail($id);
        return view('admin-views.seller.edit',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request,$id)
    {
    
        $seller =Seller::findOrFail($id);
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'shop_name'=>$request->shop_name,
            'description'=>$request->description,
        );
        
        if($request->hasFile('profile')){
            $profile =$request->file('profile');
            $fileName = date('dmY').time().'.'.$profile->getClientOriginalExtension();
            $profile->move(public_path("/uploads/profileimg"),$fileName);
            $data['profile']=$fileName;

        }
        if($request->hasFile('documents')){
            $documents =$request->file('documents');
            $fileName = date('dmY').time().'.'.$documents->getClientOriginalExtension();
            $documents->move(public_path("/uploads/shopDocuments"),$fileName);
            $data['documents']=$fileName;

        }
        
        $create = Seller::where('id',$id)->update($data);
        return redirect(route('sellers.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $seller =Seller::findOrFail($id);
        $seller->delete();
        return back();
    } 
}
