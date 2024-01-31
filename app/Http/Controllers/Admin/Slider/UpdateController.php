<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\UpdateRequest;
use App\Models\Slider;
class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Slider $slider)
    {
        $data = $request->validated();
        $slider->update($data);
        return redirect()->route('admin.banners.show', $slider->id);
    }
}
