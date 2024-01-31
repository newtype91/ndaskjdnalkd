<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.teams.create');
    }
}
