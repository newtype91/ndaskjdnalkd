<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke()
    {
        $zero = Team::where('head', 0)->take(1)->get();
        $teams = Team::whereBetween('head', [1, 3])->orderBy('head')->get();

        return view('teams.show', compact('zero', 'teams'));
    }
}
