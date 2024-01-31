<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sliders = Slider::latest()->paginate(15);
        return view('admin.banners.index', compact('sliders'));
    }
}
