<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doc\UpdateRequest;
use App\Models\Doc;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function __invoke(UpdateRequest $request, Doc $doc)
    {
        $data = $request->validated();
        if (isset($data['doc'])) {
            $data['doc'] = Storage::disk('public')->put('/docs', $data['doc']);
        }
        $doc->update($data);
        return view('admin.docs.edit', compact('doc'));
    }
}
