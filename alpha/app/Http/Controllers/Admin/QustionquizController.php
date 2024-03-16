<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\quiz;
use Illuminate\Support\Facades\DB;
use App\Models\qustionquiz;
use Illuminate\Http\Request;

class QustionquizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qustionquiz = DB::table('qustionquiz')->get();
        foreach($qustionquiz as $qustionquiz)
        {
             $quiz = DB::table('quizzes')->where('name','=',$qustionquiz->quizzes)->get();

        };
        return view('admin.layouts.courses.quiz.qustionquiz.qustionquiz', compact('quiz','qustionquiz'));

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(qustionquiz $qustionquiz)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(qustionquiz $qustionquiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, qustionquiz $qustionquiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(qustionquiz $qustionquiz)
    {
        //
    }
}
