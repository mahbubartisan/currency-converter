<?php

namespace App\Http\Controllers\Frontend;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.index');
    }
}
