<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\UpdateRequest;
use App\Models\Event;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Event $event)
    {
        $data = $request->validated();
        $event->update($data);
        return redirect()->route('admin.events.show', $event->id);
    }
}
