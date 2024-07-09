<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }
    public function index(){
        if(Auth::id()){
            $role = Auth()->user()->role;
            if($role=='user'){
                return view('user.dashboard' );
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
   public function detailcourses(){
    $courses = Course::all();
    return view('details-course', compact('courses'));
   }

   public function user(){
    $users = User::all();

    return view('admin.user', compact('users'));
   }

   public function coursesadmin(){
    $courses = Course::all();
    return view('admin.courses', compact('courses'));
   }
}
