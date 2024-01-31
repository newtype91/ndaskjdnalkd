<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Event $event)
    {

        Carbon::setLocale('ru_RU');
        return view('events.index', compact('event'));
    }
}
