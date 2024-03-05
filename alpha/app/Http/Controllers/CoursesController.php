<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\courses;
use App\Models\lesson;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\codecard;


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
    
    public function detalescourse(Request $request, $id  )
    {
        $user=Null;
        if(Auth::user()){
            $user=Auth::user()->name;
        }
        $branch =DB::table('branches')->pluck('name');
        foreach ($branch as $branchs)
        {
            $i=0;
            $br=$branch[$i];
            $i++;
            
        }
        $i=0;
       // $branch =branch::find($branchid);
        $b=courses::find($id);
        $chbter=DB::table('chabters')->where('course','=' ,$b->name )->get();
        $coursces=DB::table('courses')->where('branche','=' ,$br )->get();
        $chbter1=DB::table('lessons')->where('course','=' ,$b->name )->get();
        $lesson =  DB::table('lessons')->select('id','name','chabters')->where('course','=',$b->name)->get();
        $teatcher =DB::table('teachers')->where('name','=',$b->teacher_name)->get();
        $chabtercount=$chbter->count();
        $lessoncount=$lesson->count();

      
        return view('front.DitalesCourse',compact('branch','coursces','b','chbter','lesson','chbter1','chabtercount','lessoncount','teatcher','user'));

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
    public function codesend(Request $request ,$user)
    {
        $codefind =DB::table('codecards')->where('code','=',$request->input('code'))->first();
        DB::table('codecards')->where('code', $request->input('code'))->update(['user' => $user]);
        // $post = codecard::find($codefind);
        // $codefind->user = $request->user;
        // $codefind->save();
        // dd($request->user);
        return  redirect()->back();

    }
}
