<?php

namespace App\Http\Controllers;

use App\Models\markcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MarkcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $nameofcourse = DB::table('courses')->where('id', '=', $id)->first();
        $mark = DB::table('markcourses')->where('nameofcourse', '=', $nameofcourse->name)->where('nameofstudant', '=', Auth::user()->id)->first();

        $student = new markcourse();
        if ($mark != null) {
            DB::table('markcourses')->where('nameofcourse', '=', $nameofcourse->id)->where('nameofstudant', '=', Auth::user()->id)->update(['mark' => $request->input('mark')]);
            return redirect()->back();
        } else {
            $student->mark = $request->input('mark');
            $student->nameofcourse = $nameofcourse->id;
            if (Auth::user()) {
                $student->nameofstudant = Auth::user()->id;
            }
            $student->save();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(markcourse $markcourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(markcourse $markcourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, markcourse $markcourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(markcourse $markcourse)
    {
        //
    }
}
