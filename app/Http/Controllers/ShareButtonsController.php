<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Jorenvh\Share\Share;

class ShareButtonsController extends Controller
{
    public function share($id)
    {
        $post = post::find($id);
        $comment = comment::orderBy('id','desc')->get();
        $reply = reply::all();
        $data = [
            'title' => $post->title,
            'description' => $post->details,
            'image' => $post->image,
        ];

        $shareButtons = (new Share)->page(
            url('/post_details/{id}'),
            $post->title,
        )
            ->facebook()
            ->twitter()
            ->whatsapp()
            ->telegram();

        return view('home.post_details', compact('post','comment','reply','data','shareButtons'));
    }
}
