<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke()
    {
        $news = Post::latest()->paginate(30);
        return view('news.show', compact('news'));
    }
}
