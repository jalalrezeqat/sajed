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
      return view('admin.layouts.about.addmission');
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
      return  redirect()->route('admin.about');
   }
   public function edit(about $about)
   {
      return view('admin.layouts.about.edit', compact('about'));
   }

   public function aboutalphaedit(about $aboutalpha)
   {
      return view('admin.layouts.about.aboutalphaesit', compact('aboutalpha'));
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
      return view('admin.layouts.about.editvistion', compact('about'));
   }

   public function aboutalpha()
   {
      return view('admin.layouts.about.aboutalpha');
   }
   public function addvistion()
   {
      return view('admin.layouts.about.vistionadd');
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
