<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tanthammar\LivewireWindowSize\HasBreakpoints;
use Jenssegers\Agent\Agent;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agent = new Agent();
        $vision =  DB::table('abouts')->where('our_vision', '<>', '')->get();
        $mission = DB::table('abouts')->where('summernote', '<>', '')->get();
        $aboutalpha = DB::table('abouts')->where('aboutalpha', '<>', '')->get();
        $slider =  DB::table('sliders')->where('page', '=', 'حول الفا')->get();
        $aboutmore =  DB::table('aboutmore')->get();

        return view('about', compact('vision', 'aboutmore', 'mission', 'slider', 'aboutalpha', 'agent'));
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
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        //
    }
}
