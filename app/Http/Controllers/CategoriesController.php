<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    public function create()
    {
        $category = new Category;
        $category->name = request('category');
        $category->save();
        return redirect()->back();
    }
}
