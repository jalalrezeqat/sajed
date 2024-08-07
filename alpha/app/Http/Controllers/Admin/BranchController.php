<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\branch;
use Illuminate\Support\Facades\File;



use App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
   public function index()
   {
      $branch =  DB::table('branches')->get();
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.branch.branch', compact('branch'));
      } else
         return redirect()->back();
   }

   public function destroy(int $branch_id)
   {
      $brancchDb = DB::table('branches');
      $brancchdelete = $brancchDb->where('id', $branch_id);
      $brancchdelete->delete();

      return  redirect()->back();
   }
   public function addbranch()
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.branch.addbranch');
      } else
         return redirect()->back();
   }

   public function store(Request $request)
   {

      $data = new branch();
      $data->name = $request->input('name');
      $data->summary = $request->input('summary');



      if ($request->hasfile('img')) {

         $file = $request->file('img');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time() . '.' . $extenstion;
         $file->move('img/branch/', $filename);
         $data->img = $filename;
      }
      $data->save();


      return  redirect()->route('admin.branch');
   }
   public function edit(branch $branch)
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.branch.edit', compact('branch'));
      } else
         return redirect()->back();
   }

   public function update(Request $request, $id)
   {


      $post = branch::find($id);
      $post->name = $request->input('name');
      $post->summary = $request->input('summary');
      if ($request->hasfile('img')) {

         $distination = 'img/branch/' . $post->img;
         if (File::exists($distination)) {
            File::delete($distination);
         }
         $file = $request->file('img');
         $extintion = $file->getClientOriginalExtension();
         $file_name = time() . '.' . $extintion;
         $file->move('img/branch/', $file_name);
         $post->img     = $file_name;
      }
      $post->save();

      return  redirect()->route('admin.branch');
   }
   public function editvistion(branch $about)
   {
      if (Auth::guard('admin')->user()->stutes == 0) {

         return view('admin.layouts.about.editvistion', compact('about'));
      } else
         return redirect()->back();
   }

   public function updatevistion(Request $request, $id)
   {


      $post = branch::find($id);
      $post->our_vision = $request->input('our_vision');

      $post->save();

      return  redirect()->route('admin.about');
   }
}
