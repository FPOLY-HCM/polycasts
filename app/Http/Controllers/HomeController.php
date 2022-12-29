<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {
        $discussions = Discussion::query()
            ->with(['user', 'channel'])
            ->get();

        return Inertia::render('Home', compact('discussions'));
    }
}
