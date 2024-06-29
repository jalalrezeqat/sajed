<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\policies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoliciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policies = DB::table('policies')->get();
        return view('admin.layouts.policies.index', compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layouts.policies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new policies();
        $student->summernote = $request->input('summernote');
        $student->save();
        return  redirect()->route('admin.policies');
    }

    /**
     * Display the specified resource.
     */
    public function show(policies $policies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(policies $policies)
    {
        return view('admin.layouts.policies.edit', compact('policies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = policies::find($id);
        $post->summernote = $request->input('summernote');
        $post->save();
        return  redirect()->route('admin.policies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $policies)
    {
        $connectusDb = DB::table('policies');
        $connectusdelete = $connectusDb->where('id', $policies);
        $connectusdelete->delete();

        return  redirect()->back();
    }
}