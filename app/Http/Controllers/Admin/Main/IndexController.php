<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Doc;
use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $docs = Doc::count();
        $news = Post::count();
        $events = Event::count();

        return view('admin.main.index', compact('docs', 'news', 'events'));
    }
}
