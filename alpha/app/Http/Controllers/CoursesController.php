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
use Owenoj\LaravelGetId3\GetId3;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;




class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch = DB::table('branches')->get();
        $slider =  DB::table('sliders')->where('page', '=', 'الدورات')->get();
        return view('courses', compact('branch', 'slider'));
    }

    public function indexcourse(Request $request, $id)
    {

        $branch = branch::find($id);
        $coursces = DB::table('courses')->where('branche', '=', $branch->name)->where('chabters', '=', 'الفصل الاول')->get();

        return view('front.FrontCourcse', compact('branch', 'coursces'));
    }

    public function indexcourse1(Request $request, $id)
    {

        $branch = branch::find($id);
        $coursces = DB::table('courses')->where('branche', '=', $branch->name)->where('chabters', '=', 'الفصل الثاني')->get();

        return view('front.FrontSecCourcse', compact('branch', 'coursces'));
    }

    public function detalescourse(Request $request, $id)
    {
        $user = 'notauth';
        $code = '';
        if (Auth::user()) {
            $user = Auth::user()->name;
            $code = DB::table('codecards')->get();
        }
        $branch = DB::table('branches')->pluck('name');
        foreach ($branch as $branchs) {
            $i = 0;
            $br = $branch[$i];
            $i++;
        }
        $i = 0;


        // $branch =branch::find($branchid);
        $b = courses::find($id);
        $chbter = DB::table('chabters')->where('course', '=', $b->name)->get();
        $coursces = DB::table('courses')->where('branche', '=', $br)->get();
        $chbter1 = DB::table('lessons')->where('course', '=', $b->name)->get();
        $questionscours = DB::table('questionscours')->where('course', '=', $b->name)->get();
        $lesson =  DB::table('lessons')->select('id', 'name', 'chabters', 'vedio')->where('course', '=', $b->name)->get();
        $teatcher = DB::table('teachers')->where('name', '=', $b->teacher_name)->get();
        $chabtercount = $chbter->count();
        $lessoncount = $lesson->count();
        //instantiate class with file
        //instantiate class with file


        return view('front.DitalesCourse', compact('branch', 'coursces', 'b', 'chbter', 'lesson', 'chbter1', 'chabtercount', 'lessoncount',  'teatcher', 'user', 'questionscours', 'code'));
    }


    public function showcourse(Request $request, $id, $vidoe)
    {
        $user = 'notauth';
        $code = '';
        $b = courses::find($id);
        if (Auth::user()) {
            $user = Auth::user()->name;
            $code = DB::table('codecards')->get();
            foreach ($code as $codes) {
                if ($codes->user == $user & $codes->courses == $b->name) {
                    $branch = DB::table('branches')->pluck('name');
                    foreach ($branch as $branchs) {
                        $i = 0;
                        $br = $branch[$i];
                        $i++;
                    }
                    $i = 0;
                    // $branch =branch::find($branchid);
                    $b = courses::find($id);
                    $chbter = DB::table('chabters')->where('course', '=', $b->name)->get();
                    $coursces = DB::table('courses')->where('branche', '=', $br)->get();
                    $chbter1 = DB::table('lessons')->where('course', '=', $b->name)->get();
                    $questionscours = DB::table('questionscours')->where('course', '=', $b->name)->get();
                    $lesson =  DB::table('lessons')->where('course', '=', $b->name)->get();
                    $teatcher = DB::table('teachers')->where('name', '=', $b->teacher_name)->get();
                    $chabtercount = $chbter->count();
                    $lessoncount = $lesson->count();
                    $vedio = DB::table('lessons')->where('id', '=', $vidoe)->get();
                    foreach ($vedio as $vedios) {
                        $path = 'img/vedio/' . $vedios->vedio;
                        // $content = File::get(asset('img/vedio/' . $vedios->vedio));
                        $id3 = new \getID3;
                        $file = $id3->analyze($path);
                        $duration_seconds = $file['playtime_string'];
                        //dd($file);
                        // dd($content);
                    }


                    return view('front.ShowCourse', compact('branch', 'coursces', 'b', 'chbter', 'vedio', 'lesson', 'chbter1', 'chabtercount', 'lessoncount', 'teatcher', 'user', 'questionscours', 'duration_seconds', 'code'));
                }
            }
        }
        return redirect()->back()->with('message4', 'يرجى التسجيل في الدورة');
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
    public function codesend(Request $request, $user)
    {
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $today = $year . '-' . $month . '-' . $day;
        if (Auth::check()) {
            $codefind = DB::table('codecards')->where('code', '=', $request->input('code'))->first();
            if ($codefind !=  null & $codefind->endcode >= $today) {

                if ($codefind->user == null) {

                    DB::table('codecards')->where('code', $request->input('code'))->update(['user' => $user, 'startcode' => $today]);
                    return back()->with("message1", "تم اضافة الدورة ");
                }
            }
            return back()->with("message", "الكود المدخل خطآ ");
        }

        return back()->with("message3", "يرجى تسجيل الدخول قبل ادخال الكود");

        //  DB::table('codecards')->where('code', $request->input('code'))->update(['user' => $user]);
        //return  redirect()->back();
    }
}
