<?php

namespace App\Http\Controllers;
use App\Controllers\CoursesController\courses;
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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');   

    }
 

  
}
