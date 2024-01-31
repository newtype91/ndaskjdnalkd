<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\UpdateRequest;
use App\Models\Team;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Team $team)
    {
        $data = $request->validated();
        $team->update($data);
        return redirect()->route('admin.teams.show', $team->id);
    }
}
