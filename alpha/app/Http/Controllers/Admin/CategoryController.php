<?php


namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\CategoryRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\courses;

class CategoryController extends Controller
{

    public function index(): View
    {
        $categories = Category::all();

        $courses = DB::table('courses')->get();
        $chabters = DB::table('chabters')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.categories.index', compact('categories', 'courses', 'chabters'));
        } else
            return redirect()->back();
    }

    public function create(): View
    {
        $courses = DB::table('courses')->get();
        $chabters = DB::table('chabters')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.categories.create', compact('courses', 'chabters'));
        } else
            return redirect()->back();
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        Category::create($request->validated());

        return redirect()->route('admin.categories.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Category $category): View
    {
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.categories.show', compact('category'));
        } else
            return redirect()->back();
    }

    public function edit(Category $category): View
    {
        $courses = DB::table('courses')->get();
        $chabters = DB::table('chabters')->get();
        if (Auth::guard('admin')->user()->stutes == 0) {

            return view('admin.categories.edit', compact('category', 'courses', 'chabters'));
        } else
            return redirect()->back();
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->validated());

        return redirect()->route('admin.categories.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

    public function massDestroy()
    {
        Category::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
