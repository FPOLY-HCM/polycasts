<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Channel;
use App\Models\Discussion;

class DiscussController extends Controller
{
    public function index()
    {
        $discussions = Discussion::query()
            ->with(['user:id,username,avatar', 'channel', 'lastReply'])
            ->withCount('replies')
            ->get();

        return Inertia::render('Discuss/Index', compact('discussions'));
    }

    public function show(Channel $channel, Discussion $discussion)
    {
        return Inertia::render('Discuss/Show', compact('channel', 'discussion'));
    }

    public function channel()
    {
        $channels = Channel::all();

        return Inertia::render('Discuss/Channel', compact('channels'));
    }
}
