<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.docs.create');
    }
}
