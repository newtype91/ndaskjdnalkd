<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\UpdateRequest;
use App\Models\Slider;

class DeleteController extends Controller
{
    public function __invoke( Slider $slider)
    {
        $slider->delete();
        return redirect()->route('admin.banners.index');
    }
}
