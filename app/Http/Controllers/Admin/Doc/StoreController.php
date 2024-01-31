<?php

namespace App\Http\Controllers\Admin\Doc;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doc\StoreRequest;
use App\Models\Doc;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['doc'] = Storage::disk('public')->put('/docs', $data['doc']);

        Doc::create($data);
        return redirect()->route('admin.docs.index');
    }
}
