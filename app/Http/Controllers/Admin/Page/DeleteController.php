<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;

class DeleteController extends Controller
{
    public function __invoke( Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index');
    }
}
