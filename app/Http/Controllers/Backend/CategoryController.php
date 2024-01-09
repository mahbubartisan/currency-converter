<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepo;
use Inertia\Inertia;

class CategoryController extends Controller
{
    private $categoryRepo;
    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function index()
    {
        $data = $this->categoryRepo->getCategory();
        return Inertia::render('Category/Index', $data);
    }

    public function save(CategoryRequest $request, Category $category = null)
    {
        return $this->categoryRepo->save($request, $category);
    }

    public function delete(Category $category)
    {
        return $this->categoryRepo->destroy($category);
    }
}
