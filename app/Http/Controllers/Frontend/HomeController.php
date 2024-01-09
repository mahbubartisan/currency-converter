<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['posts'] = Post::with('category')->get();
        return Inertia::render('Frontend/Home/Index', $data);
    }
}
