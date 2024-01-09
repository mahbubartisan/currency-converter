<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Repositories\PostRepo;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Traits\MediaTraits;

class PostController extends Controller
{
    use MediaTraits;

    private $postRepo;
    public function __construct(PostRepo $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        $data = $this->postRepo->getPost();
        return Inertia::render('Post/Index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return Inertia::render('Post/CreatePost', $data);
    }

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();
        return Inertia::render('Post/EditPost', compact('post', 'categories'));
    }
    
    public function save(PostRequest $request, Post $post = null)
    {
        return $this->postRepo->save($request, $post);
    }

    public function update(PostRequest $request, Post $post)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);
        if ($request->hasFile('media')) {

            $opt = [
                'dir' => 'posts',
            ];

            $res = $this->saveMedia($request->file('media'), $opt);
            if ($res->status) {
                $data['media'] = $res->id;
            }
        }
        $post->update($data);
        return redirect()->route('admin.posts.index')->with("message", "Post created Successfully");
    }

    public function delete(Post $post)
    {
        return $this->postRepo->destroy($post);
    }
}
