<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::latest()->take(6)->get();
        $tags = Tag::all()->take(10);

        return view('frontend.index', compact('categories', 'posts', 'tags'));
    }

    public function show($slug)
    {
        $categories = Category::all();
        $post = Post::where('slug', $slug)->first();
        $tags = Tag::all()->take(10);
        
        return view('frontend.show', compact('categories', 'post', 'tags'));
    }

    public function list()
    {
        $categories = Category::all();
        $posts = Post::latest()->paginate(6);
        $tags = Tag::all()->take(10);

        return view('frontend.list', compact('categories', 'posts', 'tags'));
    }
    
    public function listCategory(category $category)
    {
        $categories = Category::all();
        $posts = $category->posts()->paginate(5);
        $tags = Tag::all()->take(10);

        return view('frontend.list', compact('categories', 'posts', 'tags'));
    }

    public function listTag(tag $tag)
    {
        $categories = Category::all();
        $posts = $tag->posts()->paginate(5);
        $tags = Tag::all()->take(10);
        
        return view('frontend.list', compact('categories', 'posts', 'tags'));
    }

    public function searchPost(Request $request)
    {
        $categories = Category::all();
        $posts = Post::where('title', $request->search)
                ->orWhere('title', 'like', '%'.$request->search.'%')
                ->paginate(5);
        $tags = Tag::all()->take(10);

        return view('frontend.list', compact('categories', 'posts', 'tags'));
    }
}
