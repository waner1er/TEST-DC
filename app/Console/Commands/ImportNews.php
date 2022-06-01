<?php

namespace App\Console\Commands;

use App\Models\News;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addNews';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => 'f08e828d88a448ddaa7548752f863163',
            'limit' => 20,
            'q' => 'Apple',
        ]);
        $news = $response->json()['articles'];
        foreach ($news as $article) {
            News::create([
                'title' => $article['title'],
                'description' => $article['description'],
                'content' => $article['content'],
                'author' => $article['author'],
                'urlToImage' => $article['urlToImage'],
                'publishedAt' => $article['publishedAt'],
            ]);
        }
        return true;
    }
}
