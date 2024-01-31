<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Page;
class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Page $page)
    {
        $data = $request->validated();
        $page->update($data);
        return redirect()->route('admin.pages.show', $page->id);
    }
}
