<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;

class ShowController extends Controller
{
    public function __invoke(Team $team)
    {
        return view('admin.teams.show', compact('team'));
    }
}
