<?php

namespace App\Http\Controllers;
use APP\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $role = Auth()->user()->role;
            if($role=='user'){
                return view('dashboard');
            }elseif($role=='admin'){
                return view('admin.dashboard');
            }else{
                return redirect()->back();
            }
        }
   }

   public function blog(){
    return view('user.blog');
   }

   public function contact(){
    return view('user.contact');
   }

   public function courses(){
    return view('user.courses');
   }
}
