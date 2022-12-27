<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {
        $conversations = Conversation::query()
            ->with(['user', 'channel'])
            ->get();

        return Inertia::render('Home', compact('conversations'));
    }
}
