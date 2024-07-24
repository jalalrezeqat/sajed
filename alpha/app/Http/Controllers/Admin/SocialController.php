<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social = DB::table('socials')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.Social.social', compact('social'));
        } else
            return redirect()->back();
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
    public function show(Social $socials)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $socials)
    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.Social.edit', compact('socials'));
        } else
            return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Social::find($id);
        $post->url = $request->input('url');
        $post->status = $request->input('status');
        $post->nameofpage = $request->input('nameofpage');

        if ($request->hasfile('img')) {

            $distination = 'img/socials/' . $post->img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/socials/', $file_name);
            $post->img     = $file_name;
        }
        $post->save();
        return  redirect()->route('admin.socials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        //
    }
}
