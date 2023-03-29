<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $posts = post::paginate(6);
        $post = post::all();
        return view('home.index', compact('post','posts'));
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
