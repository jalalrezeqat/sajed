<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teachers;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.layouts.courses.teacher.teacher');

    }

    public function viweaddteacher()

    {
       
        return view('admin.layouts.courses.teacher.viweaddteacher');

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
        
        $student = new teachers();
        $student->name = $request->input('name');


        if($request->hasfile('img'))
        {
            
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img/teacher/', $filename);
            $student->img = $filename;
        }
        if($request->hasfile('sliders_teacher'))
        {
            
            $file = $request->file('sliders_teacher');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img/teacher/', $filename);
            $student->sliders_teacher = $filename;
        }

        $student->save();
        return  redirect()->route('admin.teacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(rc $rc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rc $rc)
    {
        //
    }
}
