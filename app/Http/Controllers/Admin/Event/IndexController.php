<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;

class IndexController extends Controller
{
    public function __invoke()
    {
        $events = Event::latest()->paginate(15);
        return view('admin.events.index', compact('events'));
    }
}
