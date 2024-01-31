<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\UpdateRequest;
use App\Models\Event;


class DeleteController extends Controller
{
    public function __invoke( Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index');
    }
}
