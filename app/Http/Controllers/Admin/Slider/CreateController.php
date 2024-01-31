<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.banners.create');
    }
}
