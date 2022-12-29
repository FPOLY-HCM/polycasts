<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelSeeder extends Seeder
{
    public function run(): void
    {
        Channel::truncate();

        $channels = [
            [
                'name' => 'Code Review',
                'description' => 'Do you have a short snippet of code that you\'d like others to review and provide feedback?',
            ],
            [
                'name' => 'Design',
                'description' => 'If you have a design-specific question, we\'ll do our best to help out!',
            ],
            [
                'name' => 'Eloquent',
                'description' => 'Eloquent is an object-relational mapper that makes it enjoyable to interact with your database.',
            ],
            [
                'name' => 'Envoyer',
                'description' => 'Envoyer is a paid service by the Laravel team. It offers deployments you\'ve only dreamed about. Zero downtime. Zero fuss.',
            ],
            [
                'name' => 'Feedback',
                'description' => 'If you have a suggestion that is intended to improve the Laracasts website, itself, let us know!',
            ],
            [
                'name' => 'Forge',
                'description' => 'Forge is a paid first-party Laravel tool for provisioning and deploying PHP applications.',
            ],
            [
                'name' => 'General',
                'description' => 'If you have a more general programming-related question, this is the channel for you!',
            ],
            [
                'name' => 'Guides',
                'description' => 'Have a tip, trick, or article that you\'d like to share with the rest of the community? Post away!',
            ],
            [
                'name' => 'Inertia',
                'description' => 'Inertia assists with building modern single-page apps using classic server-side routing and controllers.',
            ],
            [
                'name' => 'JavaScript',
                'description' => 'If you have a vanilla JavaScript-related question, this is the channel for you.',
            ],
            [
                'name' => 'Laravel',
                'description' => 'Laravel is a popular PHP framework that was released in 2013. This channel is reserved for Laravel-specific topics.',
            ],
            [
                'name' => 'Livewire',
                'description' => 'Livewire is a framework for Laravel that makes building dynamic interfaces simple.',
            ],
            [
                'name' => 'Lumen',
                'description' => 'Lumen is a micro-framework, created by the Laravel team. It is no longer recommended for new applications.',
            ],
            [
                'name' => 'Mix',
                'description' => 'Laravel Mix is an elegant webpack wrapper that targets the 80% use-case.',
            ],
            [
                'name' => 'Nova',
                'description' => 'Nova is a beautifully-designed administration panel for Laravel, crafted by the creators of Laravel.',
            ],
            [
                'name' => 'React',
                'description' => 'React is an incredibly popular JavaScript library for building user interfaces.',
            ],
            [
                'name' => 'Requests',
                'description' => 'If you\'d like to discuss or request a new Laracasts course, ask away here!',
            ],
            [
                'name' => 'Servers',
                'description' => 'Are your server management skills falling short? No worries, we have a large community ready to help.',
            ],
            [
                'name' => 'Spark',
                'description' => 'Laravel Spark is the complete recurring billing solution for Laravel. A starter-kit for your next great SaaS application. ',
            ],
            [
                'name' => 'Testing',
                'description' => 'This channel focuses on automated testing, including framework-specific discussions and general topics.',
            ],
            [
                'name' => 'Tips',
                'description' => 'Have a tip, trick, or article that you\'d like to share with the rest of the community? Post away!',
            ],
            [
                'name' => 'Vapor',
                'description' => 'Laravel Vapor is a paid serverless deployment platform for Laravel, powered by AWS.',
            ],
            [
                'name' => 'Vite',
                'description' => 'Vite is a build tool that aims to provide a faster and leaner development experience for modern web projects.',
            ],
            [
                'name' => 'Vue',
                'description' => 'Vue is one of the most popular JavaScript frameworks in the world. It was first introduced in 2014.',
            ],
        ];

        foreach ($channels as $channel) {
            Channel::create([
                ...$channel,
                'slug' => Str::slug($channel['name']),
                'color' => fake()->hexColor(),
            ]);
        }
    }
}
