<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\courses;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.layouts.courses.courses.courses');

    }

    public function viweaddcourses()

    {
        $branch = DB::table('branches')->get();
        $teacher = DB::table('teachers')->get();
        return view('admin.layouts.courses.courses.viweaddcourses',compact('branch','teacher'));

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
        $student = new courses();
        $student->name = $request->input('name');
        $student->summary = $request->input('summary');
        $student->price = $request->input('price');
        $student->branche = $request->input('branche');
        $student->teacher_name = $request->input('teacher_name');
        $student->status = '0';


        if($request->hasfile('img_name'))
        {
            
            $file = $request->file('img_name');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img/courses/', $filename);
            $student->img_name = $filename;
        }
       

        $student->save();
        return  redirect()->route('admin.courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
}
