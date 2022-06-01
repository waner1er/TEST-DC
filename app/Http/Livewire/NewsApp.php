<?php

namespace App\Http\Livewire;

use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class NewsApp extends Component
{
    use WithPagination;

    public $toggle = false;
    public $article;
    public $title;

    public function showArticle(News $article)
    {
        $this->toggle = true;
        $this->article = $article;
    }
public function toggle()
    {
        $this->toggle = !$this->toggle;
    }

    public function render()
    {

        return view('livewire.news-app', ['news' => News::paginate(6)])->layout('layouts.app');
    }
}
