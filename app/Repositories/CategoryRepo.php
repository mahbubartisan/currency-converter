<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryRepo
{

    public function getCategory()
    {
        $data = [];
        // $perPage = request('perPage', 5);
        $perPage = request()->perPage ?: 5;
        $data['categories'] = Category::query()->when(request()->search, function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%");
        })->paginate($perPage);
        $data['filters'] = request()->only('search');

        return $data;

    }
    public function save(Request $request, Category $category = null)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->name);
        $data['icon'] = $request->icon;

        if ($request->id) {
            $category = Category::findOrFail($request->id);
            $category->update($data);
        } else {

            Category::create($data);
        }

        $action = $category ? 'updated' : 'created';
        return redirect()->back()->with('message', "Category $action Successfully");
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('message', 'Category deleted Successfully');
    }
}
