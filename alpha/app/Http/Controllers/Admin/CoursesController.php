<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\chabter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\courses;
use Illuminate\Support\Facades\File;
use Owenoj\LaravelGetId3\GetId3;
use Illuminate\Support\Facades\Auth;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = DB::table('courses')->get();
        $teatcher = DB::table('teachers')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.courses', compact('courses', 'teatcher'));
        } else
            return redirect()->back();
    }

    public function viweaddcourses(Request $request)

    {

        $branch = DB::table('branches')->get();
        $teacher = DB::table('teachers')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.viweaddcourses', compact('branch', 'teacher'));
        } else
            return redirect()->back();
    }

    public function courseschabtar(Request $request)

    {
        $chabterid = $request->id;
        $courses = courses::find($request->id);
        // dd($courses);
        $chabter = DB::table('chabters')->where('course', '=', $courses->id)->get();
        $branch = DB::table('branches')->get();
        $teacher = DB::table('teachers')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.courseschabtar', compact('branch', 'chabter', 'courses'));
        } else
            return redirect()->back();
    }
    public function courseschabtaradd(Request $request)

    {
        $chabterid = $request->id;
        $courses = DB::table('courses')->where('id', '=', $chabterid)->get();
        $teacher = DB::table('teachers')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.courses.courses.courseschabtaradd', compact('courses', 'teacher', 'chabterid'));
        } else
            return redirect()->back();
    }

    public function destroychabtar(int $chabter_id)

    {

        $post = chabter::find($chabter_id);
        $chabterDb = DB::table('chabters');
        $sliderdelete = $chabterDb->where('id', $chabter_id);
        $sliderdelete->delete();

        return  redirect()->back();
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
        $student->chabters = $request->input('chabters');
        $student->aboutcourse = $request->input('aboutcourse');
        $student->teacher_name = $request->input('teacher_name');
        $student->status = '0';


        if ($request->hasfile('img_name')) {

            $file = $request->file('img_name');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/courses/', $filename);
            $student->img_name = $filename;
        }

        if ($request->hasfile('img_teatcher')) {

            $file = $request->file('img_teatcher');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/teatcher_course/', $filename);
            $student->img_teatcher = $filename;
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

    public function updateviwe(courses $courses)

    {
        //    $course=DB::table('courses')->get();
        $branch = DB::table('branches')->get();
        $teacher = DB::table('teachers')->get();
        if (
            Auth::guard('admin')->user()->stutes == 0
        ) {

            return view('admin.layouts.courses.courses.updateviwe', compact('branch', 'teacher', 'courses'));
        } else
            return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $post = courses::find($id);
        $chabter = chabter::select('course')->where('course', '=', $post->name)->update(array('course' => $request->input('name')));
        // $chabter->course=$request->input('name');
        // dd($chabter[]);
        //    $chabter->append([]);

        $post->name = $request->input('name');
        $post->summary = $request->input('summary');
        $post->price = $request->input('price');
        $post->branche = $request->input('branche');
        $post->chabters = $request->input('chabters');
        $post->aboutcourse = $request->input('aboutcourse');
        $post->teacher_name = $request->input('teacher_name');
        // $chabterDb->course= $request->input('name');
        if ($request->hasfile('img_name')) {

            $distination = 'img/courses/' . $post->img_name;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img_name');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/courses/', $file_name);
            $post->img_name     = $file_name;
        }
        if ($request->hasfile('img_teatcher')) {

            $distination = 'img/teatcher_course/' . $post->img_teatcher;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img_teatcher');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/teatcher_course/', $file_name);
            $post->img_teatcher = $file_name;
        }
        //  dd($chabter->course);

        $post->save();

        return  redirect()->route('admin.courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $courses_id)
    {
        $post = courses::find($courses_id);
        $chabterDb = DB::table('courses');
        $sliderdelete = $chabterDb->where('id', $courses_id);
        $sliderdelete->delete();

        return  redirect()->back();
    }
    public function oncoures(int $courses_id)
    {
        $post = courses::find($courses_id);
        $chabterDb = DB::table('courses');
        $sliderdelete = $chabterDb->where('id', $courses_id);
        $sliderdelete->update(['status' => '1']);
        return  redirect()->back();
    }
    public function offcoures(int $courses_id)
    {
        $post = courses::find($courses_id);
        $chabterDb = DB::table('courses');
        $sliderdelete = $chabterDb->where('id', $courses_id);
        $sliderdelete->update(['status' => '0']);
        return  redirect()->back();
    }
    public function fav(int $courses_id)
    {
        $post = courses::find($courses_id);
        $chabterDb = DB::table('courses');
        $sliderdelete = $chabterDb->where('id', $courses_id);
        $sliderdelete->update(['fav' => '1']);
        return  redirect()->back();
    }
    public function notfav(int $courses_id)
    {
        $post = courses::find($courses_id);
        $chabterDb = DB::table('courses');
        $sliderdelete = $chabterDb->where('id', $courses_id);
        $sliderdelete->update(['fav' => '0']);
        return  redirect()->back();
    }
}
