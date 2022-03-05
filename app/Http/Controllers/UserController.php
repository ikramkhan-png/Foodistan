<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('admin-views.users.index',compact('users'));
    }
    public function create(){
        return view('admin-views.users.add');
    }
   public function delete($id)
    {
        $user =User::findOrFail($id);
        $user->delete();
        return back();
    } 

}