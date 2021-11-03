<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all(); //chamando o meu banco de dados, o meu model
        return view('posts.index', compact('posts'));
    }
}
