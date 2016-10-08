<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Post;

class NewsController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('backend.news.index')->withPosts($posts);
    }

    public function create()
    {
        return view('backend.news.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts|max:255',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/news/create')
                ->withErrors($validator)
                ->withInput();
        }
        $post = new Post;
        $post->title = trim($request->get('title'));
        $post->slug = $request->get('slug');
        $post->content = trim($request->get('content'));
        $post->save();

        if($post->save()) {
            return redirect('admin/news');
        }
    }

    public function show($id)
    {
        return 'NewsController@show';
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.news.edit')
            ->withPost($post);
    }

    public function update(Request $request, $id)
    {

        $reslug = $request->get('reslug');
        if($reslug == 1) {
            $post = Post::find($id);
            $post->title = trim($request->get('title'));
            $post->slug = str_slug($request->get('title'),"-"); // str_slug("Laravel 5 Framework", "-");
            $post->content = trim($request->get('content'));
            $post->save();
            if($post->save()) {
                return redirect('admin/news');
            }

        }
        // Switchbox
        elseif(!isset($request->reslug))
        {
            $id = $request->get('id');
            $post = Post::find($id);
            $post->status = $request->get('status');
            $post->save();
            if($post->save()) {
                return $request->all();
            }
        }

        else {
            $post = Post::find($id);
            $post->title = $request->get('title');
            $post->slug = $request->get('slug');
            $post->content = $request->get('content');
            $post->save();
            if($post->save()) {
                return redirect('admin/news');
            }
        }

    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('admin/news');
    }
}
