<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\input;
use Illuminate\Support\Facades\Auth;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider =  DB::table('sliders')->where('page', '<>', 'المعلم')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.slider.slider', compact('slider'));
        } else
            return redirect()->back();
    }

    public function indexteacher()
    {
        $teacher = DB::table('sliders')->where('page', '=', 'المعلم')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.slider.sliderteacher', compact('teacher'));
        } else
            return redirect()->back();
    }
    public function addslider()
    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.slider.addslider');
        } else
            return redirect()->back();
    }
    public function addsliderteacher()
    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.slider.addsliderteacher');
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
        $student = new Slider();
        $student->url = $request->input('url');
        $student->page = $request->input('page');


        if ($request->hasfile('img')) {

            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('img/slider/', $filename);
            $student->img = $filename;
        }

        $student->save();
        return  redirect()->route('admin.slider');
    }

    public function storeteacher(Request $request)
    {
        $student = new Slider();
        $student->page = $request->input('page');


        if ($request->hasfile('img')) {
            if ($request->input('mobile_dsktop') == '1') {
                $file = $request->file('img');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('img/slider/', $filename);
                $student->img = $filename;
                $student->mobile_dsktop = $request->input('mobile_dsktop');
            } else {
                $file = $request->file('img');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('img/sliderphone/', $filename);
                $student->img = $filename;
                $student->mobile_dsktop = $request->input('mobile_dsktop');
            }
        }

        $student->save();
        return  redirect()->route('admin.sliderteacher');
    }
    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.slider.edit', compact('slider'));
        } else
            return redirect()->back();
    }


    public function editteacher(Slider $slider)
    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.layouts.slider.editteacher', compact('slider'));
        } else
            return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = slider::find($id);
        $post->url = $request->input('url');
        $post->page = $request->input('page');

        if ($request->hasfile('img')) {

            $distination = 'img/slider/' . $post->img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/slider/', $file_name);
            $post->img     = $file_name;
        }
        $post->save();

        return  redirect()->route('admin.slider');
    }

    public function updateteacher(Request $request, $id)
    {
        $post = slider::find($id);


        if ($request->hasfile('img')) {

            $distination = 'img/slider/' . $post->img;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('img');
            $extintion = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extintion;
            $file->move('img/slider/', $file_name);
            $post->img     = $file_name;
        }
        $post->save();

        return  redirect()->route('admin.sliderteacher');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $slider_id)
    {
        $post = Slider::find($slider_id);
        $sliderDb = DB::table('sliders');
        $sliderdelete = $sliderDb->where('id', $slider_id);
        $distination = 'img/slider/' . $post->img;
        if (File::exists($distination)) {
            File::delete($distination);
        }
        $sliderdelete->delete();

        return  redirect()->back();
    }
}
