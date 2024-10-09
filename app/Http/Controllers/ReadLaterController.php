<?php

namespace App\Http\Controllers;

use App\Models\ReadLater;
use Illuminate\Http\Request;

class ReadLaterController extends Controller
{
    public function save($newsId)
{
    $userId = null; 

    $existing = ReadLater::where('user_id', $userId)->where('news_id', $newsId)->first();
    
    if (!$existing) {
        ReadLater::create([
            'user_id' => $userId,
            'news_id' => $newsId,
        ]);
    }

    return redirect()->back()->with('success', 'News saved for later!');
}

    public function index()
    {
        $savedNews = ReadLater::where('user_id', null)->with('news')->get(); 

        return view('readLater', compact('savedNews'));
    }

    public function destroy($id)
    {
        $item = ReadLater::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'News removed from saved for later.');
    }

}
