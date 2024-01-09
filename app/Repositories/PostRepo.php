<?php

namespace App\Repositories;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Traits\MediaTraits;
use Illuminate\Support\Str;

class PostRepo
{
    use MediaTraits;

    public function getPost()
    {
        $data = [];
        $data['posts'] = Post::with('category')->paginate(5);
        return $data;

    }
    public function save(PostRequest $request, Post $post = null)
    {

        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);
        // $data['media'] = $request->media;

        if ($request->hasFile('media')) {

            $opt = [
                'dir' => 'posts',
            ];

            $res = $this->saveMedia($request->file('media'), $opt);
            if ($res->status) {
                $data['media'] = $res->id;
            }
        }

        // if ($request->id) {
        //     $post = Post::findOrFail($request->id);
        //     $opt['delete'] = $post?->media;
        //     $data['updated_by'] = auth()->id();
        //     $post->update($data);
        // } else {
            $data['created_by'] = auth()->id();
            Post::create($data);
        // }

        // $action = $post ? 'updated' : 'created';

        return redirect()->route('admin.posts.index')->with("message", "Post created Successfully");
    }

    public function destroy(Post $post)
    {
        $this->deleteMedia($post?->media);
        $post->update([
            'deleted_by' => auth()->id()
        ]);
        $post->delete();
        return redirect()->back()->with("message", "Post deleted Successfully");

    }
}
