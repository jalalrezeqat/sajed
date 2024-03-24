<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\question;
use App\Http\Controllers;
use App\Models\CommonQuestions;
use Illuminate\Http\Request;

class CommonQuestionsController extends Controller
{
    public function index()
    {
        $question =  DB::table('common_questions')->get();

        return view('admin.layouts.CommonQuestions.CommonQuestions', compact('question'));
    }

    public function destroy(int $questions_id)
    {
        $questionsDb = DB::table('common_questions');
        $questionshdelete = $questionsDb->where('id', $questions_id);
        $questionshdelete->delete();

        return  redirect()->back();
    }
    public function addquestions()
    {
        return view('admin.layouts.CommonQuestions.addCommonQuestions');
    }

    public function store(Request $request)
    {

        $data = new CommonQuestions();
        $input = $request->all();
        $data->fill($input)->save();

        return  redirect()->route('admin.CommonQuestions');
    }
    public function edit(CommonQuestions $question)
    {
        return view('admin.layouts.CommonQuestions.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {


        $post = CommonQuestions::find($id);
        $post->question = $request->input('question');
        $post->question_text = $request->input('question_text');

        $post->save();

        return  redirect()->route('admin.CommonQuestions');
    }
}
