<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\UpdateRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function __invoke(UpdateRequest $request, Event $event)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('images/posts', $data['image']);
        }
        $event->update($data);
        return view('admin.events.edit', compact('event'));
    }
}
