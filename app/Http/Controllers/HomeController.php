<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function redirect()
    {
        $usertype = Auth::user()->userType;

        if ($usertype == '1')
        {
            return view('admin.dashboard');
        }
        else
        {
            return view('home.index');
        }
    }
}
