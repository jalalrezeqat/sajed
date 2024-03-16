<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\quiz;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quiz = DB::table('quizzes')->get();
        return view('admin.layouts.courses.quiz.quiz', compact('quiz'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = DB::table('courses')->get();
        foreach( $courses as  $coursess){
        $chabters = DB::table('chabters')->where('course','=', $coursess->name)->get();
        }
        return view('admin.layouts.courses..quiz.quizadd', compact('courses', 'chabters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new quiz();
        $student->name = $request->input('name');
        $student->courses = $request->input('courses');
        $student->chabters = $request->input('chabters');
        $student->save();
        return  redirect()->route('admin.quiz');    }

    /**
     * Display the specified resource.
     */
    public function show(quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quiz $quiz)
    {
        //
    }
}
