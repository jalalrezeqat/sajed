<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\branch;


use App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branch =  DB::table('branches')->get();
        return view('admin.layouts.branch.branch',compact('branch'));

    }

    public function destroy(int $branch_id)
    {
        $brancchDb = DB::table('branches');
        $brancchdelete= $brancchDb->where('id',$branch_id);
        $brancchdelete->delete();

        return  redirect()->back();   
     }
     public function addbranch()
     {
        return view('admin.layouts.branch.addbranch');
  
      }

      public function store(Request $request)
      {

              $data = new branch();
              $input = $request->all();
              $data->fill($input)->save();
            
              return  redirect()->route('admin.branch');
  
      }
      public function edit(branch $branch)
      {
         return view('admin.layouts.branch.edit',compact('branch'));
   
       }

       public function update(Request $request, $id)
       {
 
       
          $post = branch::find($id);
          $post->name =$request->input('name');
          $post->summary =$request->input('summary');

          $post->save();

          return  redirect()->route('admin.branch');
   
       }
       public function editvistion(branch $about)
       {
          return view('admin.layouts.about.editvistion',compact('about'));
    
        }

        public function updatevistion(Request $request, $id)
        {
  
        
           $post = branch::find($id);
           $post->our_vision =$request->input('our_vision');
 
           $post->save();
 
           return  redirect()->route('admin.about');
    
        }

}


