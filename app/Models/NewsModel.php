<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['news_title', 'news_content', 'news_category', 'image', 'is_headline' , 'featured_news'];
}
