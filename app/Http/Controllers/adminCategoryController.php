<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class adminCategoryController extends Controller
{
    public function index(){
        $data = CategoryModel::get();
        return view('admin.category', ['data' => $data]);
    }

    public function input(){
        return view('admin.category-input');
    }

    public function save(Request $post){
        $data = new CategoryModel();
        $data->name_category = $post->name_category;
        $data->save();
        return redirect('/admin/category');
    }

    public function edit($id){
        $data = CategoryModel::where('id', $id)->first();
        return view('admin/category-edit', ['data'=>$data]);
    }

    public function update(Request $post,$id){
        $data = CategoryModel::where('id', $id)->first();
        $data->name_category = $post->name_category;
        $data->save();
        return redirect('/admin/category');
    
    }
    public function delete($id){
        $data = CategoryModel::where('id', $id)->delete();
        return redirect('/admin/category');
    }
}
