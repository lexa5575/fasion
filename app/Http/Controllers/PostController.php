<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();

        // return(view('posts.index', compact('posts'))); ?????????????????????????????????????????????????
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store()
    {
        $data = request()->validate([
            'title' => '',
            'content' => '',
            'image' => ''
        ]);
        Post::create($data);
        return redirect()->route('lidl');
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(6);
        $post->delete();
        dd('restore');
    }
    public function firstOrCreate() {
        $post = Post::find(1);

        $anotherPost = [
            'title' => 'Some of post from Sublime text 3',
            'content' => 'some interasting content',
            'image' => 'Some imageblabla bla ',
            'likes' => 20,
            'is_published' => 1
        ];
        Post::firstOrCreate([
            'title' => 'Some of post from Sublime text 3'
        ],[
            'title' => 'Some of post from Sublime text 3',
            'content' => 'some interasting content',
            'image' => 'Some imageblabla bla ',
            'likes' => 20,
            'is_published' => 1
        ]);
        dump($post -> content);

        dd('ggggg');
    }
}
