<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CoursesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\courses as ModelsCourses;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $courses = DB::table('courses')->get();
        $questions =  DB::table('questions')->get();
        $slider =  DB::table('sliders')->where('page','=' , 'الرئيسية')->get();
        $slidertetcher =  DB::table('sliders')->where('page','=' , 'المعلم')->get();
        return view('welcome' ,compact('courses','questions','slider','slidertetcher'));   

    }
 

  
}
