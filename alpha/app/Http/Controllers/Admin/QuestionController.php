<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\question;


use App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question =  DB::table('questions')->get();
        return view('admin.layouts.questions.questions',compact('question'));

    }

    public function destroy(int $questions_id)
    {
        $questionsDb = DB::table('questions');
        $questionshdelete= $questionsDb->where('id',$questions_id);
        $questionshdelete->delete();

        return  redirect()->back();   
     }
     public function addquestions()
     {
      return view('admin.layouts.questions.addquestions');
  
      }

      public function store(Request $request)
      {

              $data = new question();
              $input = $request->all();
              $data->fill($input)->save();
            
              return  redirect()->route('admin.questions');
  
      }
      public function edit(question $question)
      {
         return view('admin.layouts.questions.edit',compact('question'));
   
       }

       public function update(Request $request, $id)
       {
 
       
          $post = question::find($id);
          $post->question =$request->input('question');
          $post->question_text =$request->input('question_text');

          $post->save();

          return  redirect()->route('admin.questions');
   
       }
      

       

}


