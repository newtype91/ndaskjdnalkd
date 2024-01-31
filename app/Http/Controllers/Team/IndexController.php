<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Team $team)
    {

        Carbon::setLocale('ru_RU');
        return view('teams.index', compact('team'));
    }
}
