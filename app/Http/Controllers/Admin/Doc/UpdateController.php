<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doc\UpdateRequest;
use App\Models\Doc;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Doc $doc)
    {
        $data = $request->validated();
        $doc->update($data);
        return redirect()->route('admin.docs.show', $doc->id);
    }
}
