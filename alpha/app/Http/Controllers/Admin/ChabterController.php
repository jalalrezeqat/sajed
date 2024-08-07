<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\chabter;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\courses;
use App\Models\lesson;
use Illuminate\Support\Facades\Auth;


class ChabterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource
     */
    public function updatechabterviwe(chabter $chabters, $course)
    {

        $courses = DB::table('courses')->where('id', '=', $course)->get();
        $teacher = DB::table('teachers')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.updatechabterviwe', compact('chabters', 'courses', 'course'));
        } else
            return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new chabter();
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $courseid = DB::table('courses')->where('id', '=', $student->course)->first();
        $student->save();
        return  redirect()->route('admin.courses.courseschabtar', $courseid->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(chabter $chabter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chabter $chabter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = chabter::find($id);
        // $lesson = lesson::select('chabters')->where('chabters', '=', $post->name)->update(array('chabters' => $request->input('name')));

        $post->name = $request->input('name');
        $post->course = $request->input('course');
        // $chabterid=$request->id;
        $courseid = DB::table('courses')->where('id', '=', $post->course)->first();
        $post->save();

        return  redirect()->route('admin.courses.courseschabtar', $courseid->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chabter $chabter)
    {
        //
    }
}
