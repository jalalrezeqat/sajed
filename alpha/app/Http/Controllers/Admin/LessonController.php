<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Controller;
use App\Models\lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\chabter;
use App\Models\courses;
use Illuminate\Support\Facades\File;
use Owenoj\LaravelGetId3\GetId3;
use Illuminate\Support\Facades\Storage;



class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $chabterid = $request->id;
        $chabter = chabter::find($id);

        $lesson = DB::table('lessons')->where('chabters', '=', $chabter->id)->where('course', '=', $chabter->course)->get();
        return view('admin.layouts.courses.courses.lesson', compact('lesson', 'chabterid', 'chabter'));
    }
    public function lessonadd(Request $request, $id)
    {

        $chabter = DB::table('chabters')->where('id', '=', $id)->get();
        $chabterid = chabter::find($id);
        // dd($chabterid);
        // $chabter=DB::table('chabters')->get();
        return view('admin.layouts.courses.courses.lessonadd', compact('chabter', 'chabterid'));
    }
    public function back()
    {
        $chabter = DB::table('chabters')->get();
        return redirect()::previous();
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
    public function store(Request $request, $id)
    {

        $student = new lesson();
        $student->name = $request->input('name');
        $student->chabters = $request->input('chabters');
        // $courses = DB::table('chabters')->where('id', '=', $request->input('chabters'))->get();
        $courses = chabter::find($request->input('chabters'));
        $student->course = $courses->course;
        if ($request->hasfile('vedio')) {

            $file = $request->file('vedio');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/vedio/', $filename);
            $student->vedio = $filename;
        }
        if ($request->hasfile('file')) {

            $file = $request->file('file');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/pdf/', $filename);
            $student->file = $filename;
        }
        $student->save();
        return  redirect()->route('admin.courses.lesson', compact('id'));
    }

    public function lessonviwe(Request $request)

    {
        $chabterid = $request->id;
        $chabter = lesson::find($chabterid);
        $courses = courses::find($request->id);
        // dd($courses);
        // $chabter=DB::table('chabters')->where('course','=' ,$courses->name )->get();
        $branch = DB::table('branches')->get();
        $teacher = DB::table('teachers')->get();
        return view('admin.layouts.courses.courses.viwelesson', compact('branch', 'chabter', 'courses'));
    }

    /**
     * Display the specified resource.
     */
    public function show(lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lesson $lesson)
    {
        $chabter = DB::table('chabters')->where('name', '=', $lesson->chabters)->get();
        return view('admin.layouts.courses.courses.lessonedit', compact('lesson', 'chabter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = lesson::find($id);
        $post->name = $request->input('name');
        $post->chabters = $request->input('chabters');

        if ($request->hasfile('vedio')) {

            $distination = 'img/vedio/' . $post->vedio;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('vedio');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/vedio/', $file_name);
            $post->vedio     = $file_name;
        }
        if ($request->hasfile('file')) {

            $distination = 'img/pdf/' . $post->file;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('file');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/pdf/', $file_name);
            $post->file     = $file_name;
        }
        $chabter = DB::table('chabters')->where('name', '=', $post->chabters)->first();
        $post->save();
        return  redirect()->route('admin.courses.lesson', $chabter->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $lesson_id)
    {
        $post = lesson::find($lesson_id);
        $chabterDb = DB::table('lessons');
        $sliderdelete = $chabterDb->where('id', $lesson_id);
        $distination = 'img/vedio/' . $post->vedio;
        if (File::exists($distination)) {
            File::delete($distination);
        }
        $sliderdelete->delete();

        return  redirect()->back();
    }
}
