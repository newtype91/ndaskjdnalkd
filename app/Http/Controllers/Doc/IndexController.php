<?php

namespace App\Http\Controllers\Doc;

use App\Http\Controllers\Controller;
use App\Models\Doc;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        Carbon::setLocale('ru_RU');
        $docs = Doc::latest()->paginate(25);
        return view('docs.index', compact('docs'));
    }
}
