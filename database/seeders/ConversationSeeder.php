<?php

namespace Database\Seeders;

use App\Models\Channel;
use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conversation::truncate();

        $titles = [
            'FormRequest and upload file issue',
            'query shows up critical mistake.',
            'If I will put the $id in public function services($id) the error will you see on below. Help me guys :(',
            'Pagination not working',
            'Injecting HTML into `@yield(\'head\')` using code',
            'User Registration with Sanctum for Laravel API',
            'npm i creates an empty node_modules folder with a bunch of errors',
            'Throwable',
            'HasOneThrough() not working with Inertia?',
            'Server is sending parameters to the URL',
            'Testing auth.basic',
            'Laravel + Passport + Socialite + SPA',
            'Save id\'s for realted dictionary',
            'Prevent Forge Quick Deploy on GitHub Actions Fail',
            'Routes in Laravel',
            'Laravel showing 1 as true in the data',
            'Upgrade Laravel Project to PHP 8.2',
            'copying files from remote server to my local machine',
            'How to add an image watermark or image background in PDF file in Laravel',
            'how can show created_at updated_at value as only date and time in blade file',
            'Missing required parameter',
            'overtrue Laravel Follow Problem',
            'Rewrite the query builder statement',
            'Error while use Soketi in production',
            'How to access PHP variables in JavaScript?',
            'Livewire - File Upload not working',
            'Table not updating with no error',
            'how to extend component with base component blade',
            'Best practice handling diffrent filter parameter',
            'pass data from child to parent component blade',
            'how to push a scripts to a component blade',
            'Uncaught Error: Class \'Normalizer\' not found',
            'does laravel components have some property suggestion when calling a component?',
            'Has anyone used BinarCode\'s Restify package?',
            'Can we use Nova like this',
            'encrypt .env',
            'dot notation for get() method in collection',
            'Faster queries',
            'Inertia / Vue: change which CSS files are used based on route',
            'could not find driver (SQL: select * from information_schema.tables where table_schema = secondlaravelapp and table_name = migrations and table_type = \'BASE TABLE\')',
            '3-way many to many relationship with pivot table',
            'how to pass data to controller in laravel from Route: Laravel 8',
            'TypeError: Failed to fetch net::ERR_CONNECTION_RESET',
            'Vue 2 --> 3 and Mix --> vite',
            'laravel eloquent relationship for indirectly related model',
            'Livewire Submit Buttons - User Abuse',
            'Livewire Model Relation',
            'Vitejs. Running a script for a specific task',
        ];

        $usersCount = User::count();
        $channelsCount = Channel::count();

        foreach ($titles as $title) {
            Conversation::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'user_id' => rand(1, $usersCount),
                'channel_id' => rand(1, $channelsCount),
                'body' => fake()->paragraph(5),
                'views' => rand(0, 99999),
            ]);
        }
    }
}
