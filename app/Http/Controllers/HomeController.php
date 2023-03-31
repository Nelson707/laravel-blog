<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $posts = post::paginate(4);
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

    public function post_details($id)
    {
        $post = post::find($id);
        $comment = comment::all();
        return view('home.post_details', compact('post','comment'));
    }

    public function add_comment(Request $request)
    {
        if (Auth::user())
        {
            $comment = new comment;

            $comment->name = Auth::user()->name;

            $comment->user_id = Auth::user()->id;

            $comment->comment = $request->comment;

            $comment->save();

            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    public function reply_comment(Request $request)
    {
        if (Auth::user())
        {
            $reply = new reply;

            $reply->user_id = Auth::user()->id;

            $reply->name = Auth::user()->name;

            $reply->comment_id = $request->commentId;

            $reply->reply = $request->reply;

            $reply->save();

            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }
}
