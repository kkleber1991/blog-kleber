<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost(Post $post)
    {
        $posts = Post::limit(3)->orderby('id', 'desc')->get();
        $related = Post::limit(4)->inRandomOrder()->get();
        return view('site/postagem', ['post' => $post, 'title' => $post->slug, 'posts' => $posts, 'related' => $related]);
    }
}
