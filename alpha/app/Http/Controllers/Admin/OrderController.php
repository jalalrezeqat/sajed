<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = DB::table('orders')->get();
        $coureses = DB::table('courses')->get();

        return view('admin.layouts.courses.order', compact('order'));
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
        $student = new order();
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->gavarment = $request->input('gavarment');
        $student->addres = $request->input('addres');
        $student->phone = $request->input('phone');
        if (Auth::user()) {
            $student->email = Auth::user()->email;
        }
        $student->save();
        $dd = 1;
        return back()->with("message65", "شكرا لطلبك من الفا سيصلك الطلب خلال 24 ساعة");
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
