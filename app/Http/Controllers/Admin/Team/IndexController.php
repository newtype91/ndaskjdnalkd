<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;

class IndexController extends Controller
{
    public function __invoke()
    {
        $teams = Team::latest()->paginate(15);
        return view('admin.teams.index', compact('teams'));
    }
}
