<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\codecard;
use Illuminate\Http\Request;

class CodecardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $code=DB::table('codecards')->get();
        return view('admin.layouts.courses.genaratcode.codeindex',compact('code'));
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
        $code = $code.$character;
    }

    if (codecard::where('code', $code)->exists()) {
        $this->generateUniqueCode();
    }
        $courses=DB::table('courses')->get();
        return view('admin.layouts.courses.genaratcode.codegenaretadd',compact('courses','code'));
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
        //
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
    public function update(Request $request, codecard $codecard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(codecard $codecard)
    {
        //
    }
}
