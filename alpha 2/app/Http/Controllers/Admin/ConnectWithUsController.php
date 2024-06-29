<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ConnectWithUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ConnectWithUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $connectwithus = DB::table('connect_with_us')->get();
        return view('admin.layouts.ConnectWithUs.ConnectWithUs', compact('connectwithus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ConnectWithUs $connectWithUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConnectWithUs $connectWithUs)
    {
        return view('admin.layouts.ConnectWithUs.edit', compact('connectWithUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = ConnectWithUs::find($id);
        $post->email = $request->input('email');
        $post->phone = $request->input('phone');
        $post->address = $request->input('address');

        $post->save();
        return  redirect()->route('admin.ConnectWithUs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConnectWithUs $connectWithUs)
    {
        //
    }
}
