<?php

namespace App\Http\Controllers;

use App\Models\Category;

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
use Illuminate\Support\Facades\Response;
use App\Models\markcourse;
use App\Http\Requests\StoreTestRequest;
use App\Models\Result;
use App\Models\Option;





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
        $quiz = DB::table('categories')->get();
        foreach ($lesson as $lessons) {
            $vedio = DB::table('lessons')->where('id', '=', $lesson[0]->id)->first();
        }
        $chabtercount = $chbter->count();
        $lessoncount = $lesson->count();
        //instantiate class with file
        //instantiate class with file
        $id3 = new \getID3;

        foreach ($lesson as $lessons) {
            // $content = File::get(asset('img/vedio/' . $vedios->vedio));
            $id3 = new \getID3;
            $path = 'img/vedio/' . $lessons->vedio;
            $file = $id3->analyze($path);
            // $duration_seconds = $file['playtime_string'];
            // dd($content);
        }


        return view('front.DitalesCourse', compact('branch', 'id3', 'vedio', 'quiz', 'coursces', 'b', 'chbter', 'lesson', 'chbter1', 'chabtercount', 'lessoncount',  'teatcher', 'user', 'questionscours', 'code'));
    }


    public function showcourse(Request $request, $id, $vidoe)
    {
        $quiz = DB::table('categories')->get();
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
                        $mark = DB::table('markcourses')->where('nameofstudant', '=', Auth::user()->name)->where('nameofcourse', '=', $b->name)->first();
                        // if ($mark == null) {
                        //     $student = new markcourse();
                        //     $student->mark = '0';
                        //     $student->nameofcourse = $b->name;
                        //     if (Auth::user()) {
                        //         $student->nameofstudant = Auth::user()->name;
                        //     }
                        //     $student->save();
                        // }
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
                    $id3 = new \getID3;


                    return view('front.ShowCourse', compact('branch', 'id3', 'quiz', 'mark', 'coursces', 'b', 'chbter', 'vedio', 'lesson', 'chbter1', 'chabtercount', 'lessoncount', 'teatcher', 'user', 'questionscours', 'duration_seconds', 'code'));
                }
            }
        }
        return redirect()->back()->with('message4', 'يرجى التسجيل في الدورة');
    }
    public function download($id)
    {
        $file = DB::table('lessons')->where('id', '=', $id)->get();

        foreach ($file as $files) {
            if ($files->file == null) {
                return redirect()->back();
            }
            $path = 'img/pdf/' . $files->file;
        }
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($path, $files->file, $headers);
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

                    DB::table('codecards')->where('code', $request->input('code'))->update(['user' => $user, 'startcode' => $today, 'user_id' => Auth::user()->id]);
                    return back()->with("message1", "تم اضافة الدورة ");
                }
            }
            return back()->with("message", "الكود المدخل خطآ ");
        }

        return back()->with("message3", "يرجى تسجيل الدخول او انشاء حساب قبل ادخال الكود");

        //  DB::table('codecards')->where('code', $request->input('code'))->update(['user' => $user]);
        //return  redirect()->back();
    }

    public function showquiz($id, $course)
    {
        $course = courses::find($course);
        if (Auth::user()) {
            $quiz = DB::table('categories')->find($id);
            $user = Auth::user()->name;
            $code = DB::table('codecards')->get();

            foreach ($code as $codes) {
                if ($codes->user == $user & $codes->courses == $course->name & $codes->courses == $quiz->courses) {
                    $categories = Category::with(['categoryQuestions' => function ($query) {
                        $query->inRandomOrder()
                            ->with(['questionOptions' => function ($query) {
                                $query->inRandomOrder();
                            }]);
                    }])->where('id', '=', $id)
                        ->whereHas('categoryQuestions')
                        ->get();

                    return view('front.quiz', compact('categories', 'quiz'));
                }
            }
            return redirect()->back();
        }
    }
    public function storequiz(StoreTestRequest $request, $id)
    {
        $quiz = DB::table('categories')->find($id);
        $questions_op = DB::table('questions')->where('category_id', '=', $quiz->id)->first();
        $option_total_point = DB::table('options')->where('question_id', '=', $questions_op->id)->get();
        foreach ($option_total_point as $option_total_point) {
            $total_point_quiz  = $option_total_point->points;
            $r = $option_total_point->points;
            $r = $total_point_quiz + $r;
        }
        $options = Option::find(array_values($request->input('questions')));

        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points'),
            'user' => Auth::user()->name,
            'courses' =>  $quiz->courses,
            'namequiz' => $quiz->chabters,
            'option_total_point' => $r,
        ]);

        $questions = $options->mapWithKeys(function ($option) {
            return [
                $option->question_id => [
                    'option_id' => $option->id,
                    'points' => $option->points
                ]

            ];
        })->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('client.results.show', $result->id);
    }
}
