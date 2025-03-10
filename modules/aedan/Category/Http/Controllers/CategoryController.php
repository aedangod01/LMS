<?php
namespace aedan\Category\Http\Controllers;

use Aedan\Category\Http\Requests\CategoryRequest;
use aedan\Category\Models\Category;
use App\Http\Controllers\Controller;
class CategoryController{
    public function index()
    {
        //todo Category Repository
        $categoires = Category::all();

        return view('Categories::index', compact('categoires'));
    }

    public function store(CategoryRequest $request)
    {   
        dd($request->all());

        Category::created([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id
        ]);
        return back();
    }
}
