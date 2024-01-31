<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Models\Doc;

class IndexController extends Controller
{
    public function __invoke()
    {
        $docs = Doc::latest()->paginate(15);
        return view('admin.docs.index', compact('docs'));
    }
}
