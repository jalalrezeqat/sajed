<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\QuestionRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuestionController extends Controller
{

    public function index(Request $request, $category_id): View
    {
        // $questions = Question::all();
        $chabterid = $request->id;
        $Category = Category::find($category_id);
        $questions =Question::where('category_id', '=', $Category->id)->get();
        return view('admin.questions.index', compact('questions','Category','category_id'));
    }

    public function create($category_id): View
    {
        $categories = Category::where('id','=',$category_id)->pluck('name', 'id');

        return view('admin.questions.create', compact('categories','category_id'));
    }

    public function store(QuestionRequest $request ,$category_id): RedirectResponse
    {
        Question::create($request->validated());
        return redirect()->route('admin.questions.index',compact('category_id'))->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Question $question): View
    {
        return view('admin.questions.show', compact('question'));
    }

    public function edit(Question $question ,$category_id): View
    {
        $categories = Category::where('id','=',$category_id)->pluck('name', 'id');

        return view('admin.questions.edit', compact('question', 'categories','category_id'));
    }

    public function update(QuestionRequest $request, Question $question ,$category_id): RedirectResponse
    {
        $question->update($request->validated());

        return redirect()->route('admin.questions.index',$category_id)->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Question $question): RedirectResponse
    {
        $question->delete();
        return redirect()->back()->with('message','Task is completely deleted');
        // $question->delete();

        // return back()->with([
        //     'message' => 'successfully deleted !',
        //     'alert-type' => 'danger'
        // ]);
    }

    public function massDestroy()
    {
        Question::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
