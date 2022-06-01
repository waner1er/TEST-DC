<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function fetch()
    {
        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => 'f08e828d88a448ddaa7548752f863163',
            'limit' => 20,
            'q' => 'Apple',
        ]);
        $news = $response->json()['articles'];
        return $news;
    }

    public function index()
    {
        return view('news.index');
    }

}
