<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.events.create');
    }
}
