<?php

namespace App\Http\Controllers;

use Auth;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required|min:3|max:50',
            'category_id'   => 'required|not_in:0',
            'content'       => 'required',
            'image'         => 'required',
        ]);

        $image = $request->image;
        $newImage = time().$image->getClientOriginalName();
        $image->move('backend/img/posts/thumbnail/', $newImage);

        $createPost = Post::create([
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'content'       => $request->content,
            'image'         => 'backend/img/posts/thumbnail/'.$newImage,
            'slug'          => Str::slug($request->title),
            'user_id'       => Auth::id(),
        ]);

        $createPost->tags()->attach($request->tags);

        return redirect()->back()->with('success', 'Post berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $editPost = Post::findOrFail($id);
        $tags = Tag::all();

        return view('admin.post.edit', compact('categories','editPost', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required|min:3|max:50',
            'category_id'   => 'required|not_in:0',
            'content'       => 'required',
        ]);

        $post = Post::findOrFail($id);
        if($request->has('image')){
            $image = $request->image;
            $newImage = time().$image->getClientOriginalName();
            $image->move('backend/img/posts/thumbnail/', $newImage);

            $updatePost = [
                'title'         => $request->title,
                'category_id'   => $request->category_id,
                'content'       => $request->content,
                'image'         => 'backend/img/posts/thumbnail/'.$newImage,
                'slug'          => Str::slug($request->title),
            ];
        }else{
            $updatePost = [
                'title'         => $request->title,
                'category_id'   => $request->category_id,
                'content'       => $request->content,
                'slug'          => Str::slug($request->title),
            ];
        }

        $post->tags()->sync($request->tags);
        $post->update($updatePost);

        return redirect()->route('post.index')->with('success', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletePost = Post::findOrFail($id);
        $deletePost->delete();
        
        return redirect()->back()->with('success', 'Data berhasil di hapus sementara');
    }

    public function showPostInTrash()
    {
        $posts = Post::onlyTrashed()->paginate(10);

        return view('admin.post.trash', compact('posts'));
    }

    public function restorePostInTrash($id)
    {
        $post = Post::withTrashed()->whereId($id)->first();
        $post->restore();
        
        return redirect()->back()->with('success', 'Data berhasil di kembalikan!');
    }

    public function deletePostInTrash($id)
    {
        $post = Post::withTrashed()->whereId($id)->first();
        $post->forceDelete();

        return redirect()->back()->with('success', 'Data berhasil di hapus permanen!');
    }
}
