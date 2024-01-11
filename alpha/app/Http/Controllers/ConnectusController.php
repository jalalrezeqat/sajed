<?php

namespace App\Http\Controllers;

use App\Models\Connectus;
use App\Http\Requests\ContectusFromRequest;

use Illuminate\Http\Request;

class ConnectusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Connectus');

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
         

            $data = new Connectus();
            $input = $request->all();
            $data->fill($input)->save();
          
            return  redirect('Connectus');

    }

    /**
     * Display the specified resource.
     */
    public function show(Connectus $connectus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Connectus $connectus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Connectus $connectus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Connectus $connectus)
    {
        //
    }
}