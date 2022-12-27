<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Conversation;
use Inertia\Inertia;

class DiscussController extends Controller
{
    public function index()
    {
        $conversations = Conversation::query()
            ->with(['user:id,username,avatar', 'channel', 'lastReply'])
            ->withCount('replies')
            ->get();

        return Inertia::render('Discuss/Index', compact('conversations'));
    }

    public function show(Channel $channel, Conversation $conversation)
    {
        return Inertia::render('Discuss/Show', compact('channel', 'conversation'));
    }

    public function channel()
    {
        $channels = Channel::all();

        return Inertia::render('Discuss/Channel', compact('channels'));
    }
}
