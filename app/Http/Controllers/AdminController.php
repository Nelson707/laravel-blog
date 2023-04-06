<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_topic()
    {
        $data = topic::all();
        return view('admin.add_topic', compact('data'));
    }

    public function create_topic(Request $request)
    {
        $data = new topic;

        $data->topic_name = $request->topic;

        $data->save();

        return redirect()->back()->with('message', 'Topic created successfully');
    }

    public function delete_topic($id)
    {
        $data = topic::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Topic deleted successfully');
    }

    public function add_post()
    {
        $topic = topic::all();
        return view('admin.add_post', compact('topic'));
    }

    public function create_post(Request $request)
    {
        $post = new post;

        $post->title = $request->title;

        $post->details = $request->details;

        $post->topic = $request->topic;

        $post->author = $request->author;

        $post->tag = $request->tag;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post_images', $imagename);

        $post->image = $imagename;

        $post->save();

        return redirect()->back()->with('message', 'Post created successfully');
    }

    public function show_posts()
    {
        $posts = post::all();
        return view('admin.posts', compact('posts'));
    }

    public function update_post($id)
    {
        $post = post::find($id);
        $topic = topic::all();
        return view('admin.update_post', compact('post','topic'));
    }

    public function edit_post(Request $request,$id)
    {
        $post = post::find($id);

        $post->title = $request->title;

        $post->details = $request->details;

        $post->topic = $request->topic;

        $post->author = $request->author;

        $post->tag = $request->tag;

        $image = $request->image;

        if ($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('post_images', $imagename);

            $post->image = $imagename;
        }

        $post->save();

        return redirect()->back()->with('message','Post updated successfully');
    }

    public function delete_post($id)
    {
        $post = post::find($id);
        $post->delete();

        return redirect()->back()->with('message','Post deleted successfully');
    }

    public function all_users()
    {
        $user = user::all();
        return view('admin.users', compact('user'));
    }

    public function delete_user($id)
    {
        $user = user::find($id);
        $user->delete();

        return redirect()->back()->with('message','User deleted successfully');
    }

    public function search_admin(Request $request)
    {
        $search_text = $request->search;
        $posts = post::where('title','LIKE',"%$search_text%")->orWhere('details','LIKE',"%$search_text%")->orWhere('topic','LIKE',"%$search_text%")->get();

        return view('admin.posts', compact('posts'));
    }

}
