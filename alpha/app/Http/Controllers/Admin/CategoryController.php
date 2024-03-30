<?php


namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\courses;

class CategoryController extends Controller
{

    public function index(): View
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        $courses = DB::table('courses')->get();
        $chabters = DB::table('chabters')->get();
        return view('admin.categories.create', compact('courses', 'chabters'));
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
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
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
