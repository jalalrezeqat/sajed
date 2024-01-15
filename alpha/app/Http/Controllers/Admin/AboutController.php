<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\about;


use App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $vision =  DB::table('abouts')->where('our_vision','<>', '')->get();
        $mission =DB::table('abouts')->where('our_mission_titel','<>', '')->get();
        return view('admin.layouts.about.about',compact('vision','mission'));

    }

    public function destroy(int $about_id)
    {
        $aboutDb = DB::table('abouts');
        $aboutdelete= $aboutDb->where('id',$about_id);
        $aboutdelete->delete();

        return  redirect()->back();   
     }
     public function addmission()
     {
        return view('admin.layouts.about.addmission');
  
      }

      public function store(Request $request)
      {

              $data = new about();
              $input = $request->all();
              $data->fill($input)->save();
            
              return  redirect()->route('admin.about');
  
      }
      public function edit(about $about)
      {
         return view('admin.layouts.about.edit',compact('about'));
   
       }

       public function update(Request $request, $id)
       {
 
       
          $post = about::find($id);
          $post->our_mission_titel =$request->input('our_mission_titel');
          $post->our_mission_text =$request->input('our_mission_text');

          $post->save();

          return  redirect()->route('admin.about');
   
       }
}


