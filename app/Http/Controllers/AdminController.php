<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
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

}
