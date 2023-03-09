<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {

        $data = Category::all();

        // dd($data);

        return view("category", compact("data"));
    }

    public function insert()
    {
        // dd("123");
        return view("category_form");
    }

    public function create(Request $request)
    {
        $name = $request->name;
        $description = $request->description;

        $category = new Category();

        $category->name = $name;
        $category->description = $description;

        $category->save();

        return to_route("category.index");
    }

    public function edit($id)
    {
        $category = Category::find($id);

        // dd($category);
        return view("category_edit", compact("category"));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return to_route("category.index");
    }

    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return to_route("category.index");
    }
}
