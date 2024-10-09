<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        $list_latest_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->select('news.*', 'category.name_category')
        ->get();

        $list_headline_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->where('is_headline', 'yes')
        ->select('news.*', 'category.name_category')
        ->take(4)
        ->get();

        $list_featured_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->where('featured_news', 'yes')
        ->select('news.*', 'category.name_category')
        ->take(4)
        ->get();

        return view('frontend.homepage', [
            'list_latest_news' => $list_latest_news, 
            'list_headline_news' => $list_headline_news, 
            'list_featured_news' => $list_featured_news
        ]);
    }

    public function category($id){
        $list_latest_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->where('news_category', $id)
        ->select('news.*', 'category.name_category')
        ->get();

        $list_featured_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->where('featured_news', 'yes')
        ->select('news.*', 'category.name_category')
        ->take(4)
        ->get();

        return view('frontend.category', [
            'list_latest_news' => $list_latest_news,
            'list_featured_news' => $list_featured_news
        ]);
    }
    
    public function newsIndex(){
        $list_latest_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->select('news.*', 'category.name_category')
        ->paginate(2);

        $list_featured_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->where('featured_news', 'yes')
        ->select('news.*', 'category.name_category')
        ->take(4)
        ->get();

        return view('frontend.newsIndex', [
            'list_latest_news' => $list_latest_news,
            'list_featured_news' => $list_featured_news,
            'prev_url' => $list_latest_news->previousPageUrl(),
            'next_url' => $list_latest_news->nextPageUrl(),
        ]);
    
    }
    public function detail($id){
        $news_detail = NewsModel::join('category', 'news.news_category', 'category.id')
        ->where('news.id', $id)
        ->select('news.*', 'category.name_category')
        ->first();

        $list_featured_news = NewsModel::join('category', 'news.news_category', 'category.id')
        ->where('featured_news', 'yes')
        ->select('news.*', 'category.name_category')
        ->take(4)
        ->get();

        return view('frontend.detail', [
            'news_detail' => $news_detail,
            'list_featured_news' => $list_featured_news
        ]);
    }
}
