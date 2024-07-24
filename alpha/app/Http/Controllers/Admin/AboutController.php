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
      $aboutalph  = DB::table('abouts')->where('aboutalpha', '<>', '')->get();
      $vision =  DB::table('abouts')->where('our_vision', '<>', '')->get();
      $mission = DB::table('abouts')->where('summernote', '<>', '')->get();
      if (Auth::guard('admin')->user()->stutes != 0) {

         return redirect()->back();
      } else
         return view('admin.layouts.about.about', compact('vision', 'aboutalph', 'mission'));
   }


   public function destroy(int $about_id)
   {
      $aboutDb = DB::table('abouts');
      $aboutdelete = $aboutDb->where('id', $about_id);
      $aboutdelete->delete();

      return  redirect()->back();
   }
   public function addmission()
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.about.addmission');
      } else
         return redirect()->back();
   }

   public function store(Request $request)
   {

      $data = new about();
      $input = $request->all();
      $data->fill($input)->save();

      return  redirect()->route('admin.about');
   }

   public function storevistion(Request $request)
   {
      $data = new about();
      $input = $request->all();
      $data->fill($input)->save();
      dd($data->fill($input)->save());
      return  redirect()->route('admin.about');
   }
   public function edit(about $about)
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.about.edit', compact('about'));
      } else
         return redirect()->back();
   }

   public function aboutalphaedit(about $aboutalpha)
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.about.aboutalphaesit', compact('aboutalpha'));
      } else
         return redirect()->back();
   }
   public function update(Request $request, $id)
   {

      $post = about::find($id);
      $post->summernote = $request->input('summernote');
      $post->save();

      return  redirect()->route('admin.about');
   }
   public function editvistion(about $about)
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.about.editvistion', compact('about'));
      } else
         return redirect()->back();
   }

   public function aboutalpha()
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.about.aboutalpha');
      } else
         return redirect()->back();
   }
   public function addvistion()
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.about.vistionadd');
      } else
         return redirect()->back();
   }
   public function updatevistion(Request $request, $id)
   {
      $post = about::find($id);
      $post->our_vision = $request->input('our_vision');

      $post->save();

      return  redirect()->route('admin.about');
   }

   public function aboutalphaupdate(Request $request, $id)
   {
      $post = about::find($id);
      $post->aboutalpha = $request->input('aboutalpha');

      $post->save();

      return  redirect()->route('admin.about');
   }
}
