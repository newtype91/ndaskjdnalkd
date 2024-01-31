<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\UpdateRequest;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function __invoke(UpdateRequest $request, Team $team)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('images/team', $data['image']);
        }
        $team->update($data);
        return view('admin.teams.edit', compact('team'));
    }
}
