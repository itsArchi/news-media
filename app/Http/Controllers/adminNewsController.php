<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class adminNewsController extends Controller
{
    public function index(){
        $data = NewsModel::join('category', 'news.news_category', 'category.id')->select('news.*', 'category.name_category')->get();
        return view('admin.news', ['data' => $data]);
    }

    public function input(){
        $list_category = CategoryModel::get();
        return view('admin.news-input', ['list_category'=>$list_category]);
    }

    public function save(Request $post){
        $image_name = time().'.'.$post->image->extension();
        $post->image->move(public_path('image'),$image_name);

        $data_save = new NewsModel();
        $data_save->news_title = $post->news_title;
        $data_save->news_content = $post->news_content;
        $data_save->news_category = $post->news_category;
        $data_save->image = $image_name;
        $data_save->is_headline = 'no';
        $data_save->featured_news = 'no';
        $data_save->save();
        return redirect('/admin/news');
    }

    public function edit($id){
        $data = NewsModel::where('id', $id)->first();
        $list_category = CategoryModel::get();
        return view('admin/news-edit', ['data'=>$data, 'list_category'=>$list_category]);
    }

    public function update(Request $post,$id){
        $data_save = NewsModel::where('id', $id)->first();
        $data_save->news_title = $post->news_title;
        $data_save->news_content = $post->news_content;
        $data_save->news_category = $post->news_category;
        if ($post->image != null) {
            $image_name = time().'.'.$post->image->extension();
            $post->image->move(public_path('image'),$image_name);
            $data_save->image = $image_name;
        }
        $data_save->save();
        return redirect('/admin/news');
    
    }
    public function delete($id){
        $data = NewsModel::where('id', $id)->delete();
        return redirect('/admin/news');
    }

    public function set_headline($status, $id){
        $news = NewsModel::where('id', $id)->first();
        if ($status == "yes") {
            $news->is_headline = "yes";
        }
        elseif ($status == "no"){
            $news->is_headline = "no";
        }
        $news->save();
        return redirect('/admin/news');
    
    }
    public function set_featured_news($status, $id){
        $news = NewsModel::where('id', $id)->first();
        if ($status == "yes") {
            $news->featured_news = "yes";
        }
        elseif ($status == "no"){
            $news->featured_news = "no";
        }
        $news->save();
        return redirect('/admin/news');
    }
}
