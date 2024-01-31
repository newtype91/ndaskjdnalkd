<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\UpdateRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function __invoke(UpdateRequest $request, Slider $slider)
    {
        $data = $request->validated();
        $slider->update($data);
        return view('admin.banners.edit', compact('slider'));
    }
}
