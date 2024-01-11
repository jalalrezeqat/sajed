<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.layouts.dashboard');

    }
}
