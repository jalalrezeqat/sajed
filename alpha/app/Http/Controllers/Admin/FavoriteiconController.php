<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Favoriteicon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class FavoriteiconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favoriteicons = DB::table('favoriteicons')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {
            return view('admin.layouts.favoriteicons.favoriteicons', compact('favoriteicons'));
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
    public function show(Favoriteicon $favoriteicon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favoriteicon $favoriteicon)
    {
        return view('admin.layouts.favoriteicons.edit', compact('favoriteicon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Favoriteicon::find($id);
        if ($request->hasfile('img')) {

            $distination = 'img/Favoriteicon/' . $post->img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/Favoriteicon/', $file_name);
            $post->img     = $file_name;
        }
        $post->save();
        return  redirect()->route('admin.Favoriteicon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favoriteicon $favoriteicon)
    {
        //
    }
}
