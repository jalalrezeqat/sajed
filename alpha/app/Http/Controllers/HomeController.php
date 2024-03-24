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
        $branch = DB::table('branches')->pluck('id');
        // $courscesdet=DB::table('courses')->where('branche','=' ,$branch )->get();
        $CommonQuestions =  DB::table('common_questions')->get();
        $slider =  DB::table('sliders')->where('page', '=', 'الرئيسية')->get();
        $sliderteacher =  DB::table('sliders')->where('page', '=', 'المعلم')->get();
        return view('welcome', compact('courses', 'CommonQuestions', 'slider', 'sliderteacher', 'branch'));
    }
}
