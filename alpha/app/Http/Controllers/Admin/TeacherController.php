<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teachers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;




class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tetcher =  DB::table('teachers')->get();
        return view('admin.layouts.courses.teacher.teacher', compact('tetcher'));
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
        $post->summernote = $request->input('summernote');


        if ($request->hasfile('img')) {

            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/teacher/', $filename);
            $student->img = $filename;
        }
        if ($request->hasfile('sliders_teacher')) {

            $file = $request->file('sliders_teacher');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/slidertetcher/', $filename);
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
    public function edit(teachers $teacher)
    {
        return view('admin.layouts.courses.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $post = teachers::find($id);
        $post->name = $request->input('name');
        $post->summernote = $request->input('summernote');

        if ($request->hasfile('img')) {

            $distination = 'img/teacher/' . $post->img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/teacher/', $file_name);
            $post->img     = $file_name;
        }
        if ($request->hasfile('sliders_teacher')) {

            $distination = 'img/slidertetcher/' . $post->sliders_teacher;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/slidertetcher/', $file_name);
            $post->sliders_teacher     = $file_name;
        }
        $post->save();

        return  redirect()->route('admin.teacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $teacher_id)
    {
        $post = teachers::find($teacher_id);
        $sliderDb = DB::table('teachers');
        $sliderdelete = $sliderDb->where('id', $teacher_id);
        $distination = 'img/teacher/' . $post->img;
        $distinationslider = 'img/slidertetcher/' . $post->sliders_teacher;
        if (File::exists($distination)) {
            File::delete($distination);
        }
        if (File::exists($distinationslider)) {
            File::delete($distinationslider);
        }
        $sliderdelete->delete();

        return  redirect()->back();
    }
}
