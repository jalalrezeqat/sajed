<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\chabter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\courses;
use Illuminate\Support\Facades\File;
use App\Models\questionscours;

class QuestionscoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = DB::table('courses')->get();
        return view('admin.layouts.courses.questions.questionscours', compact('courses'));
    }

    public function questionscoursadd(Request $request)

    {
        $chabterid = $request->id;
        $courses = DB::table('courses')->get();
        $teacher = DB::table('teachers')->get();
        return view('admin.layouts.courses.questions.questionscoursadd', compact('courses', 'teacher', 'chabterid'));
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

        $student = new questionscours();
        $student->question = $request->input('question');
        // $student->question_text = $request->input('question_text');
        $student->course = $request->input('course');
        $student->summernote = $request->input('summernote');
        $courseid = DB::table('courses')->where('name', '=', $student->course)->first();
        $student->save();
        return  redirect()->route('admin.courses.questionscours', $courseid->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        $chabterid = $request->id;
        $courses = courses::find($request->id);
        // dd($courses);
        $questionscours = DB::table('questionscours')->where('course', '=', $courses->name)->get();
        $branch = DB::table('branches')->get();
        $teacher = DB::table('teachers')->get();
        return view('admin.layouts.courses.questions.questioncviwe', compact('branch', 'questionscours', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(questionscours $questionscours)
    {
        // $chabterid = $request->id;
        $courses = DB::table('courses')->get();
        return view('admin.layouts.courses.questions.edit', compact('questionscours', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $post = questionscours::find($id);
        // $lesson = lesson::select('chabters')->where('chabters', '=', $post->name)->update(array('chabters' => $request->input('name')));

        $post->question = $request->input('question');
        $post->question_text = $request->input('question_text');
        $post->course = $request->input('course');
        // $chabterid=$request->id;
        $courseid = DB::table('courses')->where('name', '=', $post->course)->first();
        $post->save();

        return  redirect()->route('admin.courses.questionscours', $courseid->id);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(int $questions_id)
    {
        $questionsDb = DB::table('questionscours');
        $questionshdelete = $questionsDb->where('id', $questions_id);
        $questionshdelete->delete();

        return  redirect()->back();
    }
}
