<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Admin\connectus;


use App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectusController extends Controller
{
    public function index()
    {
        $connectus =  DB::table('connectus')->get();
        return view('admin.layouts.Connectus',compact('connectus'));

    }

    public function destroy(int $connectus_id)
    {
        $connectusDb = DB::table('connectus');
        $connectusdelete= $connectusDb->where('id',$connectus_id);
        $connectusdelete->delete();

        return  redirect()->back();   
     }
}


