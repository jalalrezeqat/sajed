<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Controller;
use App\Models\lesson;
use App\Models\playback;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\chabter;
use App\Models\courses;
use Illuminate\Support\Facades\File;
use Owenoj\LaravelGetId3\GetId3;
use Illuminate\Support\Facades\Storage;
use Haruncpi\LaravelIdGenerator\IdGenerator;



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
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.lesson', compact('lesson', 'chabterid', 'chabter'));
        } else
            return redirect()->back();
    }
    public function lessonadd(Request $request, $id)
    {

        $chabter = DB::table('chabters')->where('id', '=', $id)->get();
        $chabterid = chabter::find($id);
        // dd($chabterid);
        // $chabter=DB::table('chabters')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.lessonadd', compact('chabter', 'chabterid'));
        } else
            return redirect()->back();
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
        $statement  = DB::select("SHOW TABLE STATUS LIKE 'lessons'");
        $student = new lesson();

        $student->name = $request->input('name');
        $student->chabters = $request->input('chabters');
        $student->iframe = $request->input('iframe');

        // $courses = DB::table('chabters')->where('id', '=', $request->input('chabters'))->get();
        $courses = chabter::find($request->input('chabters'));
        $student->course = $courses->course;
        $nextUserId = IdGenerator::generate(['table' => 'lessons', 'field' => 'id', 'length' => 6, 'prefix' => $courses->course . $request->input('chabters')]);


        $student->id = $nextUserId;
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
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.viwelesson', compact('branch', 'chabter', 'courses'));
        } else
            return redirect()->back();
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

        $chabter = DB::table('chabters')->where('id', '=', $lesson->chabters)->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.lessonedit', compact('lesson', 'chabter'));
        } else
            return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $post = lesson::find($id);
        $post->name = $request->input('name');
        $post->chabters = $request->input('chabters');
        $post->iframe = $request->input('iframe');

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
        $chabter = DB::table('chabters')->where('id', '=', $post->chabters)->first();
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
