<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\codecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodecardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $code = DB::table('codecards')->get();
        return view('admin.layouts.courses.genaratcode.codeindex', compact('code'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);
        $codeLength = 6;

        $code = '';

        while (strlen($code) < 6) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code . $character;
        }

        if (codecard::where('code', $code)->exists()) {
            $this->generateUniqueCode();
        }
        $courses = DB::table('courses')->get();
        return view('admin.layouts.courses.genaratcode.codegenaretadd', compact('courses', 'code'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new codecard();
        $input = $request->all();
        $data->fill($input)->save();

        return  redirect()->route('admin.codegenaret');
    }

    /**
     * Display the specified resource.
     */
    public function show(codecard $codecard)
    {
        $courses = DB::table('courses')->get();
        return view('admin.layouts.courses.genaratcode.codegenaretedit', compact('codecard', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(codecard $codecard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = codecard::find($id);
        $post->code = $request->input('code');
        $post->courses = $request->input('courses');
        $post->user = $request->input('user');
        $post->startcode = $request->input('startcode');
        $post->endcode = $request->input('endcode');



        $post->save();

        return  redirect()->route('admin.codegenaret');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $codecard_id)
    {

        $questionsDb = DB::table('codecards');
        $questionshdelete = $questionsDb->where('id', $codecard_id);
        $questionshdelete->delete();

        return  redirect()->back();
    }


}
