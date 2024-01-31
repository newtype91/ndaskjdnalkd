<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\UpdateRequest;
use App\Models\Team;


class DeleteController extends Controller
{
    public function __invoke( Team $team)
    {
        $team->delete();
        return redirect()->route('admin.teams.index');
    }
}
