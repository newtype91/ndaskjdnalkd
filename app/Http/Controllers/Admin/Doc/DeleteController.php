<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doc\UpdateRequest;
use App\Models\Doc;

class DeleteController extends Controller
{
    public function __invoke( Doc $doc)
    {
        $doc->delete();
        return redirect()->route('admin.docs.index');
    }
}
