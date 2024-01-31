<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Event;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Event $event)
    {
        Carbon::setLocale('ru_RU');
        $news_d = Post::latest()->take(1)->get();
        $news_l = Post::latest()->skip(1)->take(4)->get();
        $events = Event::latest()->take(2)->get();
        $sliders = Slider::latest()->take(3)->get();
        return view('main.index', compact('news_d', 'news_l', 'events', 'sliders'));
    }
}
