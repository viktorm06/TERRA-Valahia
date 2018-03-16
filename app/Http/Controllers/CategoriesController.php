<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    public function create($id = null)
    {
        if ($id == null)
            $category = new Category;
        else
            $category = Category::find($id);
        $category->name = request('category');
        $category->save();
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    public function delete($id)
    {
        $category = new Category;
        $category -> del($id);
        //return redirect()->back();
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit-category', compact('category'));
    }
}
