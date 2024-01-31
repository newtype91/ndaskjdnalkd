<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;


class ShowController extends Controller
{
    public function __invoke(Slider $slider)
    {
        return view('admin.banners.show', compact('slider'));
    }
}
