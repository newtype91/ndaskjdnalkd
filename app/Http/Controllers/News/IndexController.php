<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Post $news)
    {
        Carbon::setLocale('ru_RU');
        $newsCount = Post::count();
        return view('news.index', compact('news', 'newsCount'));
    }
}
