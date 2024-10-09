<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewsModel;

class ReadLater extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'news_id'];


    public function news()
    {
        return $this->belongsTo(NewsModel::class, 'news_id');
    }
}
