<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostsAdminController extends Controller
{

    private $post;
    public function __construct(Post $post)
    {
        $this->post = $post;

    }

    public function index()
    {
        $posts = $this->post->simplePaginate(5); //paginate faz com que n apareça todos na página
         //chamar os posts assim parece mais seguro do que a forma usada em PostsController


        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $tags = array_filter(array_map('trim', explode(',', $request->tags)));
        $tagsIDs = [];
        foreach($tags as $tagName)
        {
            $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id;
        }

        $post = $this->post->create($request->all());
        //relaciona as tags com o post
        $post->tags()->sync($tagsIDs);
        return redirect()->route('admin');
    }

    public function edit($id){
        $post = $this->post->find($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request){
        $this->post->find($id)->update($request->all());
        return redirect()->route('admin');
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();//pq só funciona com posts q n tem comentários? VER MODIFICAÇÃO LÁ NO MIGRATION DE COMENTÁRIO
        return redirect()->route('admin');
    }
}
