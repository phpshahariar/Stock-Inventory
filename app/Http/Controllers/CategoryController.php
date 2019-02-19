<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('dashboard.category.add-category');
    }

    public function saveCategory(Request $request){
        $this->validate($request,[
            'category_name' => 'required',
            'category_status' => 'required'
        ]);
        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->category_status = $request->category_status;
        $categories->save();
        return redirect()->back();
    }

    public function manageCategory(){
        $categories = Category::all();
        return view('dashboard.category.manage-category', ['categories'=>$categories]);
    }

    public function stockCategory($id){
        $categories = Category::find($id);
        $categories->category_status = 0;
        $categories->save();
        return redirect('/manage-category');
    }

    public function stockOutCategory($id){
        $categories = Category::find($id);
        $categories->category_status = 1;
        $categories->save();
        return redirect('/manage-category');
    }

    public function editCategory($id){
        $categories = Category::find($id);
        return view('dashboard.category.edit-stock',['categories'=>$categories]);
    }

    public function updateCategory(Request $request){
        $categories = Category::find($request->category_id);
        $categories->category_name = $request->category_name;
        $categories->category_status = $request->category_status;
        $categories->save();
        return redirect('/manage-category');
    }

    public function deleteCategory($id){
        $categories = Category::find($id);
        $categories->delete();
        return redirect('/manage-category');
    }
}
