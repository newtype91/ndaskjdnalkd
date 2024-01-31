<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke()
    {
        $events = Event::latest()->paginate(10);
        return view('events.show', compact('events'));
    }
}
