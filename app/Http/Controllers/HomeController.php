<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::limit(9)->orderby('id', 'desc')->get();
        return view(view:'home', data:['title' => 'Home - Blog', 'posts' => $posts]);
    }
}
