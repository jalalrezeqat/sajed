<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\input;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider =  DB::table('sliders')->where('page','<>', 'المعلم')->get();

        return view('admin.layouts.slider.slider',compact('slider'));

    }
    
    public function indextetcher()
    {
        $tetcher= DB::table('sliders')->where('page','=', 'المعلم')->get();

        return view('admin.layouts.slider.slidertetcher',compact('tetcher'));

    }
    public function addslider()
    {
       return view('admin.layouts.slider.addslider');
 
     }
     public function addslidertetcher()
     {
        return view('admin.layouts.slider.addslidertetcher');
  
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


        if($request->hasfile('img'))
        {
            
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img/slider/', $filename);
            $student->img = $filename;
        }

        $student->save();
        return  redirect()->route('admin.slider');
    }
    
    public function storetetcher(Request $request)
    {
        $student = new Slider();
        $student->page = $request->input('page');


        if($request->hasfile('img'))
        {
            
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img/slider/', $filename);
            $student->img = $filename;
        }

        $student->save();
        return  redirect()->route('admin.slidertetcher');
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
        return view('admin.layouts.slider.edit',compact('slider'));

    }
    

    public function edittetcher(Slider $slider)
    {
        return view('admin.layouts.slider.edittetcher',compact('slider'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $post = slider::find($id);
       $post->url =$request->input('url');
       $post->page =$request->input('page');
       
       if($request->hasfile('img'))
       {
        
        $distination ='img/slider/'.$post->img;
        if(File::exists($distination))
        {
            File::delete($distination);
        }
        $file=$request->file('img');
        $extintion=$file->getClientOriginalExtension();
        $file_name=time().'.'.$extintion;
        $file->move('img/slider/', $file_name);
        $post->img	 =$file_name;
     
       }
       $post->save();

       return  redirect()->route('admin.slider');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $slider_id)
    {
        $post = Slider::find($slider_id);
        $sliderDb = DB::table('sliders');
        $sliderdelete= $sliderDb->where('id',$slider_id);
        $distination ='img/slider/'.$post->img;
        if(File::exists($distination))
        {
            File::delete($distination);
        }
        $sliderdelete->delete();

        return  redirect()->back();    
    }
}
