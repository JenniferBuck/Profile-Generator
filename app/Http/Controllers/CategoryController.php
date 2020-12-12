<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){
        $data=$request->validate([
            'name'=>['required']
        ]);
        Category::create($data);
        return back();
    }

    public function show(Category $category){
        return view('category.show',compact('category'));
    }

    public function edit(Category $category){
        return view('category.edit',compact('category'));
    }

    public function update(Request $request,Category $category){
        $data=$request->validate([
            'name'=>[]
        ]);
        $category->update($data);
        return redirect()->route('home');
    }

    public function destroy(Category $category){
       $category->delete();
       return back();
    }
}
