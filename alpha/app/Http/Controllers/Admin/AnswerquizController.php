<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\quiz;
use Illuminate\Support\Facades\DB;
use App\Models\qustionquizzes;
use Illuminate\Http\Request;

use App\Models\answerquiz;


class AnswerquizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $qustionid = $request->id;
        $qustionquiz = qustionquizzes::find($id);
        $answers = DB::table('answerquizzes')->where('qustionquiz', '=', $qustionquiz->name)->where('quizzes', '=', $qustionquiz->quizzes)->get();
        return view('admin.layouts.courses.courses.lesson', compact('qustionquiz', 'qustionid', 'answers'));    }

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(answerquiz $answerquiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(answerquiz $answerquiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, answerquiz $answerquiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(answerquiz $answerquiz)
    {
        //
    }
}
