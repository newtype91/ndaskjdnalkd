<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Models\Doc;

class ShowController extends Controller
{
    public function __invoke(Doc $doc)
    {
        return view('admin.docs.show', compact('doc'));
    }
}
