<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function __invoke(UpdateRequest $request, Page $page)
    {
        $data = $request->validated();
        $page->update($data);
        return view('admin.pages.edit', compact('page'));
    }
}
