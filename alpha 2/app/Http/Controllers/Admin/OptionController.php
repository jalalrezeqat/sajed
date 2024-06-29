<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\OptionRequest;
use App\Models\Question;
use Illuminate\Support\Facades\DB;
class OptionController extends Controller
{

    public function index(Request $request, $id): View
    {
        // $options = Option::all();
        $questionsid = $request->id;
        $questions = Question::find($id);
        $options =Option::where('question_id', '=', $questions->id)->get();
        return view('admin.options.index', compact('options','questionsid','questions'));
    }

    public function create(Request $request, $id): View
    {
        $questions = Question::where('id','=',$id)->pluck('question_text', 'id');

        return view('admin.options.create', compact('questions','id'));
    }

    public function store(OptionRequest $request ,$id): RedirectResponse
    {
        Option::create($request->validated());

        return redirect()->route('admin.options.index',$id)->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Option $option): View
    {
        return view('admin.options.show', compact('option'));
    }

    public function edit(Option $option ,$id): View
    {
        $questions = Question::where('id','=',$id)->pluck('question_text', 'id');

        return view('admin.options.edit', compact('option', 'questions','id'));
    }

    public function update(OptionRequest $request, Option $option ,$questionsid): RedirectResponse
    {
        $option->update($request->validated());

        return redirect()->route('admin.options.index',$questionsid)->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Option $option): RedirectResponse
    {
        
        $option->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

    public function massDestroy()
    {
        Option::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
