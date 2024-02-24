<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\courses;
use App\Models\lesson;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch = DB::table('branches')->get();
        $slider =  DB::table('sliders')->where('page','=' , 'الدورات')->get();
        return view('courses',compact('branch','slider'));

    }

    public function indexcourse(Request $request, $id )
    {

        $branch =branch::find($id);
        $coursces=DB::table('courses')->where('branche','=' ,$branch->name )->get();

        return view('front.FrontCourcse',compact('branch','coursces'));

    }
    
    public function detalescourse(Request $request, $id ,$branchid )
    {
        $branch =branch::find($branchid);
        $b=courses::find($id);
        $chbter=DB::table('chabters')->where('course','=' ,$b->name )->get();
        // dd($chbter);
        $coursces=DB::table('courses')->where('branche','=' ,$branch->name )->get();
        $chbter1=DB::table('chabters')->where('course','=' ,$b->name )->get();
        //  dd($chbter1[0]);
        $lesson =  DB::table('lessons')->where('course','=',$b->name)->get();

        //
// dd($lesson);
        // 
        return view('front.DitalesCourse',compact('branch','coursces','b','chbter','lesson'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(courses $courses)
    { 

    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(courses $courses)
    {
        //
    }
}
