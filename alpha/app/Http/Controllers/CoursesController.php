<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('courses',compact('courses'));

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
        return view('welcome',compact('courses'));

    }

    public function card(courses $courses)
    { 

        $courses=courses::all();
        return view('welcome',compact('courses'));

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
}
