<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\User;
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
            $total_posts = post::all()->count();
            $total_topics = topic::all()->count();
            $total_users = user::all()->count();
            return view('admin.dashboard', compact('total_posts', 'total_topics', 'total_users'));
        }
        else
        {
            $post = post::all();
            return view('home.index', compact('post'));
        }
    }

    public function post_details($id)
    {
        $post = post::find($id);
        $comment = comment::orderBy('id','desc')->get();
        $reply = reply::all();
        return view('home.post_details', compact('post','comment', 'reply'));
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

    public function post_search(Request $request)
    {
        $search_text = $request->search;
        $post = post::where('title','LIKE',"%$search_text%")->orWhere('details','LIKE',"%$search_text%")->orWhere('topic','LIKE',"%$search_text%")->get();

        return view('home.index', compact('post'));
    }
}
